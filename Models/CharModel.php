<?php

namespace App\Models;

require_once 'Database.php';
require_once 'Models/Character.php';

use App\Database;
use PDO;

class CharModel
{
  private $connection;

  public function __construct()
  {
    $this->connection = new Database();
  }
  public function getAll()
  {
    $query = $this->connection->getPdo()->prepare("SELECT id,name,race,class,defense,attack FROM `character`");
    $query->execute();
    return $query->fetchAll(PDO::FETCH_CLASS, "App\Models\Character");
  }

  public function create($char)
  {
    $query = $this->connection->getPdo()->prepare('INSERT INTO `character` (name, class, race, attack, defense) VALUES (:name, :class, :race, :attack, :defense)');
    $query->execute([
      'name' => $char['name'],
      'class' => $char['class'],
      'race' => $char['race'],
      'attack' => $char['attack'],
      'defense' => $char['defense'],
    ]);
  }

  public function delete($id)
  {
    $query = $this->connection->getPdo()->prepare('DELETE FROM `character` WHERE id = :id');
    $query->execute([
      'id' => $id,
    ]);
  }
  public function update($id, $char)
  {
    $query = $this->connection->getPdo()->prepare('UPDATE `character` SET name = :name WHERE id = :id');
    $query->execute([
      'id' => $id,
      'name' => $char['name'],
    ]);
  }

  public function getOne($id)
  {
    $query = $this->connection->getPdo()->prepare("SELECT id,name,race,class,defense,attack FROM `character` WHERE id = :id");
    $query->execute([
      'id' => $id,
    ]);
    return $query->fetchObject("App\Models\Character");
  }
}

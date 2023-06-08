<?php

namespace App;

use PDO;

class Database
{
  protected $pdo;

  public function __construct()
  {
    $this->pdo = new PDO("mysql:host=localhost;dbname=characters", "root", "f6KA@2,9Em[vbDF;~dP/VjrqFaUD");
  }

  public function getPdo()
  {
    return $this->pdo;
  }
}

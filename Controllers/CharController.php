<?php

namespace App\Controllers;

require_once 'Models/CharModel.php';

use App\Models\CharModel;

class CharController
{
  /**
   * Summary of charModel
   * @var 
   */
  protected $charModel;

  /**
   * Summary of __construct
   */
  public function __construct()
  {
    $this->charModel = new CharModel();
  }

  /**
   * Summary of getIndex
   * @return void
   */
  public function getIndex()
  {
    $chars = $this->charModel->getAll();
    require_once 'Views/chars/index.php';
  }

  /**
   * Summary of getCreate
   * @return void
   */
  public function getCreate()
  {
    require_once 'Views/chars/create.php';
  }

  /**
   * Summary of postCreate
   * @return void
   */
  public function postCreate()
  {
    $char = $_POST;
    $this->charModel->create($char);
    header('Location: ../char/index');
  }
  public function getDelete($id)
  {
    $this->charModel->delete($id);
    header('Location: ../index');
  }


  public function getUpdate($id)
  {
    $char = $this->charModel->getOne($id);
    require_once 'Views/chars/modify.php';
  }

  public function postUpdate($id)
  {
    $char = $_POST;
    $this->charModel->update($id, $char);
    header('Location: ../index');
  }

  //   fait moi le getShow qui permet d'afficher ma page details.php avec les bonne information du personnage selectionnée
  public function getDetails($id)
  {
    // fait moi le code qui permet que ma page details s'affiche
    $char = $this->charModel->getOne($id);
    require_once 'Views/chars/details.php';
  }
}

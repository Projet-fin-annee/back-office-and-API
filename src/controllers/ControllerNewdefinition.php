<?php

class ControllerNewdefinition
{

  private $_newdefinitionmanager;
  public function __construct($url)
  {
    if (isset($url) && count($url) > 1) {
      throw new Exception("Page introuvable");
    } else {

      $this->create_newdefinition();
      require_once("./views/viewBo-newdefinition.php");
    }
  }


  public function create_newdefinition()
  {
    $word = $_POST['word'];
    $text = $_POST['text'];

    $this->_newdefinitionmanager =  new DefinitionManager;
    $this->_newdefinitionmanager->create_definition($word, $text);
  }
}

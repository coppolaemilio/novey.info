<?php
namespace Libre;

// Gets the $_POST variable and formats it nicely
class Post extends \Libre\GlobalClass
  {
  protected function setone($Name, $Value)
    {
    $_POST[$Name] = $Value;
    }
  
  protected function removeone($Name)
    {
    $_POST[$Name] = null;
    unset($_POST[$Name]);
    }
  
  protected function removeall()
    {
    $_POST = array();
    unset($_POST);
    }
  }




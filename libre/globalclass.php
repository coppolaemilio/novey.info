<?php
namespace Libre;

// General class for extension. Converts global variables to local classes.
/* Available globals variables:
  $GLOBALS  Ignored since there's none
  $_SERVER  
  $_GET     It'll only have the url
  $_POST    
  $_FILES   
  $_COOKIE  
  $_SESSION 
  $_REQUEST 
  $_ENV     Ignored since there's none
*/
class GlobalClass
  {
  // Variable to store all the data
  protected $data = array();
  
  
  // Store the passed data
  public function __construct($Data)
    {
    $this->data = $Data;
    }
  
  
  // Return the correct element
  public function __get($name)
    {
    if (isset($this->data[$name]))
      return $this->data[$name];
    }
  
  
  // Set the correct element
  public function __set($name, $value = "")
    {
    // We actually want to delete the data
    if (isset($this->data[$name]) && empty($value))
      {
      unset($this->data[$name]);
      $this->removeone($name);
      return 1;
      }
    
    $this->data[$name] = $value;
    $this->setone($name, $value);
    return 1;
    }
  
  
  // Delete all related data
  public function remove()
    {
    // Remove the data from the current object
    $this->data = array();
    
    // Remove it from the global scope
    $this->removeall();
    }
  }




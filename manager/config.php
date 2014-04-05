<?php
class userConfig {
  private $dbhost = "localhost";
  private $db     = "news";
  private $dbuser = "username";
  private $dbpass = "password";
  
  // The data that will be stored and available from each user
  private $userdata = array(
    "nombre" => array("text" => "Nombre", "type" => "text", "inputtype" => "text", "required" => 1),
    "descripcion" => array("text" => "Descripcion", "type" => "text", "inputtype" => "text", "required" => 0)
    );
  
  // Which one to display by default in the button
  private $username = "firstname";
  
  // Load jquery the first thing in the body. Disable if you already included it.
  private $jquery   = 0;
  
  // Check whether to load the css stylesheet or not. You might want not to load it if you minimize it and include in your main one
  private $css      = 1;
  
  // Link to your terms of Service. Will be include as a checkbox in the "register" page.
  private $tos      = "";
  
  // Set the time the users will be logged in (in days) after last log in
  private $howlong  = 50;
  
  // The bit of the url. For http://example.com/UserManager would be "/UserManager/"
  private $folder   = "/manager";
  
  // Set the base redirect url, since some services require it
  private $url = "http://novey.info";
  
  // TODO: a compatibility list.
  // The services you want to allow your user to login with.
  private $services = array ("persona", "facebook", "google", "microsoft");
  
  // Required by password_compat.
  private $cost     = 10;
  
  // Set the absolute path
  private $path = "";
  
  // Set the file that will receive the errors
  private $error_log = "";
  
  private $facebook = array(
    "appId"  => "",
    "secret" => ""
    );
  
  private $google = array(
    "client_id"  => "",
    "client_secret" => "",
    "developer_key" => ""
    );
  
  private $microsoft = array(
    "client_id" => "",
    "client_secret" => ""
    );
  
  private $twitter = array(
    "consumer_key"  => "",
    "consumer_secret" => ""
    );
  
  public function __get($Name) {
    if (property_exists($this, $Name)) {
      return $this->$Name;
      }
    }
  
  public function __construct() {
    
    
    // SHOULD BE MIGRATED TO INSTALL.PHP
    // Verify the services
    $Services = $this->services;
    // Iterate over each service
    foreach ($Services as $Key=>$Service)
      // If the following, required files are not included
      if (!file_exists($this->path . "/services/" . $Service . "/verify.php") ||
          !file_exists($this->path . "/services/" . $Service . "/logo.svg")   ||
          !file_exists($this->path . "/services/" . $Service . "/click.js")
          )
        // Delete service
        unset($Services[$Key]);
    
    $this->services = $Services;
    }
  }
  

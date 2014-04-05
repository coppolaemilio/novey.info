<?php
// No hace ningun echo
// Crea la variable "$news", que es un array con las noticias
// Campos: id (para el link), title, text, image, editor_id, tags (un array)

error_reporting(E_ALL);
ini_set('display_errors', 1);

// The user manager
include "./manager/include.php";


// Iniciar el objeto PDO
$DB = new PDO("mysql:host=localhost;dbname=news;charset=utf8", "username", "password");

if (isset($_POST['title']))
  {
  include "save.php";
  exit;
  }
else if (empty($_GET['url']))
  {
  include "portada_db.php";
  $body = "portada.php";
  }
elseif ($_GET['url'] == "moderar")
  {
  include "moderar_db.php";
  $body = "moderar.php";
  }
elseif ($_GET['url'] == "publicar")
  {
  $body = "publicar.php";
  }
else
  {
  include "articulo_db.php";
  $body = "articulo.php";
  }

include "html.php";

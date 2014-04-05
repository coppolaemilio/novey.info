<?php

if (strpos("mierda", strtolower($Post->text)) !== false)
  {
  echo "Error, tu publicación contiene demasiadas palabras indebidas";
  exit;
  }

$id = preg_replace('/[^\da-z]/i', '-', $Post->title);

$STH = $DB->prepare("SELECT * FROM moderate WHERE id = ?");
$STH->execute(array($id));
$result = $STH->fetch();
if (!empty($result))  
  {
  //echo "Error, articulo ya existe";
  //exit;
  }






//if they DID upload a file...
if($_FILES['photo']['name'])
  {
  //if no errors...
  if(!$_FILES['photo']['error'])
    {
    $valid_file = true;
    //now is the time to modify the future file name and validate the file
    $new_file_name = strtolower($_FILES['photo']['tmp_name']); //rename file
    if($_FILES['photo']['size'] > (1024000)) //can't be larger than 1 MB
      {
      $valid_file = false;
      $message = 'Oops!  Your file\'s size is to large.';
      }

    //if the file has passed the test
    if($valid_file)
      {
      $first = explode("/", $new_file_name);
      $first = array_shift($first);

      $destiny = __DIR__ . '/images/' . $id . ".jpg";
      //move it to where we want it to be
      move_uploaded_file($_FILES['photo']['tmp_name'], $destiny);
      }
    }
  }


$STH = $DB->prepare("INSERT INTO moderate (id, title, text, image, tags) VALUES (?, ?, ?, ?, ?)");
$STH->execute(array($id, $Post->title, $Post->text, "/images/" . $id . ".jpg", $Post->tags));

$error = $STH->errorInfo();
if (!empty($error[2]))
  {
  var_dump($error);
  }
else
  {
  header("Location: /moderar");
  }

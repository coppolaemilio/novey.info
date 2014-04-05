<?php
// No hace ningun echo
// Crea la variable "$news", que es un array con las noticias
// Campos: id (para el link), title, text, image, editor_id, tags (un array)

// tags: id, name, article_id

$STH = $DB->prepare("SELECT * FROM moderate ORDER BY date DESC");
$STH->execute();
$news = $STH->fetchAll();

foreach ($news as $key => $new)
  {
  $STH = $DB->prepare("SELECT * FROM tags WHERE article_id = ?");
  $STH->execute(array($new['id']));
  $tags = $STH->fetchAll(PDO::FETCH_ASSOC);
  
  $tagStr = "";
  foreach ($tags as $tag)
    {
    $tagStr = $tag['name'];
    }
  
  $news[$key]['tags'] = $tagStr;
  }

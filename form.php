<h2>Publica</h2>
<form action = "" method = "POST">
  <input type = "text" name = "title" value = "<?= $Post->title; ?>" placeholder = "Título">
  <br>
  <input type="file" name="image" placeholder="Paste image url...">
  <br>
  <textarea class = "ckeditor" name = "text" placeholder = "La noticia completa que quieres publicar"><?= $Post->text; ?></textarea>
  <input type = "text" name = "tags" value = "<?= $Post->tags; ?>" placeholder = "Tags separadas por comas">
  <input type = "submit" value = "Enviar">
</form>

<script type="text/javascript">
  CKEDITOR.config.customConfig = '/ckeditor.js';
</script>
<style type="text/css">
	.big{
		padding: 10px;
		margin-bottom: 10px;
	}
	.send-button{
		float: right;
		border-radius: 4px;
		border: 0px none;
		color: #FFF;
		padding: 4px 8px;
		margin-top: 20px;
		background-color: #416DDF;
	}
</style>
<form action = "" method = "POST" enctype="multipart/form-data">
<div style="float:left; width:43%;">
  <input class="big" type = "text" name = "title" value = "<?= $Post->title; ?>" placeholder = "Título">
  <br>
  <input class="big" type = "text" name = "tags" value = "<?= $Post->tags; ?>" placeholder = "#Ciencias, #Valencia, #HackForGood">
</div>
<div style="float:right; width:35%; margin-bottom:-20px; margin-top:-20px;">
	<label for="file-input" style="cursor:pointer;">
	        <img src="http://novey.info/images/addimage.png" alt="Upload">
    </label>
	<br>
	<input id="file-input" type="file" name="photo" style="display: none;" placeholder="Paste image url...">
</div>
<div style="
clear:both;
display: block;
height: 15px;"></div>
  <textarea style="margin-top:32px;" class = "ckeditor" name = "text" placeholder = "La noticia completa que quieres publicar"><?= $Post->text; ?></textarea>
  <input class="send-button" type = "submit" value = "Enviar">
</form>
<div style="height:120px; display:block;"></div>

<!DOCTYPE html>
<html>
<head>
	<title>Novey</title>
	<link href="style.css" rel="stylesheet">
	<link rel="shortcut icon" href="icon.png">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Maven+Pro' rel='stylesheet' type='text/css'>
	<meta charset="utf-8"> 
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src = "//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.3.2/ckeditor.js"></script>
	<script src="/javascript.js"></script>
  
</head>
<? include $userBody ;?>
<body>
<header>
	<button class="UserButton"></button>
	<a href="/moderar">
	  <button class = "moderar">
	    Moderar
	  </button>
	</a>
	<a href="/publicar">
	  <button class = "publicar">
	    Publicar
	  </button>
	</a>
	<h1>
		<a href="http://novey.info">
		<img src="icon.png">
		Novey<span class="domain">.info</span>
		</a>
	</h1>
	<span class="slogan">El periodista eres tú</span>
	<nav id="main-nav">
		<ul>
			<li class="internacional"><span class="hashtag">#</span>Internacional |
			<li class="nacional"><span class="hashtag">#</span>Nacional |
			<li class="negocios"><span class="hashtag">#</span>Negocios |
			<li class="opinion"><span class="hashtag">#</span>Opinión |
			<li class="deportes"><span class="hashtag">#</span>Deportes |
			<li class="Ciencias"><span class="hashtag">#</span>Ciencias |
			<li class="cultura"><span class="hashtag">#</span>Cultura |
			<li class="video"><span class="hashtag">#</span>Video
		</ul>
	</nav>
</header>
<?php include $body; ?>
</body>
</html>

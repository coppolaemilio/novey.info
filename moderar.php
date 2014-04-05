<div id="news" class = "moderar">
	<?php foreach ($news as $new):?>
		<a href="/<?= $new["id"] ;?>">
			<article class = "<?= $new['tags']; ?>">
				<img src="<?= $new['image'];?>" alt="">
				<?// var_dump($User);?>
				<h2><?= $new['title']; ?></h2>
				<time><?= $new['date']; ?></time>
				<p><?= $new['text']; ?></p>
			</article>
		</a>
	<?php endforeach ?>
</div>

<? include "recomendados.php" ?>

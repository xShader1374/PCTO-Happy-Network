<?php
	global $media;
?>

<div class="media-card">
	<h5 class="media-title unselectable"><?= $media["nome"] ?></h5>
	<img class="media-image unselectable" src="<?= $media["copertina"] ?>" alt="media-image">
	<div class="Separator-Card unselectable"></div>
	<p class="media-description unselectable"><?= $media["trama"] ?></p>
</div>
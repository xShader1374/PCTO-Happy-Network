<?php
	global $media;
?>

<div class="media-card">
	<h5 class="media-title unselectable"><?= $media["title"] ?></h5>
	<img class="media-image unselectable" src="<?= $media["img_url"] ?>" alt="media-image">
	<div class="Separator-Card unselectable"></div>
	<p class="media-description unselectable"><?= $media["description"] ?></p>
</div>
<?php
	global $card;
?>

<div class="media-card">
	<h5 class="media-title unselectable"><?= $card["title"] ?></h5>
	<img class="media-image unselectable" src="<?= $card["img_url"] ?>" alt="media-image">
	<div class="Separator unselectable"></div>
	<p class="media-description unselectable"><?= $card["description"] ?></p>
</div>
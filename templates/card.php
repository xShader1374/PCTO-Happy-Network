<?php
	global $media_id;
    
    $media_data = getSingleDataArrayWithCurl("collections/Media/records/".$media_id);
?>

<div class="media-card">
	<h5 class="media-title unselectable"><?= $media_data["nome"] ?></h5>
	<img class="media-image unselectable" src="<?= $media_data["copertina"] ?>" alt="media-image">
	<div class="Separator-Card unselectable"></div>
	<p class="media-description unselectable"><?= $media_data["trama"] ?></p>
</div>
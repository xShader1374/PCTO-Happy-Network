<?php
	global $media;
?>

<!-- passi direttamente media array e non campi singoli media["campo"], media["campo"], ecc.. -->

<div class="btn media-card text-secondary" data-bs-toggle="modal" data-bs-target="#mediaInspectorModal" onclick='updateModalInfo("<?= $media["nome"] ?>", "<?= $media["trailer_url"] ?>", "<?= $media["trama"] ?>", "<?= $media["id"] ?>", "<?= $media["tipo"] ?>")'>
	<h5 class="media-title unselectable"><?= $media["nome"] ?></h5>
	<img class="media-image unselectable" src="<?= $media["copertina"] ?>" alt="media-image">
	<div class="Separator-Card unselectable"></div>
	<p class="media-description unselectable"><?= $media["trama"] ?></p>
</div>
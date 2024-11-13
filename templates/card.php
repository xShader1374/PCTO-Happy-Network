<?php
	global $card;

    //$card_title = "Title";
    //$card_description = "Description";
    //$card_img_url = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s";
?>

<div class="media-card">
	<h5 class="media-title unselectable"><?= $card["title"] ?></h5>
	<img class="media-image unselectable" src="<?= $card["img_url"] ?>" alt="media-image">
	<div class="Separator unselectable"></div>
	<p class="media-description unselectable"><?= $card["description"] ?></p>
</div>
<?php
$lista_film_recenti = getDataItemsArrayWithCurl(
	'collections/Media/records/?filter=(tipo="film")&sort=-created&perPage=10'
);

$lista_serietv_recenti = getDataItemsArrayWithCurl(
	'collections/Media/records/?filter=(tipo="serie_tv")&sort=-created&perPage=10'
);
?>

<div class="Section">
	<h3 class="Section-Title">Serie TV Recenti</h3>
	<div class="media-container">
		<?php
		foreach ($lista_serietv_recenti as $media) {
			include("templates/card.php");
		}
		?>
	</div>
</div>
<div class="Separator"></div>
<div class="Section">
	<h3 class="Section-Title">Film Recenti</h3>
	<div class="media-container">
		<?php
		foreach ($lista_film_recenti as $media) {
			include("templates/card.php");
		}
		?>
	</div>
</div>
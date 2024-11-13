<?php

$categorie_solo_film = array("romantico", "horror");

foreach ($categorie_solo_film as $index => $categoria) {
    if ($index == 0) {
        include("templates/section.php");
        continue;
    }
    
    echo '<div class="Separator unselectable"></div>';
	include("templates/section.php");
}
?>
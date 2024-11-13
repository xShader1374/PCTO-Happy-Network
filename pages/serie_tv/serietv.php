<?php

$categorie_solo_serietv = array("azione", "drammatico", "fantasy", "horror");

foreach ($categorie_solo_serietv as $index => $categoria) {
    if ($index == 0) {
        include("templates/section.php");
        continue;
    }
    
    echo '<div class="Separator unselectable"></div>';
	include("templates/section.php");
}
?>
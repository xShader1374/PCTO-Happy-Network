<?php

$categorie_solo_film = array("romantico", "horror");

?>

<?php
foreach ($categorie_solo_film as $categoria) {
	include_once("templates/section.php");
}
?>
<?php

//chiamata a pocketbase sulla tabella categorie:
//per ogni categoria: nome

//se pagina corrente = serietv allora categoria.tipo = serietv
//se pagina corrente = film allora categoria.tipo = film

$categorie = array("azione", "drammatico", "romantico", "fantasy", "horror");

?>

<?php
foreach ($categorie as $categoria) {
	include_once("templates/section.php");
}
?>
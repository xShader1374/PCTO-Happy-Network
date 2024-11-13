<?php

//chiamata a pocketbase sulla tabella categorie:
//per ogni categoria: nome

//se pagina corrente = serietv allora categoria.tipo = serietv
//se pagina corrente = film allora categoria.tipo = film

$categorie = array("azione", "drammatico", "romantico", "fantasy", "horror");

?>

<?php

foreach ($categorie as $index => $categoria) {
    if ($index == 0) {
        include("templates/section.php");
        continue;
    }
    
    echo '<div class="Separator unselectable"></div>';
	include("templates/section.php");
}
?>
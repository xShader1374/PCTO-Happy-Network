<?php
    $tipo = "film";

    $categorie_api = getDataItemsArrayWithCurl("collections/Categorie/records");

    $categorie = array();

    foreach ($categorie_api as $categoria) {
        $cat = array();
        $cat["nome"] = $categoria["nome"];
        $cat["id"] = $categoria["id"];
        $categorie[] = $cat;
    }

    $last_category_index = count($categorie_api) - 1;

    foreach ($categorie as $index => $categoria) {
		if ($index == $last_category_index) continue;
		include("templates/section.php");
		echo '<div class="Separator unselectable"></div>';
    }
?>
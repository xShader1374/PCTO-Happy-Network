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
		$section_index = $index;
		include("templates/section.php");
	}
?>

film

//titolo

//trailer

//trama





serie tv

//id 

//titolo

//trailer

//trama

lista delle stagioni 
S1
    lista degli episodi
S2

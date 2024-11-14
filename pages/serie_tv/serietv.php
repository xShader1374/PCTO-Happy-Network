<?php

    $categorie = []; // Nome di ogni categoria
    $lista_media_id = []; // Media ID di ogni categoria
    $categorie_solo_serie_tv = []; // Nome di ogni categoria serie tv
    $lista_media_id_solo_serie_tv = []; // Media ID di ogni categoria serie tv
    $last_category = key(array_slice($categorie_solo_serie_tv, -1, 1, true));

    // Prendere tutte le categorie genericamente
    foreach (getDataItemsArrayWithCurl("collections/Categorie/records") as $categoria) {
        $categorie_solo_serie_tv[] = $categoria["nome"];
    }
    foreach (getDataItemsArrayWithCurl("collections/Categorie/records") as $categoria) {
        $lista_media_id_solo_serie_tv[] = $categoria["media"];
    }

    // Ora filtrarli tutti prendendo solo quelli che hanno al loro interno almeno 
    foreach (getDataItemsArrayWithCurl("collections/Categorie/records") as $categoria) {

    }

    foreach ($categorie_solo_serie_tv as $index => $nome_categoria) {
        $lista_media_singola_categoria = $lista_media_id_solo_serie_tv[$index];
        include("templates/section.php");

        if ($last_category != $nome_categoria) {
            echo '<div class="Separator unselectable"></div>';
        }
    }
?>
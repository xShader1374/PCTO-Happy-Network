<?php

    // Arrivare a far sì che si faccia una sola chiamata:
    // Prendere dalla tabella Media tutti i media che: Hanno come tipo "serie_tv" e in "categoria" la categoria che stiamo mostrando

    $nomi_categorie = []; // Nome di ogni categoria
    $id_categorie = []; // ID di ogni categoria
    $lista_media = []; // Media Data di ogni categoria (filtrata)

    // Prende tutte le categorie
    $categorie = getDataItemsArrayWithCurl("collections/Categorie/records");

    // Prendere tutti nomi delle categorie genericamente
    foreach ($categorie as $categoria) {
        $nomi_categorie[] = $categoria["nome"];
        $id_categorie[] = $categoria["id"];
    }

    $last_category = key(array_slice($nomi_categorie, -1, 1, true));

    foreach ($nomi_categorie as $index => $nome_categoria) {
        // Prende tutti i media che sono specificamente serie_tv e hanno X categoria
        $lista_media = getDataItemsArrayWithCurl("collections/Media/records/?filter=(tipo=%22serie_tv%22%20%26%26%20categoria~%22".$id_categorie[$index]."%22)");

        if (count($lista_media) == 0) {
            continue;
        }  
        
        include("templates/section.php");

        if ($last_category != $nome_categoria) {
            echo '<div class="Separator unselectable"></div>';
        }
    }
?>
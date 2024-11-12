<?php
    global $current_page_title;

    $site_name = "S&F";
    $current_page_title_param = $_SERVER['REQUEST_URI'];

    $titoli_disponibili = array(
        ""                          => "Esplora",
        "/"                         => "Esplora",
        "/homepage"                 => "Esplora",
        "/homepage/esplora/"         => "Esplora",
        "/homepage/film/"            => "Lista Film",
        "/homepage/serie-tv/"        => "Lista Serie TV",
        "default"                   => "404",
    );

    $contenuti_da_mostrare_sotto = array(
        ""                      => "/homepage/index.php",
        "/"                     => "/homepage/index.php",
        "/homepage"             => "/homepage/index.php",
        "/homepage/esplora/"     => "/homepage/index.php",
        "/homepage/film/"        => "/homepage/film/index.php",
        "/homepage/serie-tv/"    => "/homepage/serie_tv/index.php",
        "default"               => "404",
    );

    if (key_exists($current_page_title_param, $titoli_disponibili)) {
        $current_page_title = $site_name . " - " . $titoli_disponibili[$current_page_title_param];
    } else {
        $current_page_title = $site_name . " - " . $titoli_disponibili["default"];
    }

    $content = //file php del contenuto da restituire all'utente

    include_once("main.php");
?>

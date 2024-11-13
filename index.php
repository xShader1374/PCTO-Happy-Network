<?php
    global $current_page_title;
    global $current_page_section;

    $site_name = "S&F";
    $current_page_title_param = trim($_SERVER['REQUEST_URI'], "/");

    $titoli_disponibili = array(
        ""                          => "Esplora",
        "homepage"                 => "Esplora",
        "homepage/esplora"         => "Esplora",
        "homepage/film"            => "Lista Film",
        "homepage/serie-tv"        => "Lista Serie TV",
        "default"                   => "404",
    );

    $contenuti_da_mostrare_sotto = array(
        ""                      => "pages/homepage.php",
        "homepage"            => "pages/homepage.php",
        "homepage/esplora"     => "pages/homepage.php",
        "homepage/film"        => "pages/film/film.php",
        "homepage/serie-tv"    => "pages/serie_tv/serietv.php",
        "default"               => "404.php",
    );

    if (key_exists($current_page_title_param, $titoli_disponibili)) {
        $current_page_title = $site_name . " - " . $titoli_disponibili[$current_page_title_param];
        $current_page_section = $titoli_disponibili[$current_page_title_param];
        $content = $contenuti_da_mostrare_sotto[$current_page_title_param];
    } else {
        $current_page_title = $site_name . " - " . $titoli_disponibili["default"];
        $current_page_section = $titoli_disponibili["default"];
        $content = $contenuti_da_mostrare_sotto["default"];
    }

    #var_dump($current_page_title_param);
    #exit;

    include_once("main.php");
?>

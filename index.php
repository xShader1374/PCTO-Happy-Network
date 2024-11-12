<?php
    $site_name = "S&F";
    //lettura url
    //in base alla risorsa chiesta, carica risorsa richiesta oppure default oppure 404
    $current_page_title_param = $_SERVER['REQUEST_URI'];
    $current_page_title = "404";

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
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php
            //lettura url
            //$current_page_title = //se url sta in titoli_disponibili[key] allora = $titoli_disponibili[url] altrimenti $titoli_disponibili["default"]
            if (key_exists($current_page_title_param, $titoli_disponibili)){
                $current_page_title = $site_name." - ".$titoli_disponibili[$current_page_title_param];
            } else {
                $current_page_title = $site_name." - ".$titoli_disponibili["default"];
            }
            echo $current_page_title;
        ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="Navbar-Container" id="Navbar-Container">
        <a href="/homepage/esplora/" class="Navbar-Button">Esplora</a>
        <p style="color: var(--main-color); margin: 0;padding: 0;">|</p>
        <a href="/homepage/serie-tv/" class="Navbar-Button">Serie TV</a>
        <p style="color: var(--main-color); margin: 0;padding: 0;">|</p>
        <a href="/homepage/film/" class="Navbar-Button">Film</a>
    </div>
    <h3 class="PageTitle" id="PageTitle">
        <?php echo $current_page_title_param ?>
    </h3>
    <div class="Body-Container" id="Body-Container">
        <div class="Section">

            <?php
                //leggi url
                //$contenuto_da_mostrare = //se url sta in contenuti_da_mostrare_sotto[key] allora = $contenuti_da_mostrare_sotto[url] altrimenti $contenuti_da_mostrare_sotto["default"]
            ?>

            <h3 class="Section-Title">Serie TV Consigliate</h3>
            <div class="media-container">
                <div class="media-card">
                    <h5 class="media-title unselectable">Media Title</h5>    
                    <img class="media-image unselectable" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s" alt="media-image">
                    <div class="Separator unselectable"></div>
                    <p class="media-description unselectable">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="media-card">
                    <h5 class="media-title unselectable">Media Title</h5>    
                    <img class="media-image unselectable" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s" alt="media-image">
                    <div class="Separator unselectable"></div>
                    <p class="media-description unselectable">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="media-card">
                    <h5 class="media-title unselectable">Media Title</h5>    
                    <img class="media-image unselectable" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s" alt="media-image">
                    <div class="Separator unselectable"></div>
                    <p class="media-description unselectable">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="media-card">
                    <h5 class="media-title unselectable">Media Title</h5>    
                    <img class="media-image unselectable" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s" alt="media-image">
                    <div class="Separator unselectable"></div>
                    <p class="media-description unselectable">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="media-card">
                    <h5 class="media-title unselectable">Media Title</h5>    
                    <img class="media-image unselectable" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s" alt="media-image">
                    <div class="Separator unselectable"></div>
                    <p class="media-description unselectable">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="media-card">
                    <h5 class="media-title unselectable">Media Title</h5>    
                    <img class="media-image unselectable" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s" alt="media-image">
                    <div class="Separator unselectable"></div>
                    <p class="media-description unselectable">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="media-card">
                    <h5 class="media-title unselectable">Media Title</h5>    
                    <img class="media-image unselectable" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s" alt="media-image">
                    <div class="Separator unselectable"></div>
                    <p class="media-description unselectable">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
        <div class="Separator"></div>
        <div class="Section">
            <h3 class="Section-Title">Film Consigliati</h3>
            <div class="media-container">
                <div class="media-card">
                    <h5 class="media-title unselectable">Media Title</h5>    
                    <img class="media-image unselectable" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s" alt="media-image">
                    <div class="Separator unselectable"></div>
                    <p class="media-description unselectable">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="media-card">
                    <h5 class="media-title unselectable">Media Title</h5>    
                    <img class="media-image unselectable" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s" alt="media-image">
                    <div class="Separator unselectable"></div>
                    <p class="media-description unselectable">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="media-card">
                    <h5 class="media-title unselectable">Media Title</h5>    
                    <img class="media-image unselectable" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s" alt="media-image">
                    <div class="Separator unselectable"></div>
                    <p class="media-description unselectable">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="media-card">
                    <h5 class="media-title unselectable">Media Title</h5>    
                    <img class="media-image unselectable" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s" alt="media-image">
                    <div class="Separator unselectable"></div>
                    <p class="media-description unselectable">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="media-card">
                    <h5 class="media-title unselectable">Media Title</h5>    
                    <img class="media-image unselectable" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s" alt="media-image">
                    <div class="Separator unselectable"></div>
                    <p class="media-description unselectable">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="media-card">
                    <h5 class="media-title unselectable">Media Title</h5>    
                    <img class="media-image unselectable" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s" alt="media-image">
                    <div class="Separator unselectable"></div>
                    <p class="media-description unselectable">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="media-card">
                    <h5 class="media-title unselectable">Media Title</h5>    
                    <img class="media-image unselectable" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s" alt="media-image">
                    <div class="Separator unselectable"></div>
                    <p class="media-description unselectable">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
        <?php
            //echo "ciao";
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymus"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
</body>
</html>
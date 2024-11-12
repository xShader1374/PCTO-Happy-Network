<?php
    $site_name = "S&F";
    $current_page_title = $_GET["p"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php
            echo $site_name + " - " + $current_page_title;
        ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="Navbar-Container" id="Navbar-Container">
        <form class="Navbar-Form" action="" method="GET">
            <Button class="Navbar-Button" name="p" value="Esplora">Esplora</Button>
        </form>
        <p style="color: var(--main-color); margin: 0;padding: 0;">|</p>
        <form class="Navbar-Form" action="" method="GET">
            <Button class="Navbar-Button" name="p" value="Serie TV">Serie TV</Button>
        </form>
        <p style="color: var(--main-color); margin: 0;padding: 0;">|</p>
        <form class="Navbar-Form" action="" method="GET">
            <Button class="Navbar-Button" name="p" value="Film">Film</Button>
        </form>
    </div>
    <h3 class="PageTitle" id="PageTitle">
        <?php echo $current_page_title ?>
    </h3>
    <div class="Body-Container" id="Body-Container">
        <div class="Section">
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
    <script src="index.js"></script>
</body>
</html>
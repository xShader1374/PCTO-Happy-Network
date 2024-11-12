<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="Navbar-Container" id="Navbar-Container">
        <Button class="Navbar-Button" onclick="aggiornaTitolo(0)">Esplora</Button>
        |
        <Button class="Navbar-Button" onclick="aggiornaTitolo(1)">Serie TV</Button>
        |
        <Button class="Navbar-Button" onclick="aggiornaTitolo(2)">Film</Button>
    </div>
    <div class="Body-Container" id="Body-Container">
        
        <?php
            echo "ciao";
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha384-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/IYI/Cxo=" crossorigin="anonymus"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</body>
</html>
<?php
global $categoria;

#var_dump($categoria);
#exit;
?>

<div class="Section">
    <h3 class="Section-Title"><?= ucfirst(/*NOME CATEGORIA (CHIAVE ARRAY)*/"") ?></h3>
    <div class="media-container">
        <?php
        foreach ($cards as $card) { //cicli sui film che contiene $categoria 
            include("templates/card.php");
        }
        ?>
    </div>
</div>
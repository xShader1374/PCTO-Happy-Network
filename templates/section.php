<?php
    global $nome_categoria;
    global $categoria;
?>

<div class="Section">
    <h3 class="Section-Title"><?= ucfirst(/*NOME CATEGORIA (CHIAVE ARRAY)*/"$nome_categoria") ?></h3>
    <div class="media-container">
        <?php
        foreach ($categoria as $card) { //cicli sui film che contiene $categoria
            
            include("templates/card.php");
        }
        ?>
    </div>
</div>
<?php
    global $nome_categoria;
    global $lista_media_singola_categoria;
?>

<div class="Section">
    <h3 class="Section-Title unselectable"><?= ucfirst("$nome_categoria") ?></h3>
    <div class="media-container">
        <?php
        foreach ($lista_media_singola_categoria as $media_id) {
            include("templates/card.php");
        }
        ?>
    </div>
</div>
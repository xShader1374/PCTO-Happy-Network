<?php
    global $nome_categoria;
    global $lista_media;
?>

<div class="Section">
    <h3 class="Section-Title"><?= ucfirst("$nome_categoria") ?></h3>
    <div class="media-container">
        <?php
        foreach ($lista_media as $media) {
            include("templates/card.php");
        }
        ?>
    </div>
</div>
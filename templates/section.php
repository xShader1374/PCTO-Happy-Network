<?php
    global $categoria;
    global $tipo;

    $lista_media = getDataItemsArrayWithCurl(
        'collections/Media/records/?filter=(categoria~"'.$categoria["id"].'")+(tipo="'.$tipo.'")'
    );
?>

<div class="Section">
    <h3 class="Section-Title unselectable"><?= ucfirst($categoria["nome"]) ?></h3>
    <div class="media-container">
        <?php
        foreach ($lista_media as $media) {
            include("templates/card.php");
        }
        ?>
    </div>
</div>
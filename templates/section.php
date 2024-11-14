<?php
global $categoria;
global $tipo;
global $last_category_index;
global $section_index;

$lista_media = getDataItemsArrayWithCurl(
    'collections/Media/records/?filter=(categoria~"' . $categoria["id"] . '")+(tipo="' . $tipo . '")'
);
?>

<?php
if (count($lista_media) > 0) {
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
<?php
    if ($section_index != $last_category_index && $section_index != 0) echo '<div class="Separator unselectable"></div>';
}
?>
film

//titolo

//trailer

//trama





serie tv

//id 

//titolo

//trailer

//trama

lista delle stagioni 
S1
    lista degli episodi
S2

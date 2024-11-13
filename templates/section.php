<?php
global $categoria;
//array("azione", "drammatico", "romantico", "fantasy", "horror");

//$card_template = "templates/homepage.php";

//$section_title = "Section Title";

$esempio_json_risposta = `{
        [
            {
                "title":"Titolo",
                "description": "descrizione",
                "img_url":"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s",
            },
            {
                "title":"Titolo",
                "description": "descrizione",
                "img_url":"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s",
            },
            {
                "title":"Titolo",
                "description": "descrizione",
                "img_url":"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s",
            }
        ]
    }`;

$cards = array();

$esempio_risposta = json_decode($esempio_json_risposta);

foreach ($esempio_risposta as $item) {
    $card = array();
    $card["title"] = $item["title"];
    $card["description"] = $item["description"];
    $card["img_url"] = $item["img_url"];
    $cards[] = $card;
}

/*$temp_arr = array(
        [
            "title" = "Titolo1",
            "description" = "Description",
            "img_url" = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s",
        ],
        [
            "title" = "Titolo2",
            "description" = "Description",
            "img_url" = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s",
        ],
        [
            "title" = "Titolo3",
            "description" = "Description",
            "img_url" = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s",
        ],
        [
            "title" = "Titolo4",
            "description" = "Description",
            "img_url" = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s",
        ],
        [
            "title" = "Titolo5",
            "description" = "Description",
            "img_url" = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s",
        ],
        [
            "title" = "Titolo6",
            "description" = "Description",
            "img_url" = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s",
        ],
    )*/
?>





<div class="Section">
    <h3 class="Section-Title"><?= $categoria ?></h3>
    <div class="media-container">
        <?php
        foreach ($cards as $card) {
            include_once("templates/card.php");
        }
        ?>
    </div>
</div>
<?php
global $categoria;
//array("azione", "drammatico", "romantico", "fantasy", "horror");

//$card_template = "templates/homepage.php";

//$section_title = "Section Title";

$esempio_json_risposta = '[
        {
            "title": "Titolo",
            "description": "Descrizione",
            "img_url": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s"
        },
        {
            "title": "Titolo",
            "description": "Descrizione",
            "img_url": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s"
        },
        {
            "title": "Titolo",
            "description": "Descrizione",
            "img_url": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s"
        },
        {
            "title": "Titolo",
            "description": "Descrizione",
            "img_url": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s"
        },
        {
            "title": "Titolo",
            "description": "Descrizione",
            "img_url": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s"
        },
        {
            "title": "Titolo",
            "description": "Descrizione",
            "img_url": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s"
        },
        {
            "title": "Titolo",
            "description": "Descrizione",
            "img_url": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s"
        },
        {
            "title": "Titolo",
            "description": "Descrizione",
            "img_url": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s"
        },
        {
            "title": "Titolo",
            "description": "Descrizione",
            "img_url": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s"
        },
        {
            "title": "Titolo",
            "description": "Descrizione",
            "img_url": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s"
        },
        {
            "title": "Titolo",
            "description": "Descrizione",
            "img_url": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s"
        },
        {
            "title": "Titolo",
            "description": "Descrizione",
            "img_url": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s"
        },
        {
            "title": "Titolo",
            "description": "Descrizione",
            "img_url": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s"
        },
        {
            "title": "Titolo",
            "description": "Descrizione",
            "img_url": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s"
        },
        {
            "title": "Titolo",
            "description": "Descrizione",
            "img_url": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s"
        }
    ]';

$cards = array();

$esempio_risposta = json_decode($esempio_json_risposta, true);

#var_dump($esempio_risposta);
#exit;

foreach ($esempio_risposta as $card_item) {
    $card = array();
    #var_dump($card);
    #exit;
    $card["title"] = $card_item["title"];
    $card["description"] = $card_item["description"];
    $card["img_url"] = $card_item["img_url"];
    $cards[] = $card;
}

/*$temp_arr = array(
        [
            "title" = "Titolo1",
            "description" = "Description",
            "img_url" = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s",
        ],
    )*/
?>

<div class="Section">
    <h3 class="Section-Title"><?= ucfirst($categoria) ?></h3>
    <div class="media-container">
        <?php
        foreach ($cards as $card) {
            include("templates/card.php");
        }
        ?>
    </div>
</div>
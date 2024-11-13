<?php
global $categoria;



if($categoria == "azione") {
    $esempio_json_risposta = '[
        {
            "title": "Titolo1",
            "description": "Descrizione1",
            "img_url": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s"
        },
        {
            "title": "Titolo2",
            "description": "Descrizione2",
            "img_url": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s"
        }
    ]
    ';
} else {
    $esempio_json_risposta = '[
        {
            "title": "Titolo1",
            "description": "Descrizione1",
            "img_url": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s"
        },
        {
            "title": "Titolo2",
            "description": "Descrizione2",
            "img_url": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s"
        },
        {
            "title": "Titolo3",
            "description": "Descrizione3",
            "img_url": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s"
        },
        {
            "title": "Titolo4",
            "description": "Descrizione4",
            "img_url": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s"
        }
    ]
    ';
}

$cards = array();

$esempio_risposta = json_decode($esempio_json_risposta, true);

vardump($esempio_risposta);
exit;

foreach ($esempio_risposta as $card_item) {
    $card = array();
    $card["title"] = $card_item["title"];
    $card["description"] = $card_item["description"];
    $card["img_url"] = $card_item["img_url"];
    $cards[] = $card;
}
#vardump($cards);
#exit;
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
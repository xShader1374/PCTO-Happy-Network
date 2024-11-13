<?php

$categorie_solo_film_json = '{
    "romantico": [
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
        }
    ],
    "horror": [
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
        }
    ]
}';

$categorie_solo_film = json_decode($categorie_solo_film_json, true);
$last_category = key(array_slice($categorie_solo_film, -1, 1, true));

foreach ($categorie_solo_film as $nome_categoria => $lista_media) {
	include("templates/section.php");
    
    if ($last_category != $nome_categoria) {
        echo '<div class="Separator unselectable"></div>';
    }
}
?>
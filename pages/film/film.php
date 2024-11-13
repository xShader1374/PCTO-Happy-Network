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

$i = 0;

foreach ($categorie_solo_film as $nome_categoria => $categoria) {
	if ($i == 0) {
		$i++;
        include("templates/section.php");
        continue;
    }
    
    echo '<div class="Separator unselectable"></div>';
	include("templates/section.php");
	$i++;
}
?>
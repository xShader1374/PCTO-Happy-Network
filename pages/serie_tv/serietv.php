<?php

$categorie_solo_serie_tv_json = '{
    "azione": [
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
    ],
    "drammatico": [
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
        },
        {
            "title": "Titolo5",
            "description": "Descrizione5",
            "img_url": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s"
        },
        {
            "title": "Titolo6",
            "description": "Descrizione6",
            "img_url": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s"
        },
        {
            "title": "Titolo7",
            "description": "Descrizione7",
            "img_url": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s"
        },
        {
            "title": "Titolo8",
            "description": "Descrizione8",
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
        },
        {
            "title": "Titolo4",
            "description": "Descrizione4",
            "img_url": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTE5iCv4FF2t_zcBubldZ7asQz6xC1jpTuQ&s"
        }
    ],
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
    ]
}';

$categorie_solo_serie_tv = json_decode($categorie_solo_serie_tv_json, true);

$i = 0;

foreach ($categorie_solo_serie_tv as $nome_categoria => $categoria) {

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
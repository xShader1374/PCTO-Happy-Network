<?php
    $card_template = "templates/homepage.php";

    $section_title = "Section Title";
    
    $temp_arr = array(
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
    )
?>

<div class="Section">
	<h3 class="Section-Title"><?= $section_title ?></h3>
	<div class="media-container">
        <?php
            for ($i=0; $i < sizeof($temp_arr); $i++) { 
                $card.card_title = $temp_arr[$i]["title"];
                $card.card_description = $temp_arr[$i]["Description"];
                $card.card_img_url = $temp_arr[$i]["img_url"];
                include_once($card);
            }
        ?>
	</div>
</div>
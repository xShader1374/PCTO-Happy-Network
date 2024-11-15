<?php
	global $current_page_title;
	global $current_page_section;
	global $content;
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?= $current_page_title ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

	<link href="/css/style.css" rel="stylesheet">
</head>

<body>
	<?php include_once("navbar.php") ?>

	<h3 class="PageTitle unselectable" id="PageTitle">
		<?php echo $current_page_section; ?>
	</h3>

	<div class="Body-Container" id="Body-Container">
		<?php include_once($content); ?>
	</div>

	<!-- Vertically centered scrollable modal -->
		<div id="mediaInspectorModal" class="modal" tabindex="-1">
            <div class="modal modal-xl modal-centered modal-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-title">
                            Title
                        </h5>
                        <button type="button" 
                                class="btn-close"
                                data-bs-dismiss="modal" 
                                aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
						<iframe width="560" height="315" src="" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <p id="modal-description">
                            Description
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" 
                                class="btn btn-secondary" 
                                data-bs-dismiss="modal">
                            Back
                        </button>
                    </div>
                </div>
            </div>
        </div>

	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymus"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<script src="/js/index.js"></script>
</body>

</html>
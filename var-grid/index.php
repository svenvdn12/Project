<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1" />
		<title>Snapping Galery</title>
		<link rel="stylesheet" href="css/stylesheet.css" />
		<link rel="stylesheet" href="../css/main.css" />
		<script defer src="js/gridGenerator.js"></script>
	</head>
	<body>
		<div id="container">
			<div class="var-grid" id="var-grid-id">
				<?php
					for ($i = 0; $i < 100; $i++) {
						$randomNum = rand(1,10);
						if ($randomNum === 7){
							if ($i % 2 === 0) {
								echo '<img src="media/placeholder1.jpg">';
							}
							elseif ($i % 3 === 0){
								echo '<img src="media/placeholder3.jpg">';
							}
							elseif ($i % 4 === 0){
								echo '<img src="media/placeholder4.jpg">';
							}
							elseif ($i % 2 === 1) {
								echo '<img src="media/placeholder2.jpg">';
							}
						} else {
							echo '<img src="media/placeholder' . rand(1,4) . '.jpg">';
						}
					}
				?>
			</div>
		</div>
	</body>
</html>

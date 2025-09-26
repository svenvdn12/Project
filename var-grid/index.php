<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1" />
		<title>Stone Gallery</title>
		<link rel="stylesheet" href="css/stylesheet.css" />
		<link rel="stylesheet" href="../css/main.css" />
		<script defer src="js/gridGenerator.js"></script>
	</head>
	<body>
		<div id="container">
			<div class="var-grid" id="var-grid-id">
				<?php
					$randomNum = rand(1,10);
					$index = 1;
					echo '<!--' . $randomNum . '-->';
					for ($i = 0; $i < 100; $i++) {
						
						if ($randomNum === 7){
							$index += 1;

							if ($index > 4){
								$index = 1;
							}

							echo '<img src="media/placeholder' . $index . '.jpg">';

						} else {
							echo '<img src="media/placeholder' . rand(1,4) . '.jpg">';
						}
					}
				?>
			</div>
		</div>
	</body>
</html>

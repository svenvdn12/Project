<?php
    declare(strict_types=1);
	$allowedUrls = 
	[
		'contact',
		'evenementen',
		'FAQ',
		'home',
		'info',
		'over-ons',
		'galerij'
	];
?>
<!DOCTYPE html>
<html lang="nl-NL">
	<head>
		<meta charset="utf-8" />
		<title>Chaos Atelier</title>
		<meta name="description" content="Chaos Atelier website." />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <?php include_once('views/styles.php');?>
		<script src="js/spa-menu-function.js" defer></script>
	</head>
	<body id="spa">
        <?php include_once 'views/header.php';?>
        <main id="main" class="scroll-anchor"> <!-- Het overkoepelende element dat alle pagina's bevat MOET een scroll-anchor zijn met de id 'main' -->
            <?php include_once 'views/menu.php';?>
            <aside id="start-point"></aside>
            <div class="scroll-anchor plx plx-component"> <!-- De content container van elke pagina moet deze classes hebben -->
                <?php include_once('pages/home.php'); ?>
            </div>
            <aside class="scroll-anchor stop"><h2>FAQ</h2></aside> <!-- Vul de H2 met de naam van de volgende pagina-->
            <aside class="divider"></aside> <!-- Deze twee elementen moeten tussen elke content container, behalve tussen het hamburger menu en de welkomstpagina -->
            <div id="over-ons" class="scroll-anchor plx plx-component">
                <?php include_once('pages/FAQ.php') ?>
            </div>
            <?php include_once 'views/footer.php';?>
        </main>
	</body>
</html>

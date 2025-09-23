<!DOCTYPE html>
<html lang="nl-NL">
	<head>
		<meta charset="utf-8" />
		<title>Chaos Atelier</title>
		<meta name="description" content="Chaos Atelier website." />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/modules/header.css" />
		<link rel="stylesheet" href="css/modules/footer.css" />
		<link rel="stylesheet" href="css/main.css" />
		<link rel="stylesheet" href="css/spa-supplement.css" />
		<script src="js/spa-menu-function.js" defer></script>
	</head>
	<body>
    <?php include_once 'views/header.php';?>
		<main class="scroll-anchor">
			<div class="menu scroll-anchor">
				<ul>
					<li><a href="#welkom">Welkom</a></li>
					<li><a href="#galerij">Galerij</a></li>
					<li><a href="#events">Evenementen</a></li>
					<li><a href="#events">Nieuws</a></li>
					<li><a href="#events">Contact</a></li>
				</ul>
			</div>
			<aside class="divider"></aside>
			<div class="scroll-anchor plx plx-component">
				<section class="welkom">
					<header>
						<h1>SPA-TPLX</h1>
						<img src="assets/icons/megaphone.svg" alt="megaphone icon" />
					</header>
				</section>
				<button>test button</button>
				<a href="#" class="btn">test link button</a>
				<button class="secondary">secondary button</button>
				<a href="#" class="btn secondary">secondary link button</a>
				<button class="filter">test filter button</button>
				<a href="#" class="btn filter">test link filter button</a>
				<button class="filter active">active filter button</button>
				<a href="#" class="btn filter active">active link filter button</a>
				<h1>THIS IS A HEADING</h1>
				<h2>This is a sub heading.</h2>
				<p>This is a paragraph.</p>
				<a href="#">This is a link</a>
				<p title="Not Aperture Science!">
					This is a test chamber. Four walls, ceiling and a floor. Good enough for science.
				</p>
			</div>
			<aside class="scroll-anchor stop"><h2>Galerij</h2></aside>
			<aside class="divider"></aside>
			<div id="galerij" class="scroll-anchor plx plx-component">
				<h1>Galerij</h1>
				<h2>You know, I've been thinking...</h2>
				<p>When life gives you lemons, don't make lemonade.</p>
				<p>Make life take the lemons back!</p>
				<p>Get mad!</p>
				<p>Demand to see life's manager!</p>
				<p>Make life rue the day it thought it could give Cave Johnson lemons!</p>
				<p>Do you know who I am!?</p>
			</div>
			<aside class="scroll-anchor stop"><h2>Evenementen</h2></aside>
			<aside class="divider"></aside>
			<div class="evenementen scroll-anchor plx plx-component">
				<h1>Evenementen</h1>
				<h2>
					The fitnessgram pacer test is a multi-stage aerobic capacity test which progressively gets more
					difficult as it continues.
				</h2>
				<p>The 30 second pacer test will begin in 1 minute.</p>
			</div>
			<aside class="scroll-anchor stop"></aside>
			<aside class="divider"></aside>
			<?php include_once 'views/footer.php';?>
		</main>
	</body>
</html>

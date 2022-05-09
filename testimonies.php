<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Good News 4 You - Testimonies</title>
		<meta charset="utf-8" />
		<meta name="robots" content="index,follow,noimageindex">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500">
		<link rel="stylesheet" href="css/style.css">
		<link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16" />
		<link rel="prefetch" href="cms.xml">
		<link rel="prefetch" href="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
	</head>
	<body>
		<?php require_once('comms.php'); echo $header; ?>
		
		<article id="plainandsimple">
			<h1>Plain and Simple</h1>
			<section id="articles">
  				<a href="read?title=two-of-lifes-most-important-words">
					<img src="img/SavedFaith.jpg" />
					<h4>Two of Life's Most Important Words</h4>
				</a>
				<a href="read?title=the-worlds-most-famous-sentence-explained">
					<img src="img/WorldinHands.jpg" />
					<h4>The World's Most Famous Sentence Explained</h4>
				</a>
				<a href="read?title=the-simple-gospel">
					<img src="img/IAM.jpg" />
					<h4>The Simple Gospel</h4>
				</a>
				<a href="read?title=the-good-news-as-simple-as-it-gets">
					<img src="img/sharing-the-good-news.jpg" />
					<h4>The Good News - as simple as it gets</h4>
				</a>
				<a href="read?title=give-it-to-me-straight">
					<img src="img/GUWG-Bible-Path.gif" />
					<h4>Give it to Me Straight</h4>
				</a>
			</section>
		</article>
		
		<article id="truestories">
			<h1>True Stories</h1>
			<section id="articles">
				<a href="read?title=twice-purchased">
					<img src="img/CryingBoy.jpg" />
					<h4>Twice Purchased</h4>
				</a>
				<a href="read?title=rescue-at-pearl-harbor">
					<img src="img/Warplanes.jpg" />
					<h4>Rescue at Pearl Harbor</h4>
				</a>
				<a href="read?title=a-priest-unknown-to-god">
					<img src="img/PriestHands-Questions.jpg" />
					<h4>A Priest Unknown to God</h4>
				</a>
				<a href="read?title=the-hard-way-home">
					<img src="img/HardWayHome-cropped.jpg" />
					<h4>The Hard Way Home</h4>
				</a>
				<a href="read?title=erics-secret">
					<img src="img/CarSnow-cropped.jpg" />
					<h4>Eric's Secret</h4>
				</a>
				<a href="read?title=what-the-cannibal-was-hungry-for">
					<img src="img/AfricanSpearShield.jpg" />
					<h4>What the Cannibal Was Hungry For</h4>
				</a>
				<a href="read?title=carl-greer-gets-life">
					<img src="img/GetsLife.jpg" />
					<h4>Carl Greer Gets Life</h4>
				</a>
				<a href="read?title=the-nail-pierced-hand">
					<img src="img/BarbedWireWall.jpg" />
					<h4>The Nail-Pierced Hand</h4>
				</a>
			</section>
		</article>
		
		<?php require_once('comms.php'); echo $footer; ?>
		
		<style>
			@media (max-width: 1200px) {
				#articles {
					-moz-column-count:    4;
					-webkit-column-count: 4;
					column-count:         4;
				}
			}
			@media (max-width: 1000px) {
				#articles {
					-moz-column-count:    3;
					-webkit-column-count: 3;
					column-count:         3;
				}
			}
			@media (max-width: 800px) {
				#articles {
					-moz-column-count:    2;
					-webkit-column-count: 2;
					column-count:         2;
				}
			}
			@media (max-width: 400px) {
				#articles {
					-moz-column-count:    1;
					-webkit-column-count: 1;
					column-count:         1;
				}
			}
		</style>
		
        <?php require_once('comms.php'); echo $google_analytics; ?>
	</body>
</html>
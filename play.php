<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Good News 4 You | <?php echo filter_input(INPUT_GET, 'title', FILTER_SANITIZE_STRING); ?></title>
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
		
		<article>
			<?php 
				if (filter_input(INPUT_GET, 'title', FILTER_SANITIZE_STRING) === 'The-Perfect-Gift') {
					echo "
					<h1>The Perfect Gift</h1>
					<section>
						<img src='img/gnn_gift_banner-1080x675.jpg' class='audio_banner' />
						<audio controls preload='auto'>
							<source src='media/ThePerfectGift.mp3' type='audio/mpeg'>
							<!-- fallback for non supporting browsers goes here -->
							Your browser does not support the audio element.
							<a href='media/ThePerfectGift.mp3'> Download the mp3 file.</a>
						</audio>
					</section>
					";
				} elseif (filter_input(INPUT_GET, 'title', FILTER_SANITIZE_STRING) === 'Highway-to-Heaven') {
					echo "
					<h1>Highway to Heaven</h1>
					<section>
						<img src='img/gnn_highway_banner-1080x675.jpg' class='audio_banner' />
						<audio controls preload='auto'>
							<source src='media/HighwaytoHeaven.mp3' type='audio/mpeg'>
							<!-- fallback for non supporting browsers goes here -->
							Your browser does not support the audio element.
							<a href='media/HighwaytoHeaven.mp3'> Download the mp3 file.</a>
						</audio>
					</section>
					";
				} elseif (filter_input(INPUT_GET, 'title', FILTER_SANITIZE_STRING) === 'Hope-in-the-Storms-of-Life') {
					echo "
					<h1>Hope in the Storms of Life</h1>
					<section>
						<img src='img/gnn_hope_banner-1080x675.jpg' class='audio_banner' />
						<audio controls preload='auto'>
							<source src='media/HopeintheStormsofLife.mp3' type='audio/mpeg'>
							<!-- fallback for non supporting browsers goes here -->
							Your browser does not support the audio element.
							<a href='media/HopeintheStormsofLife.mp3'> Download the mp3 file.</a>
						</audio>
					</section>
					";
				} elseif (filter_input(INPUT_GET, 'title', FILTER_SANITIZE_STRING) === 'Nothing-Happens-by-Chance') {
					echo "
					<h1>Nothing Happens by Chance</h1>
					<section>
						<img src='img/gnn_chance_banner.jpg' class='audio_banner' />
						<audio controls preload='auto'>
							<source src='media/NothingHappensbyChance.mp3' type='audio/mpeg'>
							<!-- fallback for non supporting browsers goes here -->
							Your browser does not support the audio element.
							<a href='media/NothingHappensbyChance.mp3'> Download the mp3 file.</a>
						</audio>
					</section>
					";
				} elseif (filter_input(INPUT_GET, 'title', FILTER_SANITIZE_STRING) === 'The-Worlds-Biggest-Lie') {
					echo "
					<h1>The World's Biggest Lie</h1>
					<section>
						<img src='img/gnn_biggestlie_banner-1080x675.jpg' class='audio_banner' />
						<audio controls preload='auto'>
							<source src='media/TheWorldsBiggestLie.mp3' type='audio/mpeg'>
							<!-- fallback for non supporting browsers goes here -->
							Your browser does not support the audio element.
							<a href='media/TheWorldsBiggestLie.mp3'> Download the mp3 file.</a>
						</audio>
					</section>
					";
				} elseif (filter_input(INPUT_GET, 'title', FILTER_SANITIZE_STRING) === 'The-Uniqueness-of-Christianity') {
					echo "
					<h1>The Uniqueness of Christianity</h1>
					<section>
						<img src='img/gnn_uniqueness_banner-1080x675.jpg' class='audio_banner' />
						<audio controls preload='auto'>
							<source src='media/TheUniquenessofChristianity.mp3' type='audio/mpeg'>
							<!-- fallback for non supporting browsers goes here -->
							Your browser does not support the audio element.
							<a href='media/TheUniquenessofChristianity.mp3'> Download the mp3 file.</a>
						</audio>
					</section>
					";
				} else {
					echo "<h1>Oops! The media file you were looking for could not be found.</h1>";
				}
			?>
			
			
		</article>
		
		<?php require_once('comms.php'); echo $footer; ?>
		
		<style>
			article section {
				max-width: 1100px;
				margin: auto;
			}
			.audio_banner {
				display: block;
				width: 100%;
				height: auto;
				
				padding: 0;
				margin: 6em auto 1em;
				box-sizing: border-box;
			}
			audio {
				
				display: block;
				
				width: 100%;
				/*
				height: auto;
				*/
				padding: 0;
				margin: 0 auto 3em;
				box-sizing: border-box;
				
			}
		</style>
        <?php require_once('comms.php'); echo $google_analytics; ?>
	</body>
</html>
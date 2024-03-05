<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Good News 4 You - Gifts</title>
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
			<h1>Free Offer</h1>
			<div class="subtitle">God's good news is free for all. These gifts offered to you are designed to help you in your spiritual search for the truth with no obligation or cost.</div>
			
			<h2>Gift Booklets</h2>
			
			<section class="gifts">
  				
				<div>
					<img src="img/thebible.jpg" loading="lazy" />
					<h4>The Bible</h4>
					<a href='contact' class='button btn-grey media-button'>Request One</a>
				</div>

				<div>
					<img src="img/johnsgospel.jpg" loading="lazy" />
					<h4>John's Gospel - Parallel edition in English and Irish</h4>
					<a href='contact' class='button btn-grey media-button'>Request One</a>
				</div>

				<div>
					<img src="img/lukesgospel.jpg" loading="lazy" />
					<h4>Luke's gospel</h4>
					<a href='contact' class='button btn-grey media-button'>Request One</a>
				</div>

				<div>
					<img src="img/whyjesus.jpg" loading="lazy" />
					<h4>Why Jesus</h4>
					<a href='contact' class='button btn-grey media-button'>Request One</a>
				</div>

				<div>
					<img src="img/WhyInTheWorldIsThereSuffering.jpg" loading="lazy" />
					<h4>Why in the world is there suffering?</h4>
					<a href='contact' class='button btn-grey media-button'>Request One</a>
				</div>
				
				<div>
					<img src="img/GodAnswersManQuestions_SM.jpg" loading="lazy" />
					<h4>God's Answers to Man's Questions</h4>
					<a href='contact' class='button btn-grey media-button'>Request One</a>
				</div>

				<div>
					<img src="img/TheGreatestManAlive.jpg" loading="lazy" />
					<h4>Who is the Greatest Man Alive?</h4>
					<a href='contact' class='button btn-grey media-button'>Request One</a>
				</div>
				
			</section>
			
			<div class='free-gift-offer'>If you would like to order one of the free gifts, please click 
			<a href='contact' class='button btn-yellow'>Request One</a></div>
			
		</article>
		
		<?php require_once('comms.php'); echo $footer; ?>
		
		<style>
			.free-gift-offer {
				text-align: center;
				font-weight: 300;
			}
			.media-button {
				width: auto !important;
				margin: 0.5em;
			}
			strong > a {
				/*
				padding: 0;
				margin: 0px 0px 0px 1em;
				*/
			}
			strong > a > img {
				width: 1em;
				vertical-align: middle;
			}
		</style>
		<?php require_once('comms.php'); echo $google_analytics; ?>
	</body>
</html>
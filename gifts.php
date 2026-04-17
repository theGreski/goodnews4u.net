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
					<div class="img-wrapper"><img src="img/ESVGospelOfMark.jpg" loading="lazy" /></div>
					<h4>Mark's Gospel</h4>
					<p>The 2nd of the gospels in the New Testament, which looks at the life of Jesus Christ.</p>
					<a href='contact' class='button btn-grey media-button'>Request One</a>
				</div>

				<div>
					<div class="img-wrapper"><img src="img/ExploringChristianityCover.jpg" loading="lazy" /></div>
					<h4>Exploring Christianity</h4>
					<p>This short booklet answers some of life's biggest questions and introduces you to the "something more' you've been searching for!</p>
					<a href='contact' class='button btn-grey media-button'>Request One</a>
				</div>

				<div>
					<div class="img-wrapper"><img src="img/TheManOnTheMiddleCross.jpg" loading="lazy" /></div>
					<h4>The Man on the Middle Cross</h4>
					<p>This booklet introduces 3 people who had their lives changed when they met Jesus. The author explains how this offer is open to all who come to Jesus.</p>
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
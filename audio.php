<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Good News 4 You - Audio</title>
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
			<h1>Listen to Audio recordings</h1>
			<div class="subtitle">God's good news is free for all. Below are some relevant Audio talks based on the Bible that will explain this good news to you in more detail. Please click on "Download" or "Listen." to start each talk.</div>
			
			<!--<h2>Listen to the audio recordings</h2>-->
			
			<section class="gifts">
  				<div>
					<img src="img/GIFT_CDpreview_SM.jpg" />
					<h4>The Perfect Gift</h4>
					<p>If there is an ultimate gift that is ideal for every person on earth, wouldn&rsquo;t you want to know about it? It would have to be one-size-fits-all. Unbreakable. Never wears out. Just what everyone wants. Whatever would it be? Listen to find out.</p>
					<a href="media/ThePerfectGift.mp3" class="button btn-grey media-button">Download</a><a href="play?title=The-Perfect-Gift" class="button btn-grey media-button">Listen</a>
				</div>
				
				<div>
					<img src="img/HTH_CDpreview_SM.jpg" />
					<h4>Highway to Heaven</h4>
					<p>We invite you to take this CD for a spin. Hear on "Highway to Heaven" about the ultimate guide for your journey through life and beyond. A very helpful message to take with you.</p>
					<a href="media/HighwaytoHeaven.mp3" class="button btn-grey media-button">Download</a><a href="play?title=Highway-to-Heaven" class="button btn-grey media-button">Listen</a>
				</div>
				
				<div>
					<img src="img/HSL_CDpreview_SM.jpg" />
					<h4>Hope in the Storms of Life</h4>
					<p>When life gets rough...really ROUGH, and when human help isn't enough where do you turn? There really are only a few options - You can pretend it will be ok, you can drown in despair or you can find real and certain hope. This audio message describes how to find hope even in the middle of very difficult circumstances.</p>
					<a href="media/HopeintheStormsofLife.mp3" class="button btn-grey media-button">Download</a><a href="play?title=Hope-in-the-Storms-of-Life" class="button btn-grey media-button">Listen</a>
				</div>
				
				<div>
					<img src="img/NHBC_CDpreview_SM.jpg" />
					<h4>Nothing Happens by Chance</h4>
					<p>Sometimes life seems so random. Does anyone know what you are going through? Does anybody care? Give Best-Selling author William MacDonald just ten minutes of your time and listen to see just how much God cares about you.</p>
					<a href="media/NothingHappensbyChance.mp3" class="button btn-grey media-button">Download</a><a href="play?title=Nothing-Happens-by-Chance" class="button btn-grey media-button">Listen</a>
				</div>
				
				<div>
					<img src="img/WBL_CDpreview_SM.jpg" />
					<h4>The World's Biggest Lie</h4>
					<p>Here are some big lies overheard in your town lately:</p>
					<ul>
						<li>I promise I'll pay you back!</li>
						<li>The check's in the mail.</li>
						<li>You haven't changed a bit!</li>
						<li>Now we're even.</li>
					</ul>
					<p>But none of these are "The World's Biggest Lie." It's believed by most of your neighbors. Maybe you believe it yourself. Know what it is? Author William MacDonald tells us. In twelve minutes flat. Honest.</p>
					<a href="media/TheWorldsBiggestLie.mp3" class="button btn-grey media-button">Download</a><a href="play?title=The-Worlds-Biggest-Lie" class="button btn-grey media-button">Listen</a>
				</div>
				
				<div>
					<img src="img/TUC_CDpreview_SM.jpg" />
					<h4>The Uniqueness of Christianity</h4>
					<p>With hundreds of thousands of this CD already in circulation, you'll want to listen to "The Uniqueness of Christianity." There's nothing else like this good news.</p>
					<a href="media/TheUniquenessofChristianity.mp3" class="button btn-grey media-button">Download</a><a href="play?title=The-Uniqueness-of-Christianity"  class="button btn-grey media-button">Listen</a>
				</div>
				
			</section>
			
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
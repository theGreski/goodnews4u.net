<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Good News 4 You - Events</title>
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
		
		<form action="contact" method="post">
		<article>
			<h1>Gospel Literature Ireland</h1>
			<p>
				<?php echo (isset($message) ? $message : ""); ?>
				
			</p>
		</article>
		</form>
		
		<?php require_once('comms.php'); echo $footer; ?>
		
		<style>
			form input[type=text], form input[type=email], textarea {
				display: block;
				margin: 1em 0;
				padding: 0.5em;
				width: 60%;
				font-family: inherit;
				border: solid thin #aaa;
				box-shadow: inset 0px 1px 3px rgba(0,0,0,0.1);
			}
			form textarea {
				height: 7em;
			}
			form input[type=submit] {
				display: block;
				margin: 1em 0;
				padding: 0.5em 3em;
				font-family: inherit;
			}
			form label {
				display: block
			}
			form label > input[type=checkbox] {
				margin-right: 1.5em;
			}
			.order-explanation {
				font-size: 0.8em;
			}
			a[href^="tel"] {
				pointer-events: none;
			}
			.fname {
				display: none;
			}
			
			@media screen and (max-width: 800px) {
				form input[type=text], form input[type=email], textarea {
					width: 100%;
				}
				a[href^="tel"] {
					pointer-events: auto;
				}
			}
			@media screen and (max-width: 400px) {
				form label {
					font-size: 0.8em;
					margin: 0.6em 0;
				}
				form label > input[type=checkbox] {
					vertical-align: middle;
				}
			}
		</style>
		<?php require_once('comms.php'); echo $google_analytics; ?>
	</body>
</html>

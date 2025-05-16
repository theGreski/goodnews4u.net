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
				<img src="img/events.jpg" />
				Each year, we visit different agricultural shows across the Island of Ireland and distribute free Christian Literature and reusable John 3 v 16 shopping bags. 
				If you have visited our stand at an event and would like to request more information or get in contact with us, please visit our <a href="contact">contact page</a>, 
				and we will be happy to send you the items requested.
				<strong>Events</strong>
				In 2025 we hope to visit the following events, would love you to come and visit us on our stand, which is called <b>Gospel Literature Ireland</b>:<br />
				<br />
				<br />
				14-17 May - Balmoral Show, Co Antrim<br />
				1-2 June - Innishannon Vintage Rally, Co. Cork<br />
				8th June - Dundalk Show, Co Louth<br />
				21st June - Gorey Show, Co Wexford<br />
				26th June - Antrim Show, Co. Antrim<br />
				4th August - Tinahely Show, Co Wicklow<br />
				5 &amp; 6th August - Clonmany Show, Co Donegal<br />
				10th August - Tullamore Show, Co Offaly<br />
				16-18th September - National Ploughing Championships<br />
				<br /><br />
				To receive up-to-date details of where we will be and our stand numbers within each showground, please like our Facebook page - <b>Gospel Literature Ireland</b>. 
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

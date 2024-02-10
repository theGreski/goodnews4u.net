<?php
error_reporting(E_ALL | E_STRICT);



if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['fname'] == '' && $_POST['time'] != '' && ((time() - intval($_POST['time'])) > 5)) {
	
	$RequerterName 		= filter_input(INPUT_POST, "RequerterName", FILTER_SANITIZE_STRING);
	$RequerterEmail		= filter_input(INPUT_POST, "RequerterEmail", FILTER_SANITIZE_STRING);
	$RequerterPhone		= filter_input(INPUT_POST, "RequerterPhone", FILTER_SANITIZE_STRING);
	$RequerterAddress	= filter_input(INPUT_POST, "RequerterAddress", FILTER_SANITIZE_STRING);
	$RequerterMessage	= filter_input(INPUT_POST, "RequerterMessage", FILTER_SANITIZE_STRING);
	$RequestedItems		= filter_input(INPUT_POST, "RequestedItems", FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
	
	$itemlist = "";
	
	if(isset($RequestedItems)){
		if (is_array($RequestedItems)) {
			foreach($RequestedItems as $item){
				$itemlist .= $item . "\r\n";
			}
		} else {
			$itemlist .= $RequestedItems;
			echo "one: " . $item;
		}
	}
	
	$to      		= "info@goodnews4u.net";
	$subject 		= "Website Contact";
	$body	 		= $RequerterName . "\r\n\r\nRequested:\r\n" . $itemlist . "\r\n\r\nDelivery to:\r\n\r\n" . $RequerterAddress . "\r\n\r\nMessage:\r\n\r\n" . $RequerterMessage . "\r\n\r\nContact details:\r\n\r\nE-mail: " . $RequerterEmail . "\r\nPhone: " . $RequerterPhone;
	
	if (filter_var($RequerterEmail, FILTER_VALIDATE_EMAIL)) {
	
		$headers = "From: " . $RequerterName . " <" . $RequerterEmail . ">" . "\r\n";
		$headers.= "Reply-To: " . $RequerterName . " <" . $RequerterEmail . ">" . "\r\n";
	
	} else {
	
		$headers = "From: donotreply@goodnews4u.net" . "\r\n";
	
	}
	
	$headers.= 'X-Mailer: PHP/' . phpversion();
	
	mail($to, $subject, $body, $headers);
	
	$title = "Thank You!";
	$message = "Thank you for contacting goodnews4u.net. We will endeavour to reply to your message within 48hrs. If you have requested a free gift to be sent to you we aim to have this with you within 14 days.";

} else {
	
	$title = "Contact Us";
	$message = "
		<span class='vcard'>
			Email: <a class='email link' href='mailto:info@goodnews4u.net'>info@goodnews4u.net</a><br>
			Find us on Facebook: <a class='link' href='https://www.facebook.com/profile.php?id=100064357822102' target='_blank' rel='noreferrer'>Gospel Literature Ireland</a>
		</span>
				
		<strong>Order free products</strong>
		<span class='order-explanation'>(please tick beside an item you like to receive, provide us with your address and click on submit button)</span>
		<input type='text' name='RequerterName' placeholder='Name'>
		<input type='email' name='RequerterEmail' placeholder='email'>
		<input type='text' name='RequerterPhone' placeholder='phone'>
		<span class='fname'>
			<input type='text' name='fname' placeholder='fname' autocomplete='off'>
			<input type='text' name='time' value='".time()."' autocomplete='off'>
		</span>
		<textarea name='RequerterAddress' placeholder='Include your delivery address for these resources'></textarea>
		
		<label><input type='checkbox' name='RequestedItems[]' value='Bible' />The Bible</label>
		<label><input type='checkbox' name='RequestedItems[]' value='Luke&apos;s gospel' />Luke&apos;s gospel</label>
		<label><input type='checkbox' name='RequestedItems[]' value='Why Jesus [Booklet]' />Why Jesus [Booklet]</label>
		<label><input type='checkbox' name='RequestedItems[]' value='Why in the world is there suffering? [Booklet]' />Why in the world is there suffering? [Booklet]</label>
		<label><input type='checkbox' name='RequestedItems[]' value='God's Answers to Man&apos;s Questions [Booklet]' />God&apos;s Answers to Man's Questions [Booklet]</label>
		<label><input type='checkbox' name='RequestedItems[]' value='Who is the Greatest Man Alive? [Booklet]' />Who is the Greatest Man Alive? [Booklet]</label>
		
		<textarea name='RequerterMessage' placeholder='Your personal note or message'></textarea>
		
		<input type='submit' class='button btn-yellow' value='Submit'>
	
	";
	
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Good News 4 You - Contact Us</title>
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
			<h1><?php echo (isset($title) ? $title : ""); ?></h1>
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

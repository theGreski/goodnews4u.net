<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Good News 4 You | <?php echo filter_input(INPUT_GET, 'title', FILTER_SANITIZE_STRING); ?></title>
		<meta charset="utf-8" />
		<meta name="robots" content="index,follow,noimageindex">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<?php require_once('comms.php'); echo $header; ?>
		
		<article>
			<h1 id="title"></h1>
			<p id="article"></p>
		</article>
		
		<?php require_once('comms.php'); echo $footer; ?>
		
		<!-- Google Hosted Libraries - jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
		
			$(document).ready(function () {
				
				$.ajax({
					type: "GET",
					url: "cms.xml",
					dataType: "html",
					cache: true,
					success: function (xml) {
						
						$(xml).find("content[name=<?php echo filter_input(INPUT_GET, 'title', FILTER_SANITIZE_STRING); ?>]").each(function() {
							$("#title").html( $(this).find("title").html() );
							$("#article").html( $(this).find("article").html() );
						});
						
					}
				});
				
			});
				
		</script>
		<?php require_once('comms.php'); echo $google_analytics; ?>
	</body>
</html>
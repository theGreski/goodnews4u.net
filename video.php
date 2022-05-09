<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Good News 4 You | <?php echo filter_input(INPUT_GET, 'title', FILTER_SANITIZE_STRING); ?></title>
		<meta charset="utf-8" />
		<meta name="robots" content="index,follow,noimageindex">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500">
		<link rel="stylesheet" href="css/style.css">
		<link rel="prefetch" href="cms.xml">
	</head>
	<body>
		<?php require_once('comms.php'); echo $header; ?>
		
		<article>
			<?php 
				if (filter_input(INPUT_GET, 'title', FILTER_SANITIZE_STRING) === 'Good-News') {
					echo "
					<h1>Bad News / Good News</h1>
					<iframe width='853' height='480' src='https://www.youtube-nocookie.com/embed/nUe9ZgADBNQ?rel=0&amp;showinfo=0' frameborder='0' allowfullscreen></iframe>
					";
				} elseif (filter_input(INPUT_GET, 'title', FILTER_SANITIZE_STRING) === 'What-is-the-Gospel') {
					echo "
					<h1>What is the Gospel?</h1>
					<iframe width='853' height='480' src='https://www.youtube-nocookie.com/embed/DTv5KEcyGQw?rel=0&amp;showinfo=0' frameborder='0' allowfullscreen></iframe>
					";
				} elseif (filter_input(INPUT_GET, 'title', FILTER_SANITIZE_STRING) === 'The-Gospel') {
					echo "
					<h1>The Gospel</h1>
					<iframe width='853' height='480' src='https://www.youtube-nocookie.com/embed/lLAt3WIsb5Y?rel=0&amp;showinfo=0' frameborder='0' allowfullscreen></iframe>
					";
				} else {
					echo "<h1>Oops! The video you were looking for could not be found.</h1>";
				}
			?>
		</article>
		
		<?php require_once('comms.php'); echo $footer; ?>
		
		<!-- Google Hosted Libraries - jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<style>
			iframe {
				display: block;
				margin: auto;
				box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.16), 0px 2px 10px 0px rgba(0, 0, 0, 0.12);
			}
			article {
				width: 100%;
				max-width: 853px;
				margin: auto;
			}
		</style>
		<script>
			// Find all YouTube videos
			var $allVideos = $('iframe'),
			
			// The element that is fluid width
			$fluidEl = $("article");
			
			// Figure out and save aspect ratio for each video
			$allVideos.each(function() {
				
				$(this)
					.data('aspectRatio', this.height / this.width)

					// and remove the hard coded width/height
					.removeAttr('height')
					.removeAttr('width');

			});

			// When the window is resized
			$(window).resize(function() {

			  var newWidth = $fluidEl.width();

			  // Resize all videos according to their own aspect ratio
			  $allVideos.each(function() {
				
				var $el = $(this);
				$el
					.width(newWidth)
					.height(newWidth * $el.data('aspectRatio'));
				
			  });

			// Kick off one resize to fix all videos on page load
			}).resize();
		</script>
        <?php require_once('comms.php'); echo $google_analytics; ?>
	</body>
</html>
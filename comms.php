<?php

$header = "
		<header>
			<h1><a href='./'>Good News 4 You</a></h1>
			<img src='img/GN4U_LogoBlueTanTeal.svg' class='logo' alt='Good News 4 You' />
			<nav>
				<label for='show-menu' class='show-menu'><img src='img/menu55.svg' /></label>
				<input type='checkbox' id='show-menu' role='button'>
				<ul id='menu'>
					<li><a href='read?title=what-we-believe'>What We Believe</a></li>
					<li><a href='#' onclick='return false'>Videos +</a><ul class='hidden'>
							<li><a href='video?title=Good-News'>Good News / Bad News</a></li>
							<li><a href='video?title=What-is-the-Gospel'>What is the Gospel?</a></li>
							<li><a href='video?title=The-Gospel'>The Gospel</a></li>
						</ul>
					</li>
					<li><a href='gifts'>Free Offer</a></li>
					<li><a href='testimonies' onclick='return false'>Testimonies +</a><ul class='hidden'>
							<li><a href='testimonies'>Plain and Simple</a></li>
							<li><a href='testimonies#truestories'>True Stories</a></li>
						</ul>
					</li>
					<li><a href='faq' onclick='return false'>FAQs +</a><ul class='hidden'>
							<li><a href='faq'>One Liners</a></li>
							<li><a href='faq#questionspeopleask'>Questions People Ask</a></li>
							<li><a href='faq#scienceandyou'>Science &amp; You</a></li>
							<li><a href='faq#funnyyoushouldask'>Funny You Should Ask</a></li>
						</ul>
					</li>
					<li><a href='contact'>Contact Us</a></li>
				</ul>
			</nav>
		</header>
";

$footer = "
		<footer>
			<hr>
			<nav>
				<ul>
					<li><a href='contact'>Contact Us</a></li>
					<li><a href='read?title=about-us'>About Us</a></li>
					<li><a href='https://docs.google.com/document/d/e/2PACX-1vQ_9iGqAPm3esHliLyfKZHHKWCRbJdISkILPbfqCHKvvt-sRZOkX3rW_SRoZ6n1JWONX33ZYPiOLbHp/pub' target='_blank' rel='noopener'>Privacy Statement</a></li>
				</ul>
			</nav>
			<div class='copy'>&copy;<script>document.write(new Date().getFullYear())</script> Good News 4You. All Rights Reserved. Web design by <a href='https://eggizoapp.com' target='_blank'>Eggizo App</a></div>
		</footer>
";

$google_analytics = "
<script async src='https://www.googletagmanager.com/gtag/js?id=G-SY2VG5RNYM'></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'G-SY2VG5RNYM');
</script>
";
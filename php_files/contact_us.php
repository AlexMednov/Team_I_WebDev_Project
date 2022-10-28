<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Color</title>
		<meta charset="UTF-8">
		<meta name="description" content="Buy colourful socks from sunny">
		<meta name="keywords" content="socks, buy, color">
		<meta name="author" content="Alicia Rodriguez">
		<link rel="icon" href="../img/sunny_logos_orange.png">
		<link rel="stylesheet" type="text/css" href="../css_files/contact_us.css">
	</head>
	
	<body>
		<div id="container">
			<?php
				$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
				echo "<a class='button1' href='$url'>
				<img src='../img/previous.png' alt='button'>
				</a>"; 
			?>
			<p class="contact">Contact us</p>
			<div id="box">
				<div class="paragraph1">
					<p class="title">You could mail us using this</p>
					<p class="text">adress.</p>
					<p class="text"><b>sunny.socks@gmail.com</b></p>
					<p class="text">We will answer as soon</p>
					<p class="text">as we can.</p>
				</div>
				<div class="paragraph2">
					<p class="title">You can also call us at any</p>
					<p class="text">day except national holidays</p>
					<p class="text">from 12:00 to 18:00 CET.</p>
					<p class="text"><b>0123 5678 89 01</b></p>
				</div>
			</div>
			<div id="logo">
				<img src="../img/sunny_logos_slogan_orange.png" alt="orangelogo" width="300" height="115">
			</div>
			<img class="whitelogo" src="../img/sunny_logos-01.png" alt="whitelogo" width="300" height="115">
			<div id="button">
				<?php
					$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
					echo "<a href='$url'><h2>Back</h2></a>"; 
				?>
			</div>
			
		</div>
	</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<title>Order now</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../css_files/style_order.css"> 
	</head>
	
	<body>
		<div id="container">
			<p class="button1"><a class="link" href="../php_files/index-product.html"><</a></p>
			<p class= "resellers">Resellers</p>
			<div class="box">
				<b><h1>Order now</h1></b>
			
				
				<div class="hema">
					<p class="title">Hema (Dutch)</p>
					<p class="linkhema">hema.duch@gmail.com</p>
				</div>
				<div class="international">	
					<p class="title">Amazon (international)</p>
					<p class="linkint">https./Amazon.SunnySocks.com</p>
				</div>
				<div class="germany">
					<p class="title">Amazon (Germany)</p>
					<p class="linkde">https:/Amazon.SunnySocks.de</p>
				</div>
				<div class="bol">	
					<p class="title">Bol.com (Dutch)</p>
					<p class="linkbol">https:/Bol.com.SunnySocks</p>
				</div>
			</div>
			
			<div class="logo">
				<img src="../img/sunny_logos_slogan_orange.png" width="300" height="115">
			</div>
			<img class="whitelogo" src="../img/sunny_logos-01.png" width="300" height="115">
			<?php
				$url = htmlspecialchars($_SERVER['HTTP_REFER']);
				echo "<a href='$url'>sjdkhads</a>";
			?>
			<div class="button">
				<b><h2><a class='back' href=''>Back</a></h2></b>
			</div>	
				
		</div>
	</body>
</html>
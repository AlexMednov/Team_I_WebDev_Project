<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8">
		<link rel = "stylesheet" type = "text/css" href = "../css_files/map_page.css">
		<title>Sunny Socks</title>
	</head>
	<body>
		<div id ="white_space">
		</div>
		<div id = "grid_container">
			<img src = "../img/map.png" id = "map_prop" alt = "Map">
			<div id = "text_container">
				<h2>Now international
					Countries that we ship to are China, South Africa, USA and Netherlands
					(highlighted green). If your country is not on the list, contact us, 
					maybe we can figure something out.</h2>
			</div>
			<?php
				/*$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
				$temp_url = explode("/", $url);
				echo "<a href='$url'>back</a>";*/
			?>
			<input type="button" value="Order now" onclick="window.location='order.php'" id = "button_order">
			<input type="button" value="Contact us" onclick="window.location='#'" id = "button_contact">
		</div>
	</body>
</html>
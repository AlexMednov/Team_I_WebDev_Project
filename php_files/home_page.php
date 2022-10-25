<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8">
		<link rel = "stylesheet" type = "text/css" href = "../css_files/style_home_page.css">
		<title>Sunny socks</title>
	</head>
	<body>
		<div id = "grid_container">
			<div id = "white_space">
			</div>
			<!--Have not came up with a better way to make white space-->
			<header>
				<img src = "../img/sunny_logos-01.png" id = "logo">
				<input type="button" value="Products" onclick="window.location='index-product.html'" id = "navbutton1">
				<input type="button" value="Return form" onclick="window.location='#'" id = "navbutton2">
				<input type="button" value="Contact us" onclick="window.location='order.php'" id = "navbutton3">
					<!--Buttons that lead to diffrent pages. No diffrent pages yet, so they dont lead anywhere
					yet.-->
			</header>
			<div id = "box_colorfull">
				<img src = "../img/im_sock_home.png" alt = "Sock" class = "im_sock_home">
				<div class = "text_boxes">
					<h1>Colourful</h1>
					<h2>We like to add some colour to one of the the most 
					everyday moments of life: putting on your socks. 
					We add literal color by designing simple basic 
					white socks a pop of colour.
					That is why you can commission socks of any colour!
					In addition to always available colours.</h2>
				</div>
			</div>
			<div id = "box_durable">
				<div class = "text_boxes">
					<h1>Durable and comfortable</h1>
					<h2>We produce very durable and comfortable socks. 
					Quality of materials used is stunning! 
					In  addition to that you receive 5 year guarantee. 
					But we are sure that you won’t need to use it. </h2>
				</div>
				<img src = "../img/Sunny_socks_red.jpg" class = "im_sock_home" alt = "Socks">
			</div>
			<div id = "box_international">
				<img src = "../img/earth.png" id = "im_earth" alt = "Earth">
				<!--Nex image will be visible only for mobile-->
				<img src = "../img/map.png" id = "map" alt = "Map">
				<div class = "text_boxes">
					<h1>Now international!</h1>
					<h2>Now we ship products to the USA, China and South Africa! 
					But do not worry. If you are not satisfied with our socks, 
					you can always use a return form.</h2>
					<input type="button" value="Learn more" onclick="window.location='map_page.php'" id = "Button_spec">
				</div>
			</div>
			<footer>
					<input type="button" value="Products" onclick="window.location='#'" class = "Button_footer">
					<input type="button" value="Return form" onclick="window.location='#'" id = "big_button">
					<input type="button" value="Contact us" onclick="window.location='#'" class = "Button_footer">
					<input type="button" value="Contact us" onclick="window.location='#'" id = "biggest_button">
			</footer>
		</div>
	</body>
</html>
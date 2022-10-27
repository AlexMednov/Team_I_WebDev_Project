<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta name="keywords" content="Socks, Sunny Socks, Buy socks, Colourful socks">
		<meta name="description" content="Order your colourful socks now">
		<link rel="icon" href="../img/sunny_logos_orange.png">
		<meta name="author" content="Alex Mednov">
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
				<img src = "../img/sunny_logos-01.png" id = "logo" alt = "logo">

				<ul class="menu">
					<button class="img-button"><img class="icon" src="../img/list.png" alt=""></button>
					<ul class="submenu">
						<li class = "mob_but"><a href="index-product.html"><button>Products</button></a></li>
						<li class = "mob_but"><a href="return-form.php"><button>Return form</button></a></li>
						<li class = "mob_but"><a href="contact_us/contact_us_home.php"><button>Contact us</button></a></li>
					</ul>
				</ul>
				
				
				<a id="navbutton1" href="index-product.html"><button >Products</button></a>
				<a id="navbutton2" href="return-form.php"><button>Return form</button></a>
				<a id="navbutton3" href="contact_us/contact_us_home.php"><button>Contact us</button></a>
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
					<a class="Button_footer" href="index-product.html"><button >Products</button></a>
					<input type="button" value="Return form" onclick="window.location='return-form.php'" id = "big_button">
					<a class="Button_footer" href="contact_us/contact_us_home.php"><button>Contact us</button></a>
					<a id = "biggest_button" href="contact_us/contact_us_home.php"><button>Contact us</button></a>
			</footer>
		</div>
	</body>
</html>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Product Catalog</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="./css/homepage.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="row">
			<div class="logo col-sm-4"><a href="index.php"><span style="color: yellow; font-weight: bold; font-size: 40px; font-family: arial">myCatalog</span></a>
			</div>
			<div class="search col-sm-4 ">
			<form id="search-form" action="search_product.php" method="GET">
				<input name="value" class="searchinput col-sm-6" type="text">
				<div class="search_btn glyphicon glyphicon-search" onclick="document.getElementById('search-form').submit();">
				
				</div>
			</form>
			</div>
			<div class="order col-sm-4">
				<div class="login"><a class="loginlogo glyphicon glyphicon-log-in" href="login.php"></a><br><a class="loginlabel" href="login.php"><label for="">Login</label></a></div>
				<div class="register"><a class="registerlogo glyphicon glyphicon-user" href="register.php"></a><br><a href="register.php"><label class="label">Register</label></a></div>
				<div class="compare"><a class="comparelogo glyphicon glyphicon-list" href="#"></a><br><a href="#"><label class="label">Compare</label></a></div>
				<div class="cart"><a class="cartlogo glyphicon glyphicon-shopping-cart" href="#"></a><br><a href="#"><label class="label">Cart</label></a></div>
			</div>
		</div>

		<div id="menu">
			<ul>
				<li id="home"><a href="index.php">HOME</a>
				</li>
				<li><a href="products.php">CATALOG/STORE</a></li>
				<li><a href="#">PAGES</a>
					<!-- <ul class="sub-menu">
						<li>J! CONTENT
							<ul class="sub-menu">
								<li><a href="#">Single Article</a></li>
								<li><a href="#">Blog - 2 columns</a></li>
								<li><a href="#">Blog - 1 columns</a></li>
								<li><a href="#">Category List</a></li>
								<li><a href="#">Tabs</a></li>
								<li><a href="#">According</a></li>
								<li><a href="#">News Feed</a></li>
							</ul>
						</li>
						<li>J! OTHER PAGES
							<ul class="sub-menu">
								<li><a href="#">Registration Form</a></li>
								<li><a href="#">Login Form</a></li>
								<li><a href="#">Search Form</a></li>
								<li><a href="#">Single Contact</a></li>
								<li><a href="#">Error 404</a></li>
								<li><a href="#">Offline Page</a></li>
							</ul>
						</li>
						<li>CUSTOM PAGES
							<ul class="sub-menu">
								<li><a href="#">Gallery</a></li>
								<li><a href="#">Pricing Tables</a></li>
								<li><a href="#">Coming Soon</a></li>
							</ul>	
						</li>
					</ul> -->
				</li>
				<li><a href="#">FEATURES</a>
					<ul class="sub-menu">
						<li><a href="#">Template Parameters</a></li>
						<li><a href="#">All Template's Position</a></li>
						<li><a href="#">Module Suffixes</a></li>
						<li><a href="#">Typography</a></li>
						<li><a href="#">Template Layout</a></li>
						<li><a href="#">Install Demo Copy</a></li>
						<li><a href="#">Joomla Templates</a></li>
					</ul>
				</li>
				<li><a href="#">EXTENSIONS</a>
					<!-- <ul class="sub-menu">
						<li>DJ-MEDIA TOOLS
							<ul class="sub-menu">
								<li><a href="#">Album Grid</a></li>
								<li><a href="#">Gallery Grid</a></li>
								<li><a href="#">Modern Slider</a></li>
								<li><a href="#">Slider</a></li>
								<li><a href="#">Slideshow</a></li>
								<li><a href="#">Slideshow with Thumbnails</a></li>
								<li><a href="#">Tabber</a></li>
								<li><a href="#">Skitter SlideShow</a></li>
								<li><a href="#">Nivo Slider</a></li>
								<li><a href="#">Kwicks Panels</a></li>
								<li><a href="#">Masonry</a></li>
							</ul>
						</li>
						<li>DJ-CATALOG
							<ul class="sub-menu">
								<li><a href="#">Single product</a></li>
								<li><a href="#">List of items (blogs)</a></li>
								<li><a href="#">List of items (table)</a></li>
								<li><a href="#">Producers</a></li>
								<li><a href="#">Single producer</a></li>
								<li><a href="#">User products</a></li>
								<li><a href="#">Product submission</a></li>
								<li><a href="#">Query</a></li>
								<li><a href="#">Cart</a></li>
								<li><a href="#">Archived items</a></li>
								<li><a href="#">Map of products</a></li>
								<li><a href="#">User questions</a></li>
								<li><a href="#">Compare</a></li>
								<li><a href="#">List of orders</a></li>
							</ul>
						</li>
						<li>DJ-TABS
							<ul class="sub-menu">
								<li><a href="#">Tabs Views</a></li>
								<li><a href="#">Accordion View</a></li>
							</ul>
						</li>
					</ul> -->
				</li>
				<li><a href="#">LANGUAGES</a>
					<ul class="sub-menu">
						<li><a href="#">LTR Languages</a></li>
						<li><a href="#">RTL Languges</a></li>
					</ul>
				</li>
				<li><a href="#">STYLE</a>
					<ul class="sub-menu">
						<li><a href="#">Style 1 - Blue</a></li>
						<li><a href="#">Style 2 - Turquoise</a></li>
						<li><a href="#">Style 3 - Red</a></li>
					</ul>
				</li>
				<li><a href="#">CONTACT US</a></li>
				<li class="menulist"><a href="#"><img class="listmenu" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Ei-navicon.svg/1000px-Ei-navicon.svg.png" alt="" width="30px" height="30px"></a></li>
			</ul>
		</div>
		<div class="bestsellers">
			<h2 style="font-weight: bold;">BESTSELLERS</h2><br>
			<div class="thumbnail">
				<a href="./detail.php?productid=2" class="thumbnail1">
					<img src="image/bestseller1.png" alt="">
				</a><br>
				<p class="thumbdetail">
					<a href="./detail.php?productid=2"><span style="font-weight: bold; font-size: 15px; color: #000000">ZIP BLACK + DECKER 1200W</span></a> <br><span>Category: <a href=""><span style="color: #9daac4">Lawn Mowers</span></a><br></span><span style="font-weight: bold;">Price:</span> <span style="font-weight: bold; color: #0078d6;">$79,99</span> <br>Manchester Ave, Los Angeles, United States <br>Phone: 123 456 789
				</p>
			</div>
			<div class="thumbnail">
				<a href="./detail.php?productid=3" class="thumbnail2">
					<img src="image/bestseller2.png" alt="">
				</a><br>
				<p class="thumbdetail">
					<a href="./detail.php?productid=3"><span style="font-weight: bold; font-size: 15px; color: #000000">TEFAL ULTIMATE ANTI-CALC</span></a> <br><span>Category: <a href=""><span style="color: #9daac4">Irons</span></a><br></span><span style="font-weight: bold;">Price:</span> <span style="font-weight: bold; color: #0078d6;">$79,99</span> <br>Manchester Ave, Los Angeles, United States <br>Phone: 123 456 789</p>
			</div>
			<div class="thumbnail">
				<a href="./detail.php?productid=4" class="thumbnail3">
					<img src="image/bestseller3.png" alt="">
				</a><br>
				<p class="thumbdetail">
					<a href="./detail.php?productid=4"><span style="font-weight: bold; font-size: 15px; color: #000000">STAINLESS STEEL GAS GRILL</span></a> <br><span>Category: <a href=""><span style="color: #9daac4">Grill Barbecue</span></a><br></span><span style="font-weight: bold;">Price:</span> <span style="font-weight: bold; color: #0078d6;">$179,99</span> <br>Alpine Street, Los Angeles, United States <br>Phone: 123 456 789</p>
			</div>
			<div class="thumbnail">
				<a href="./detail.php?productid=13" class="thumbnail4">
					<img src="image/bestseller4.png" alt="">
				</a><br>
				<p class="thumbdetail"><a href="./detail.php?productid=13">
					<span style="font-weight: bold; font-size: 15px; color: #000000">SPOTLIGHT CEILING BAR</span></a> <br><span>Category: <a href=""><span style="color: #9daac4">Lighting</span></a><br></span><span style="font-weight: bold;">Price:</span> <span style="font-weight: bold; color: #0078d6;">$44,99</span> <br>Wall Street, New York, United States <br>Phone: 123 456 789</p>
			</div>
			<div class="thumbnail">
				<a href="./detail.php?productid=8" class="thumbnail5">
					<img src="image/bestseller5.png" alt="">
				</a><br>
				<p class="thumbdetail">
					<a href="./detail.php?productid=8"><span style="font-weight: bold; font-size: 15px; color: #000000">SAMSUNG GALAXY 9.7-INCH</span></a> <br><span>Category: <a href=""><span style="color: #9daac4">Tablets</span></a><br></span><span style="font-weight: bold;">Price:</span> <span style="font-weight: bold; color: #0078d6;">$269,99</span> <br>Manchester Ave, Los Angeles, United States <br>Phone: 123 456 789</p>
			</div>
			<div class="thumbnail">
				<a href="./detail.php?productid=9" class="thumbnail6">
					<img src="image/bestseller6.png" alt="">
				</a><br>
				<p class="thumbdetail">
					<a href="./detail.php?productid=9"><span style="font-weight: bold; font-size: 15px; color: #000000">RYOBI LAWNMOWER</span></a> <br><span>Category: <a href=""><span style="color: #9daac4">Lawn Mowers</span></a><br></span><span style="font-weight: bold;">Price:</span> <span style="font-weight: bold; color: #0078d6;">$159,99</span> <br>Manchester Ave, Los Angeles, United States <br>Phone: 123 456 789</p>
			</div>
		</div>

		<div id="contact">
			<div class="col-sm-4""><button class="contactblock"><span id="callus">Call us: 45 444 444 444</span></button></div>
			<div class="col-sm-4""><button class="contactblock"><span id="orderproduct">Order product</span></button></div>
			<div class="col-sm-4""><button class="contactblock"><span id="sendusamessage">Send us a message</span></button></div>
		</div>

		<div id="carousel-id" class="carousel slide" data-ride="carousel">
			<h2 style="font-weight: bold;">LATEST OFFERS</h2>
			<ol class="carousel-indicators">
				<li data-target="#carousel-id" data-slide-to="0" class=""></li>
				<li data-target="#carousel-id" data-slide-to="1" class=""></li>
				<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item">
					<img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="image/slide1.png">
					<div class="container">
						<div class="carousel-caption">
							<h1 class="slidehead">ELECTRIC BBQ GRILL</h1>
							<p class="slidep">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem.</p>
							<p>
							<a href="./detail.php?productid=10"><button class="btn_readmore"><span class="readmore">Read more</span></button></a>
						</div>
					</div>
				</div>
				<div class="item">
					<img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="image/slide2.png">
					<div class="container">
						<div class="carousel-caption">
							<h1 class="slidehead">MINI BATHROOM CEILING LIGHT</h1>
							<p class="slidep">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem.</p>
							<p>
							<a href="./detail.php?productid=11"><button class="btn_readmore"><span class="readmore">Read more</span></button></a>
						</div>
					</div>
				</div>
				<div class="item active">
					<img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="image/slide3.png">
					<div class="container">
						<div class="carousel-caption">
							<h1 class="slidehead">DELL INSPIRON 22-3000 SERIES</h1>
							<p class="slidep">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem.</p>
							<p>
							<a href="./detail.php?productid=12"><button class="btn_readmore"><span class="readmore">Read more</span></button></a>
						</div>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>

		<div class="moredetail">
			<div id="shopdetail">
				<div class="can_chinh_shopdetail">
					<div><label id="mycatalog"><span style="color: #ffea00; font-size: 40px;">myCatalog</span></label>
					</div>
					<div class="khoang_cach_2_anh">
						<img id="managerpic" src="image/manager.png" alt="">
						<label id="storemanager">Store manager</label>
						<p id="managerinfor">Melanie Readdie<br>+48 123 456 789<br>info@joomla-monster.com</p><br><br><br>
					</div>
				</div>
				<div class="can_chinh_shopdetail">
					<div class="khoang_cach_2_anh">
						<img id="managerpic" src="image/earth.png" alt="">
						<label id="storemanager">Visit us</label><p id="managerinfor">7 Green Lane, London<br>United Kingdom</p>
					<button id="see_us_on_map"><span id="seeusonmap">See us on map</span></button>
					</div>
				</div>
			</div>
			<div class="the_loai_san_pham">
				<div class="can_chinh_the_loai">
					<div><label id="buyatourstore"><span style="color: #3c4247; font-size: 27px;">BUY AT OUR STORE</span></label></div>
					<div>
						<div class="the_loai">
							<img class="img" src="image/anh1.png" alt=""><a href="#"><span style="color: #3c4247; font-weight: bold;">Additional services</span></a>
							<div>
								<div class="p">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non accumsan odio, eget cursus enim.</p>
								</div>
								<div class="next">
									<button class="btn_next"><span class="dinh_dang_next">></span></button>
								</div>
							</div>
						</div>
						<div class="the_loai">
							<img class="img" src="image/anh3.png" alt=""><a href="#"><span style="color: #3c4247; font-weight: bold;">Order & pick up</span></a>
							<div class="p">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non accumsan odio, eget cursus enim.</p>
							</div>
							<div class="next">
								<button class="btn_next"><span class="dinh_dang_next">></span></button>
							</div>
						</div>
					</div>
					<div>
						<div class="the_loai">	
							<img class="img" src="image/anh2.png" alt=""><a href="#"><span style="color: #3c4247; font-weight: bold;">Shopping via phone</a></span>
							<div class="p">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non accumsan odio, eget cursus enim.</p>
							</div>
							<div class="next">
								<button class="btn_next"><span class="dinh_dang_next">></span></button>
							</div>
						</div>
						<div class="the_loai">
							<img class="img" src="image/anh4.png" alt=""><a href="#"><span style="color: #3c4247; font-weight: bold;">Transport</span></a>
							<div class="p">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non accumsan odio, eget cursus enim.</p>
							</div>
							<div class="next">
								<button class="btn_next"><span class="dinh_dang_next">></span></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>
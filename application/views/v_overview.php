<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<!-- PEMANGGILAN JS-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- NAVBAR -->
	<div>
		<nav class="navbar navbar-expand-sm navbar-light row" style="background-color: white; position: fixed; width: 100%;z-index: 1;">
			<!-- <div class="row"> -->
				<a class="navbar-brand col-2" href="#" style="color: orange">EventBrite</a>
				<div class="col-6"></div>
				<div class="collapse navbar-collapse col-4">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active ">
							<a class="nav-link" href="#">Overview</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="#">Pricing</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Resources</a>
							<div class="dropdown-menu text-center" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="#">Blog</a>
								<a class="dropdown-item" href="#">Success Stories</a>
								<a class="drowdown-item" href="#">Product Demo</a>
								<a class="dropdown-item" href="#">Event Guides</a>
							</div>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="#">Contact Us</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="#">Sign In</a>
						</li>
					</ul>
				</div>
				<!-- / navbar collapse -->
			<!-- </div> -->
		</nav>
	</div>
	<!-- IMAGE -->
	<div class="jumbotron-fluid" style="background-image: url(<?php echo base_url("assets/sample/image/hero.jpg");?>"); background-size: cover;">
		<div class="container text-center" style="height: 650px;padding-top: 100px;">
  		<h1 class="text-lg-center" style="color: white; font-size: 75pt;">We're setting the world's stage for live experiences.</h1>
  		<a class="btn btn-primary btn-lg" href="<?= base_url(); ?>/index.php/event/create_event" role="button" style="background-color: #D1410C">Create an event</a>
		</div>
	</div>
	<!-- TULISAN -->
	<div>
				<div style="background-color: #1E0A3C;height: 250px;">
		<p class="text-lg-center"style="color: white;padding: 64px 48px;font-size: 25pt">From music festivals and conventions to pop-up <br>dinners and photography classes, transform<br> your vision into an experience people will love.</p>
				</div>

	</div>
	<!--container 1 -->
	<div>
		<div class="row text-center">
			<div class="col-6" style="margin-top: 100px">
				<h1 class="text-left" style="color: black;margin-top: 50px;padding-left: 60px;font-size: 20pt">Get Started in Minutes</h1>
				<h2 class="text-left" style="color: black;margin-top: 30px;padding-left: 60px;font-size: 20pt">Create a beatiful event listing page with built-in payment processing, analytics, and support.</h2>
  				<a class="btn btn-primary btn-lg" href="#" role="button" style="background-color: #D1410C;margin-top: 35px;">Get started</a>
			</div>
			<div class="col-6" style="background-color: #FAAFA0">
				<h3><img src="<?php echo base_url("assets/sample/image/itulah.jpg"); ?>" style="margin-left: -100px;margin-top: 50px" class="float-left"></h3>
			</div>
		</div>
	</div>
	<!-- container 2 -->
	<div class="container">
		<div class="row" style="padding-top: 100px">
			<div class="col-4 text-center">
				<img src="<?php echo base_url("assets/sample/image/uang.png"); ?>" style="padding: 0px 0px 16px">
				<h1 style="color: black;font-size: 20pt;margin-top: 15px;padding: 8px 0px">Eventbrite Payment Processing</h1>
				<h2 style="color: gray;font-size: 14px">Let your attendees pay online, and get paid out quickly.</h2>
			</div>
			<div class="col-4 text-center">
				<img src="<?php echo base_url("assets/sample/image/tos.png"); ?>">
				<h1 style="color: black;font-size: 20pt;margin-top: 35px;padding: 8px 0px">Free tickets are always free</h1>
				<h2 style="color: gray;font-size: 14px">We never charge fees on free tickets.</h2>
			</div>
			<div class="col-4 text-center">
				<img src="<?php echo base_url("assets/sample/image/peganghp.png"); ?>">
				<h1 style="color: black;font-size: 20pt;margin-top: 30px;padding: 8px 0px">An app designed for organizers</h1>
				<h2 style="color: gray;font-size: 14px">Run, promote, and track your event from your mobile device.</h2>
			</div>
		</div>
	</div>
	<!-- container 3 -->
	<div>
		<div class="row" style="padding-top: 100px">
			<div class="col-6 col-md-4" style="background-color: #82D2DC">
				<img src="<?php echo base_url("assets/sample/image/grafik.png"); ?>" style="margin-right: 150px;margin-top: 50px">
			</div>
			<div class="col-6 col-md-4" style="margin: 150px 0px 0px 300px">
				<h1 class="image/text-left" style="color: black;font-size: 30px;margin: 0px -0.5px 0px 0px">Take control</h1>
				<h2 class="text-left" style="color: gray;font-size: 18px;margin: 0px -0.25px 0px 0px;padding: 16px 0px" >Manage and track your sales with real time<br>reporting and analytics from any device.</h2>
  				<a class="btn btn-primary btn-lg" style="margin-left: 50px;background-color: #D1410C" href="#" role="button">Create an event</a>
			</div>
		</div>
	</div>
	<!-- container 4 -->
	<div class="text-center">
		<div style="padding-top: 90px">
			<h1 class="text-center" style="color: black;font-size: 30pt">Elevate your brand</h1>
			<h2 class="text-center" style="color: gray;font-size: 15pt">Promote your unique brand with beatifully designed pages <br> that enable easy discorvery and ticket purchasing.</h2>
		</div>
	</div>
	<!-- container 5 -->
	<div class="container">
		<div class="row" style="padding-top: 100px">
			<div class="col-4">
				<img src="<?php echo base_url("assets/sample/image/brand-listing.png"); ?>">
				<h1 style="color: black;font-size: 12pt"><img src="<?php echo base_url("assets/sample/image/image.png"); ?>" style="height:25px;width:25px">Professional out-of-the-box listing page</h1>
				<h2 style="color: gray;font-size: 10pt">Up your game with a beautifully designed event page.</h2>
			</div>
			<div class="col-4">
				<img src="<?php echo base_url("assets/sample/image/brand-checkout.png"); ?>">
				<h1 style="color: black;font-size: 12pt"><img src="<?php echo base_url("assets/sample/image/camera.jpg"); ?>" style="height:25px;width:25px">Embed checkout on your own site</h1>
				<h2 style="color: gray;font-size: 10pt">Give your website visitors an easy checkout experience and keep them on your site.</h2>
			</div>
			<div class="col-4">
				<img src="<?php echo base_url("assets/sample/image/brand-website.png"); ?>">
				<h1 style="color:black;font-size: 12pt"><img src="<?php echo base_url("assets/sample/image/globe.png"); ?>" style="height:25px;width:25px">Create a custom branded website</h1>
				<h2 style="color: gray;font-size: 10pt">Let us design and build a unique web presence for you.</h2>
			</div>
		</div>
	</div>
	<!-- container 6 -->
	<div class="row" style="padding-top: 100px">
		<div class="col-4">
			<h1 style="font-size: 35pt;padding-left: 100px">Gather your tribe</h1>
			<h2 style="padding-left: 100px;font-size: 20pt">Extend your reach and find your audience where they discover experiences on partner sites like Facebook, Instagram and Spotify.</h2>
		</div>
		<div class="col-8">
			h1><img src="<?php echo base_url("assets/sample/image/gif.gif"); ?>" style="width: 75%;margin-left: 100px"></h1>
		</div>
	</div>
	<!--  CONTAINER KE 7 -->
	<div class="container text-center">
		<div class="row" style="padding-top: 100px;padding-bottom: 100px">
			<div class="col-4">
				<img src="<?php echo base_url("assets/sample/image/millions.png"); ?>" style="padding: 0px 0px 16px">
				<h1 style="color: black;font-size: 18px;margin: 0px -0.25px 0px 0px;padding: 8px 0px">Event goers all over the world</h1>
				<h2 style="color: gray;font-size: 14px">Three million events in 170+ countries in 2017.</h2>
			</div>
			<div class="col-4">
				<img src="<?php echo base_url("assets/sample/image/google.png"); ?>">
				<h1 style="color: black;font-size: 18px;margin: 0px -0.25px 0px 0px;padding: 8px 0px">Industry leading search ranking</h1>
				<h2 style="color: gray;font-size: 14px">Show up on top Google search results with our top ranked SEO.</h2>
			</div>
			<div class="col-4">
				<img src="<?php echo base_url("assets/sample/image/facebook.png"); ?>">
				<h1 style="color: black;font-size: 18px;margin: 0px -0.25px 0px 0px;padding: 8px 0px">Facebook and Instagram integration</h1>
				<h2 style="color: gray;font-size: 14px">Be Social and sell tickets on the sites where people love to gather.</h2>
			</div>
		</div>
	</div>
	<!-- CONTAINER KE 8 -->
	<div style="background-color: #641E91;padding-bottom: 100px">
		<div class="text-center" style="padding-top: 90px">
			<h1 class="text-center" style="color: white;font-size: 30pt">Make your event an experience</h1>
			<h2 class="text-center" style="color: white;font-size: 15pt">Give your event goers a great experience with simple, secure checkout and rapid<br> check-in through our mobile apps and a full suite of on-site equipment, staffing, and<br> logistics.</h2>
		</div>
		<div class="row" style="padding-top: 100px">
			<div class="col-4 text-center" style="padding-bottom: 70px">
				<img src="<?php echo base_url("assets/sample/image/scan.png"); ?>">
				<h1 style="color: white;font-size: 15pt">Easy to use mobile ticket scanning</h1>
				<h2 style="color: #DBDAE3;font-size: 10pt	">Get your attendees in the door fast.</h2>
			</div>
			<div class="col-4 text-center">
				<img src="<?php echo base_url("assets/sample/image/sell.png"); ?>">
				<h1 style="color: white;font-size: 13pt">Sell more at the door</h1>
				<h2 style="color: #DBDAE3;font-size: 10pt">Accept credit cards and cash, look up orders, and print tickets.</h2>
			</div>
			<div class="col-4 text-center">
				<img src="<?php echo base_url("assets/sample/image/dashboard.png"); ?>">
				<h1 style="color:white;font-size: 13pt">Keep your finger on the pulse</h1>
				<h2 style="color: #DBDAE3;font-size: 10pt">Make informed decisions with data, insights, and reports.</h2>
			</div>
		</div>
	</div>
	<!-- CONTAINER KE 9 -->
	<div class="text-center" style="background-color: #EEEDF2;margin-top: -100px;margin-right: 50px;margin-left: 50px;padding-bottom: 100px">
		<div style="padding-top: 75px">
			<h1 class="text-center" style="color: black;font-size: 25pt">Rule the day-of</h1>
			<h2 class="text-center" style="color: #6F7287;font-size: 15pt">We can help with on-site planning and consultation. Contact us to learn more.</h2>
		</div>
		<div class="row" style="padding-top: 50px">
			<div class="col-4">
				<img src="<?php echo base_url("assets/sample/image/equipment.jpg"); ?>">
				<h1 class="text-center" style="color: black;font-size: 15pt">Equipment rentals</h1>
				<h2 class="text-center" style="color: #6F7287;font-size: 10pt">Take your operations to the next level with RFID gates and mobile box office tech kits.</h2>
			</div>
			<div class="col-4">
				<img src="<?php echo base_url("assets/sample/image/staff.jpg"); ?>">
				<h1 class="text-center" style="color: black;font-size: 15pt">Staffing & logistics</h1>
				<h2 class="text-center" style="color: #6F7287;font-size: 10pt">Put extra hands or a full staff to work.</h2>
			</div>
			<div class="col-4">
				<img src="<?php echo base_url("assets/sample/image/manager.jpg"); ?>" style="padding: 0px 0px 16px">
				<h1 class="text-center" style="color: black;font-size: 15pt">Dedicated success manager</h1>
				<h2 class="text-center" style="color: #6F7287;font-size: 10pt">Benefit from the event expertise of a seasoned pro.</h2>
			</div>
		</div>
	</div>
	<!-- CONTAINER KE 10 -->
	<div class="container text-center" style="padding-bottom: 50px">
		<div style="padding-top: 90px">
			<h1 class="text-center" style="color: black">Get started with the perfect solution for your event</h1>
		</div>
		<div class="row" style="padding-top: 50px">
			<div class="col-4">
				<a href="#" style="color: black;font-size: 20pt">Essentials</a>
				<h4 class="text-center" style="color: #6F7287;font-size: 15pt">The essentials you need to start selling tickets in minutes.</h4>
			</div>
			<div class="col-4">
				<a href="#" style="color: black;font-size: 20pt">Professional</a>
				<h4 class="text-center" style="color: #6F7287;font-size: 15pt">A powerful solution to boost sales and grow your business.</h4>
			</div>
			<div class="col-4">
				<a href="#" style="color: black;font-size: 20pt">Premium</a>
				<h4 class="text-center" style="color: #6F7287;font-size: 15pt">Tailored partnership for organizers with large and complex events.</h4>
			</div>
		</div>
		<a class="btn btn-primary btn-lg" href="#" role="button" style="background-color: orange">View Pricing</a>
	</div>
	<!-- -->

	<!-- CONTAINER KE 11 -->
	<div class="row" style="background-color: #1E0A3C;padding-top: 100px">
		<div class="col-3">
			<h1 style="color: white">Use Eventbrite</h1>
			<h4><a href="#">How It Works</a></h4>
			<h4><a href="#">For Large & Complex Events</a></h4>
			<h4><a href="#">Pricing</a></h4>
			<h4><a href="#">Content Standards</a></h4>
			<h4><a href="#">Eventbrite Mobile App</a></h4>
			<h4><a href="#">Eventbrite Check-In App</a></h4>
			<h4><a href="#">Eventbrite Spectrum</a></h4>
			<h4><a href="#">Rally - Fun Things To Do</a></h4>
			<h4><a href="#">FAQs</a></h4>
			<h4><a href="#">Sitemap</a></h4>
		</div>
		<div class="col-3">
			<h1 style="color: white">Plant Event</h1>
			<h4><a href="#">Conference Management Software</a></h4>
			<h4><a href="#">Nonprofits & Fundraisers</a></h4>
			<h4><a href="#">Event Management & Planning</a></h4>
			<h4><a href="#">Online Event Registration</a></h4>
			<h4><a href="#">Music Venues & Promoters</a></h4>
			<h4><a href="#">Event Equipment & Staffing</a></h4>
			<h4><a href="#">Eventbrite Sales Number</a></h4>
		</div>
		<div class="col-3">
			<h1 style="color: white">Find Event</h1>
			<h4><a href="#">Boston Events</a></h4>
			<h4><a href="#">Chicago Events</a></h4>
			<h4><a href="#">Houston Events</a></h4>
			<h4><a href="#">Los Angeles Events</a></h4>
			<h4><a href="#">Nashville Events</a></h4>
			<h4><a href="#">New York Events</a></h4>
			<h4><a href="#">San Diego Events</a></h4>
			<h4><a href="#">San Francisco Events</a></h4>
			<h4><a href="#">All Cities</a></h4>
		</div>
		<div class="col-3">
			<h1 style="color: white">Connect With Us</h1>
			<h4><a href="#">Contact Support</a></h4>
			<h4><a href="#">Twitter</a></h4>
			<h4><a href="#">Facebook</a></h4>
			<h4><a href="#">LinkedIn</a></h4>
			<h4><a href="#">Instagram</a></h4>
		</div>
	</div>
</body>
</html>

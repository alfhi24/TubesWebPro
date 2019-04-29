<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<!-- PEMANGGILAN JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- -->

	<!--NAVBAR -->

	<div>
		<nav class="navbar navbar-expand-sm navbar-light" style="background-color: black; width: 100%">
			<a class="navbar-brand" href="#" style="color: white">Evenbrite</a>
			<div>
				<ul class="navbar-nav mr auto">
					<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;float: left;">Help</a>
					<div class="dropdown-menu text-center" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="#">Product Updates</a>
						<a class="dropdown-item" href="#">How do I creat an event?</a>
						<a class="drowdown-item" href="#">What does it cost to creat an event?</a>
						<a class="dropdown-item" href="#">Help center</a>
					</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;float: right;"><img src="image/orang.svg" style="width: 5%"></a>
					<div class="dropdown-menu text-center" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="#">Ticket</a>
						<a class="dropdown-item" href="#">Liked</a>
						<a class="drowdown-item" href="#">Following</a>
						<a class="dropdown-item" href="#">Manage Event</a>
						<a class="dropdown-item" href="#">Organizer Profile</a>
						<a class="dropdown-item" href="#">Contacts</a>
						<a class="drowdown-item" href="#">Account Setting</a>
						<a class="dropdown-item" href="#">Create event</a>
						<a class="dropdown-item" href="#">Log out</a>
					</div>
					</li>
				</ul>
			</div>
		</nav>
	</div>

	<!--SELANJUTNYA -->
	<div class="text-center" style="padding-top: 150px">
		<h1>How would you like to create your event?</h1>
		<h2 style="font-size: 10pt"><img src="<?php echo base_url("assets/sample/image/graphic.png"); ?>" style="width: 10%">We'll ask you a few questions to start building your event for you.</h1>
		<h3><a class="btn btn-primary btn-lg" role="button" href="#" style="background-color: #D1410C">Build it for me</a></h3>
	</div>
	<!-- BUILD IT MY SELF -->
	<div class="text-center" style="padding-top: 100px">
		<a class="btn btn-primary btn-lg" role="button" href="#" style="margin-bottom: 100px;background-color: white;color: black">Build it my self</a>
	</div>
</body>
</html>

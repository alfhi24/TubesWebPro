<!DOCTYPE html>
<html>
<head>
  <title>Eventbrite - Discover Great Events Or Create Your Own & Sell Tickets</title>
  <link rel="icon" type="image/ico" href="<?php echo base_url("assets/sample/icon.png"); ?>" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/indexcss.css"); ?>" />
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
</head>
<body>

  <div class="topnav" id="myTopnav">
    <img class="logo" src="<?php echo base_url("assets/sample/logo.png"); ?>" alt="" width="115px" height="33px">
    <a href="#home">Sign In</a>
    <a class="createevent" href="<?= base_url(); ?>/index.php/event/create_event">Create Event</a>
    <div class="dropdown">
      <button class="dropbtn">Help <i class="down"></i>
      </button>
      <div class="dropdown-content">
        <a href="#">How it works</a>
        <a href="#">What does it cost to create an event?</a>
        <a href="#">Where are my tickets?</a>
        <a href="#">How to contact the event organizer</a>
        <a href="#">Helo center</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">Organize <i class="down"></i>
      </button>
      <div class="dropdown-content">
        <a href="<?= base_url(); ?>/index.php/event/overview">Overview</a>
        <a href="#">Pricing</a>
        <a href="#">Blog</a>
        <a href="#">Resources</a>
      </div>
    </div>
    <a href="#news">Browse Event</a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
  </div>
  <!-- <img class="hero" src="sample/img1.jpg" alt="" width="1540" height="400"> -->
  <div id="demo" class="carousel slide" data-ride="carousel" data-interval="3500">

  <!-- Indicators -->
  <!-- <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul> -->

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url("assets/sample/img1.jpg"); ?>" alt="Los Angeles" height="430" width="100%">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url("assets/sample/img2.jpg"); ?>" alt="Chicago" height="430" width="100%">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url("assets/sample/img3.jpg"); ?>" alt="New York" height="430" width="100%">
    </div>
  </div>

</div>
<!-- Box box searching -->
<div class="box_search">
  <form class="form_search" action="index.html" method="post" >
    <div class="row">
      <div class="col-sm-3" id="looking_for">
        <div class="form-group">
          <label>Looking for</label>
          <input type="text" class="form-control" id="usr" placeholder="Event">

        </div>
      </div>
      <div class="col-sm-3" id="in_col">
        <div class="form-group">
          <label>In</label>
          <input type="text" class="form-control" id="pwd" value="Bandung">
        </div>
      </div>
      <div class="col-sm-3" id="on_col">
        <div class="form-group">
          <label>On</label>
          <input type="text" class="form-control" id="pwd">
        </div>
      </div>
    </div>
  </form>
</div>
<br> <br> <br>
<div class="aftersearchbox">
  <h1><b>Live your best life</b></h1>
</div>

<!-- LIST EVENT -->

<!-- READ QUERY FOR LIST EVENT -->

<div class="container">
  <div class="row">
    <?php foreach($event as $u){ ?>
      <div class="col-sm-4">
        <div class="card" style="width:350px">
          <img class="card-img-top" src="<?php echo base_url('assets/sample/'.$u->image); ?>" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title"><?php echo $u->title ?></h4>
            <p class="card-text"><?php echo $u->start ?></p>
            <p class="card-text"><?php echo $u->location ?></p>
            <p class="card-text"><?php echo $u->tiket ?></p>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>



<div class="biru">
  <div class="row">
    <div class="col-sm-8">
      <h1><b>Want to create an <span id="event">event</span>?</b></h1>
    </div>
    <div class="col-sm-4" style="text-align:left; padding-top:20px; margin-left:-30px;">
      <h5 id="learnmore" ><b>Learn More</b>
        <a href="#"><img src="<?php echo base_url("assets/sample/wor.png"); ?>" width="30px" height="30px;"></a>
      </h5>
    </div>
  </div>
</div>

<!-- Scroll bar -->
<div class="kotak">
  <h1 id="kategori"><b>Categories to explore</b></h1>
  <section class="carda">
    <div class="card--content"><img src="<?php echo base_url("assets/sample/1.jpg"); ?>" width="165" height="240"></div>
    <div class="card--content"><img src="<?php echo base_url("assets/sample/2.jpg"); ?>" width="165" height="240"></div>
    <div class="card--content"><img src="<?php echo base_url("assets/sample/3.jpg"); ?>" width="165" height="240"></div>
    <div class="card--content"><img src="<?php echo base_url("assets/sample/4.jpg"); ?>" width="165" height="240"></div>
    <div class="card--content"><img src="<?php echo base_url("assets/sample/5.jpg"); ?>" width="165" height="240"></div>
    <div class="card--content"><img src="<?php echo base_url("assets/sample/6.jpg"); ?>" width="165" height="240"></div>
    <div class="card--content"><img src="<?php echo base_url("assets/sample/7.jpg"); ?>" width="165" height="240"></div>
    <div class="card--content"><img src="<?php echo base_url("assets/sample/1.jpg"); ?>" width="165" height="240"></div>
    <div class="card--content"><img src="<?php echo base_url("assets/sample/2.jpg"); ?>" width="165" height="240"></div>
    <div class="card--content"><img src="<?php echo base_url("assets/sample/3.jpg"); ?>" width="165" height="240"></div>
    <div class="card--content"><img src="<?php echo base_url("assets/sample/4.jpg"); ?>" width="165" height="240"></div>
  </section>
</div>



<!-- Footer -->
<footer class="page-footer">

    <!-- Footer Links -->
    <div class="container text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-3 mx-auto">

          <!-- Links -->
          <h6 class="mt-3 mb-4">Use Eventbrite</h6>

          <ul class="list-unstyled">
            <li>
              <a href="#!">How It Works</a>
            </li>
            <li>
              <a href="#!">For Large & Complex Events</a>
            </li>
            <li>
              <a href="#!">Pricing</a>
            </li>
            <li>
              <a href="#!">Content Standards</a>
            </li>
            <li>
              <a href="#!">Eventbrite Mobile App</a>
            </li>
            <li>
              <a href="#!">Eventbrite Check-In App</a>
            </li>
            <li>
              <a href="#!">Eventbrite Spectrum</a>
            </li>
            <li>
              <a href="#!">Rally - Fun Things To Do</a>
            </li>
            <li>
              <a href="#!">FAQs</a>
            </li>
            <li>
              <a href="#!">Sitemap</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-3 mx-auto">

          <!-- Links -->
          <h6 class="mt-3 mb-4">Plan Events</h6>

          <ul class="list-unstyled">
            <li>
              <a href="#!">Conference Management Software</a>
            </li>
            <li>
              <a href="#!">Eventbrite + Facebook</a>
            </li>
            <li>
              <a href="#!">Nonprofits & Fundraisers</a>
            </li>
            <li>
              <a href="#!">Sell Tickets</a>
            </li>
            <li>
              <a href="#!">Event Management & Planning</a>
            </li>
            <li>
              <a href="#!">Online Event Registration</a>
            </li>
            <li>
              <a href="#!">Music Venues & Promoters</a>
            </li>
            <li>
              <a href="#!">Event Equipment & Staffing</a>
            </li>
            <li>
              <a href="#!">Eventbrite Sales Number</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-3 mx-auto">

          <!-- Links -->
          <h6 class="mt-3 mb-4">Find Events</h6>

          <ul class="list-unstyled">
            <li>
              <a href="#!">Boston Events</a>
            </li>
            <li>
              <a href="#!">Chicago Events</a>
            </li>
            <li>
              <a href="#!">Denver Events</a>
            </li>
            <li>
              <a href="#!">Houston Events</a>
            </li>
            <li>
              <a href="#!">Los Angeles Events</a>
            </li>
            <li>
              <a href="#!">Nashville Events</a>
            </li>
            <li>
              <a href="#!">New York Events</a>
            </li>
            <li>
              <a href="#!">San Diego Events</a>
            </li>
            <li>
              <a href="#!">San Francisco Events</a>
            </li>
            <li>
              <a href="#!">All Cities</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-3 mx-auto" >

          <!-- Links -->
          <h6 class="mt-3 mb-4">Connect With Us</h6>

          <ul class="list-unstyled">
            <li>
              <a href="#!">Contact Support</a>
            </li>
            <li>
              <a href="#!">Twitter</a>
            </li>
            <li>
              <a href="#!">Facebook</a>
            </li>
            <li>
              <a href="#!">LinkedIn</a>
            </li>
            <li>
              <a href="#!">Instagram</a>
            </li>
            <li>
              <a href="#!">Google+</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">
      <!-- <p class="copyright"> © 2019 Eventbrite <p> -->
      <div class="row">
        <div class="col-sm-2" style="text-align: left;">© 2019 Eventbrite</div>
        <div class="col-sm-8" >
          <td><a href="#">About <span id="bulet">&#9679;</span></a></td>
          <td><a href="#">Blog <span id="bulet">&#9679;</a></td>
          <td><a href="#">Help <span id="bulet">&#9679;</a></td>
          <td><a href="#">Careers <span id="bulet">&#9679;</a></td>
          <td><a href="#">Press <span id="bulet">&#9679;</a></td>
          <td><a href="#">Investors <span id="bulet">&#9679;</a></td>
          <td><a href="#">Security <span id="bulet">&#9679;</a></td>
          <td><a href="#">Developers <span id="bulet">&#9679;</a></td>
          <td><a href="#">Terms <span id="bulet">&#9679;</a></td>
          <td><a href="#">Privacy <span id="bulet">&#9679;</a></td>
          <td><a href="#">Cookies</a></td>
        </div>
        <div class="col-sm-2" style="text-align: right;">
          <select class="option">
            <option value="argentina">Argentina</option>
            <option value="australia">Australia</option>
            <option value="brazil">Brazil</option>
            <option value="canada">Canada</option>
            <option value="france">France</option>
            <option value="indonesia">Indonesia</option>
            <option value="malaysia">Malaysia</option>
            <option value="singapore">Singapore</option>
            <option value="thailand">Thailand</option>
            <option value="vietnam">Vietnam</option>
          </select>
        </div>
      </div>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->




  <script>
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
  </script>


</body>
</html>

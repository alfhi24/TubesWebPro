<!DOCTYPE html>
<html>
<head>
  <title>Eventbrite - Discover Great Events Or Create Your Own & Sell Tickets</title>
  <link rel="icon" type="image/ico" href="<?php echo base_url("assets/sample/icon.png"); ?>" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/create_eventcss.css"); ?>" />
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
</head>
<body>
  <div class="topnav" id="myTopnav">
    <img class="logo" src="<?php echo base_url("assets/sample/logo.png"); ?>" alt="" width="115px" height="33px">
    <a href="#home">Nama</a>
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
    <a href="#news">Browse Event</a>
  </div>
  <hr>
<form action="" method="post">
<div class="container_form" style="background-color:#f8f7fa;">
  <div class="container">
      <h2>Event Detail</h2>
      <hr>
        <div class="form-group">
          <label for="title">Event Title</label>
          <input type="text" class="form-control" id="title_event" placeholder="Give it a distinct name" name="title">
        </div>
        <div class="form-group">
          <label for="Location">Location</label>
          <input type="text" class="form-control" id="location_event" placeholder="Search a venue or address" name="location">
        </div>
        <div class="row">
          <div class="col-sm">
            <div class="form-group">
              <label for="date_start">Starts</label>
              <input type="date" class="form-control" id="date_start" placeholder="" name="start">
            </div>
          </div>
          <div class="col-sm">
            <div class="form-group">
              <label for="date_start">Ends</label>
              <input type="date" class="form-control" id="date_end" placeholder="" name="end">
            </div>
          </div>
        </div>

        <div class="wrapper">
          <div class="file-upload">

            <?php echo form_open_multipart('Event/create_event');?>
            <label for="image">Event Image</label> <br>
            <input type="file" name="userfile" size="20" value="upload"/>
            <br/><br />
            <i class="fa fa-arrow-up"></i>
          </div>
        </div>


        <div class="form-group">
          <label for="Deskripsi">Event Description</label>
          <textarea class="form-control" rows="5" id="deskripsi_event" name="deskripsi"></textarea>
        </div>
        <h2>Create Tickets</h2>
        <hr>
        <div class="create_tickets"  style="text-align:center;">
              <p>What type of ticket would you like to start with?</p>

              <!-- Default inline 1-->
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="defaultInline1" name="inlineDefaultRadiosExample" value="Free">
                <label class="custom-control-label" for="defaultInline1">Free Ticket</label>
              </div>

              <!-- Default inline 2-->
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="defaultInline2" name="inlineDefaultRadiosExample" value="Paid">
                <label class="custom-control-label" for="defaultInline2">Paid Ticket</label>
              </div>

              <!-- Default inline 3-->
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="defaultInline3" name="inlineDefaultRadiosExample" value="Donation">
                <label class="custom-control-label" for="defaultInline3">Donation</label>
              </div>
        </div>
        <h2>Additional Setting</h2>
        <hr>
        <div class="form-group" style="width:60%;">
          <label for="Event_type">Event Type</label>
          <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect" name="tipe">
            <option selected>Select the type of event</option>
            <option value="Competition">Competition</option>
            <option value="Camp">Camp</option>
            <option value="Training">Training</option>
            <option value="Seminar">Seminar</option>
            <option value="Workshop">Workshop</option>
            <option value="Social Activity">Social Activity</option>
          </select>
        </div>
        <div class="form-group" style="width:40%;">
          <label for="Event_type">Event Topic</label>
          <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect" name="topik">
            <option selected>Select a topic</option>
            <option value="Business">Business</option>
            <option value="Charity">Charity</option>
            <option value="Food and Drink">Food & Drink</option>
            <option value="Music">Music</option>
            <option value="Technology">Technology</option>

          </select>
        </div>

        <div class="checkbox">
          <p>Remaining Tickets</p>
          <label><input type="checkbox" name="remember"> Show the number of remaining tickets on your event listing </label>
        </div>
        <br> <br>
    </div> <hr>
</div> <br> <br> <br>
<div class="cont_submit" style="background-color:white;">
  <h2 style="text-align:center;">Nice one! You're almost done!</h2> <br>
  <div class="btn_submit" style="text-align:center;">
        <button type="submit" name="create" class="btn btn-default" style="margin-right:20px;">Submit</button>
        <button type="button" class="btn btn-success">Make your event live</button>
  </div> <br> <br> <br>
</div>
</form>


<!-- Footer -->
<footer class="page-footer" style="background-color:#1e0a3c">
  <hr>
    <!-- Copyright -->
    <div class="container">
      <div class="footer-copyright text-center py-3">
        <!-- <p class="copyright"> © 2019 Eventbrite <p> -->
        <div class="row">
          <div class="col-sm-2" style="text-align: left;">© 2019 Eventbrite</div>
          <div class="col-sm-8" >
            <td><a href="#">About</a></td>
            <td><a href="#">Blog</a></td>
            <td><a href="#">Help</a></td>
            <td><a href="#">Careers</a></td>
            <td><a href="#">Press</a></td>
            <td><a href="#">Developers</a></td>
            <td><a href="#">Terms</a></td>
            <td><a href="#">Privacy</a></td>
            <td><a href="#">Cookies</a></td>
          </div>
          <div class="form-group" style="width:10%;">
            <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect" style="background-color:#1e0a3c; color:#fff;">
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
          </div> <hr>
        </div>
      </div>
    <div class="copyright" style="text-align: center; color:#a0a8b3;">© 2019 Eventbrite <br>
      <img src="<?php echo base_url("assets/sample/icon_abu.png"); ?>" width="50" height="50"> <br> <br>
    </div>
    </div>

    <!-- Copyright -->

  </footer>
  <!-- Footer -->

</body>
</html>

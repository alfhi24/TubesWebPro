<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.5">
        <title>Eventbrite - Log In or Sign Up</title>
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Custom styles for this template -->
        <link href="pricing.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?=base_url('assets/style.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/float.css')?>">
        <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/icon.png') ?>" />
    </head>
    <body>
        <div class="container-fluid cf-navbar">
            <nav class="navbar navbar-expand-lg navbar-light row" style="padding-top: 15px;">
                <div class="col-1">
                    <a href="<?= site_url('SignIn') ?>">
                        <img src="<?= base_url('assets/lol.svg') ?>" width="80%" height="80%">
                    </a>
                </div>
                <div class="col-9">
                    <div class="input-group dropdown turun">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search for events">
                            <div class="dropdown-menu isiturun" style="width: 100%">
                                <a href="#" class="dropdown-item" style="color: black;">Arts</a>
                                <a href="#" class="dropdown-item" style="color: black;">Business</a>
                                <a href="#" class="dropdown-item" style="color: black;">Charity & Causes</a>
                                <a href="#" class="dropdown-item" style="color: black;">Community</a>
                                <a href="#" class="dropdown-item" style="color: black;">Film & Media</a>
                                <a href="#" class="dropdown-item" style="color: black;">Food & Drink</a>
                                <a href="#" class="dropdown-item" style="color: black;">Music</a>
                                <a href="#" class="dropdown-item" style="color: black;">All Categories</a>
                                </font>
                            </div>
                    </div>
                </div>
                <div class="col-2" pull-right>
                    <font size="2.8px">
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Browse Events</a>
                            </li>
                            <li class="nav-item dropdown lol">
                                <a class="nav-link dropdown" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Help   <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <font color="grey">
                                        <a class="dropdown-item" href="#">How it works</a>
                                        <a class="dropdown-item" href="#">What does it cost to create an <br>event?</a>
                                        <a class="dropdown-item" href="#">Where are my tickets?</a>
                                        <a class="dropdown-item" href="#">How to contact the event <br>organizer</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Help Center</a>
                                    </font>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sign In</a>
                            </li>
                        </ul>
                    </div>
                    </font>
                </div>
            </nav>
        </div>
        <div class="container-fluid" style="margin: 4em 0 0 0">
            <div class="row">
                <div class="col"></div>
                <div class="col-2">
                    <center>
                        <form class="form-signin" action="<?= site_url('Login/create') ?>" method="POST">
                            <input type="hidden" name="email" value="<?= $email ?>">
                            <img class="mb-4" src="<?= base_url('assets/login.svg') ?>" width="16.5%" height="16.5%">
                            <h1 class="h4 mb-3"><b>Welcome</b></h1>
                            <h7 style="font-size: 13px; color: #818495;">Create an acocunt.</h7>
                            <br><br>
                                <div class="form-group">
                                    <label for="inputEmail" class="form-label" style="background-color: transparent; padding-left: 85%;"> <a href="<?= site_url('signIn') ?>"><i class="fa fa-edit fa-fw"></i></a> </label>
                                    <input type="email" id="inputEmail" style="background-color: #f8f7fa; color:#cfced6;" class="form-input" value="<?= $email ?>" disabled>
                                </div>
                                
                                <div class="row">
                                    <div class="col">
                                        
                                        <div class="form-group" style="width: 100%">
                                            <label for="inputFirstName" class="form-label">First Name</label>
                                            <input type="text" id="firstName" name="first_name" class="form-input"required="" autofocus="">
                                        </div>
                                        
                                    </div>
                                    <div class="col">
                                        
                                        <div class="form-group" style="width: 100%">
                                            <label for="inputLastName" class="form-label">Last Name</label>
                                            <input type="text" id="lastname" name="last_name" class="form-input"required="">
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group pass">
                                    <label for="inputPass" class="form-label">Password</label>
                                    <input type="Password" id="inputEmail" name="pass" class="form-input"required="">
                                </div>
                            <p class="mt-7 mb-3 text-muted" style="font-size: 11.5px; text-align: left;">Your password must be at least 8 characters
                            </p>
                            <input class="btn btn-lg btn-block" style="background-color: #d1410d; color: white; font-size: 14px" type="submit" onclick="<?= site_url('login/create') ?>" value="Sign Up">
                            </form>
                    </center>
                </div>
                <div class="col"></div>
            </div>
        </div>
        <footer>
            <div class="fixed-bottom foot">
                <div class="row">
                    <div class="col-2">
                        <ul class="nav">
                            <li class="nav-item eb" style="color : #666766;">
                                © 2019 Eventbrite
                            </li>
                        </ul>
                    </div>
                    <div class="col-8">
                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link" style="color:#c5c1ce;" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color:#c5c1ce;" href="#">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color:#c5c1ce;" href="#">Help</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color:#c5c1ce;" href="#">Careers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color:#c5c1ce;" href="#">Press</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color:#c5c1ce;" href="#">Investors</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color:#c5c1ce;" href="#">Security</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color:#c5c1ce;" href="#">Developers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color:#c5c1ce;" href="#">Terms</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color:#c5c1ce;" href="#">Privacy</a> 
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color:#c5c1ce;" href="#">Cookies</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-2">
                        <div class="dropdown">
                            <a class="nav-link dropdown du" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#c5c1ce;">
                            Country   <i class="fa fa-angle-down"></i>
                            </a>
                            <div class="dropdown-menu haha" aria-labelledby="dropdownMenuButton" style="height: 200px; overflow: auto;">
                                <a class="dropdown-item" style="font-size: 12px;" href="#">Afghanistan</a>
                                <a class="dropdown-item" style="font-size: 12px;" href="#">China</a>
                                <a class="dropdown-item" style="font-size: 12px;" href="#">Indonesia</a>
                                <a class="dropdown-item" style="font-size: 12px;" href="#">Japan</a>
                                <a class="dropdown-item" style="font-size: 12px;" href="#">Malaysia</a>
                                <a class="dropdown-item" style="font-size: 12px;" href="#">Myanmar</a>
                                <a class="dropdown-item" style="font-size: 12px;" href="#">North Korea</a>
                                <a class="dropdown-item" style="font-size: 12px;" href="#">Palestine</a>
                                <a class="dropdown-item" style="font-size: 12px;" href="#">Philippines</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="<?= base_url('assets/float.js')?>"></script>
    </body>
</html>
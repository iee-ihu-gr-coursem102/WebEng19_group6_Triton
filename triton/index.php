<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Triton Team</title>

  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .fa {
          padding: 20px;
          font-size: 15px;
          width: 50px;
          text-align: center;
          text-decoration: none;
          margin: 5px 2px;
        }

        .fa:hover {
            opacity: 0.7;
        }

        .fa-facebook {
          background: #3B5998;
          color: white;
        }

        .fa-twitter {
          background: #55ACEE;
          color: white;
        }
        
        .fa-instagram {
        background: #125688;
        color: white;
    }
    </style>
    

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.min.css" rel="stylesheet">

  <!-- Register Form CSS -->
  <link href="css/registration.css" rel="stylesheet" type="text/css">

  <!-- Login Form CSS -->
  <link href="css/login.css" rel="stylesheet" type="text/css">

  <!-- JQuery Library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body id="page-top">
  <?php session_start();
  ?>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Triton</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Υπηρεσίες</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Music Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#register">Εγγραφή</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li><a href="#myModal" class="trigger-btn" data-toggle="modal" data-target="#myModal">Σύνδεση</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Login -->
  <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="login-form" style="pointer-events: auto;">
        <form action="./php/login.php" method="post" id="lognform" onSubmit="return validatelogin();" style="margin-bottom: 0px;">
          <div class="modal-header text-center" style="padding: 0px;">
            <h2 class="modal-title w-100 font-weight-bold">Sign In</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clearmodal()">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="input-group form-group">
            <span class="invalid-feedback" id="userinfo" style="display:inline"></span>
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" id="lusername" name="lusername" placeholder="username">
          </div>
          <div class="input-group form-group">
            <span class="invalid-feedback" id="passinfo" style="display:inline"></span>
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" class="form-control" id="lpassword" name="lpassword" placeholder="password">
          </div>
          <?php
          if (isset($_SESSION["errorMessage"])) {
            echo '<script> $(document).ready(function(){ $("#myModal").modal("show"); }); </script>'
          ?>
            <div class="invalid-feedback" id="userinfo" style="display:inline"><?php echo $_SESSION["errorMessage"]; ?></div>
          <?php
            unset($_SESSION["errorMessage"]);
          }
          ?>
          <div class="clearfix">
            <label><input type="checkbox"> Remember me</label>
          </div>
          <div class="form-group">
            <button id="logbtn" type="submit" class="btn btn-primary btn-block">Log in</button>
          </div>
        </form>
        <p class="text-center small" style="background: #f7f7f7; padding: .75rem 1.25rem; border-top: 1px solid rgba(0,0,0,.125);">Don't have an
          account! <a href="#register" onclick="$('#myModal').modal('hide')">Sign up here</a>. <br>
          <a href="#" class="clearfix">Forgot Password?</a>
        </p>
      </div>
    </div>
  </div>

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Η ΜΟΥΣΙΚΗ ΣΚΗΝΗ ΤΗΣ ΘΕΣΣΑΛΟΝΙΚΗΣ ΣΤΑ ΧΕΡΙΑ ΣΟΥ</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">Τα τελευταία νέα για τα Music events που τρέχουν τώρα στην
            πόλη</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Μαθε περισσοτερα</a>
        </div>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">ΕΝΑ ΟΛΟΚΛΗΡΩΜΕΝΟ API ΓΙΑ ΤΙΣ ΜΟΥΣΙΚΕΣ ΣΟΥ ΑΝΑΓΚΕΣ</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4">Με ένα απλό REGISTER χωρίς καμία χρέωση είσαι πάντα ενημερωμένος/η για τα
            τελευταία μουσικά νέα και happenings στην θεσσαλονίκη</p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="#register">ΚΑΝΕ ΤΩΡΑ REGISTER</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="page-section" id="services">
    <div class="container">
      <h2 class="text-center mt-0">Υπηρεσίες</h2>
      <hr class="divider my-4">
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-gem text-primary mb-4"></i>
            <h3 class="h4 mb-2">Εύχρηστη Εφαρμογή</h3>
            <p class="text-muted mb-0">Μια εφαρμογή εύκολη στην χρήση για όλες τις ηλικίες</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
            <h3 class="h4 mb-2">Aνερχόμενα Events</h3>
            <p class="text-muted mb-0">Mε κάθε αναζήτηση εμφάνιση ανερχόμενων μουσικών events στην πόλη της Θεσσαλονίκης
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-globe text-primary mb-4"></i>
            <h3 class="h4 mb-2">Kαιρός</h3>
            <p class="text-muted mb-0">Δυνατότητα για ενημέρωση καιρού εφόσον πρόκειται για outdoor event</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-heart text-primary mb-4"></i>
            <h3 class="h4 mb-2">Favorite</h3>
            <p class="text-muted mb-0">Εξατομικευμένα νέα με βάση τους αγαπημένους σου καλλιτέχνες/bands</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section id="portfolio">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/1.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/1.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Coldplay
              </div>
              <div class="project-name">

              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/2.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/2.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Red Hot Chili Peppers
              </div>
              <div class="project-name">

              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/3.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/3.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                ACDC
              </div>
              <div class="project-name">

              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/4.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/4.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                U2
              </div>
              <div class="project-name">

              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/5.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/5.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Radiohead
              </div>
              <div class="project-name">

              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/6.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/6.jpg" alt="">
            <div class="portfolio-box-caption p-3">
              <div class="project-category text-white-50">
                King Of Leon
              </div>
              <div class="project-name">

              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Register Section -->
  <section class="page-section" id="register" style="padding-bottom: 0rem;padding-top: 2rem;">
    <div class="signup-form">
      <form action="./php/insertUser.php" method="post" onkeyup="validateregister();" onSubmit="return svalidateregister();">
        <h2>Register</h2>
        <p class="hint-text">Δημιούργησε τον δικό σου λογαριασμό!</p>
        <div class="form-group">
          <span class="invalid-feedback" id="regfname" style="display:inline"></span>
          <input type="text" class="form-control" name="fname" id="fname" placeholder="Όνομα">
        </div>
        <div class="form-group">
          <span class="invalid-feedback" id="reglname" style="display:inline"></span>
          <input type="text" class="form-control" name="lname" id="lname" placeholder="Επώνυμο">
        </div>
        <div class="form-group">
          <div id="email-availability-status"></div>
          <span class="invalid-feedback" id="regemail" style="display:inline"></span>
          <input type="email" class="form-control" name="email" placeholder="Email" id="email" onblur="checkemailAvailability()">
        </div>
        <div class="form-group">
          <div id="username-availability-status"></div>
          <span class="invalid-feedback" id="reguname" style="display:inline"></span>
          <input type="text" class="form-control" name="uname" placeholder="Όνομα χρήστη" id="uname" onblur="checkusernameAvailability()">
        </div>

        <div class="form-group">
          <span class="invalid-feedback" id="regpass" style="display:inline"></span>
          <input type="password" class="form-control" id="pass" name="password" placeholder="Κωδικός πρόσβασης">
        </div>
        <div class="form-group">
          <span class="invalid-feedback" id="regconfpass" style="display:inline"></span>
          <input type="password" class="form-control" id="confpass" name="confirm_password" placeholder="Επιβεβαίωση κωδικού πρόσβασης">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
      </form>
      <div class="text-center">Έχεις ήδη λογαριασμό; <a href="#myModal" class="trigger-btn" data-toggle="modal" data-target="#myModal">Σύνδεση</a></div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted" align="center">Copyright &copy; 2019 - Powered by Triton Team </br>
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-instagram"></a>
        
      </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/creative.min.js"></script>

  <!--Our JavaScript scripts -->
  <script src="js/validateform.js"></script>
  <script src="js/clearmodal.js"></script>
  <script src="js/availability.js"></script>

</body>

</html>
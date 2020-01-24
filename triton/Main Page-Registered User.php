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

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.min.css" rel="stylesheet">

  <!-- JQuery Library -->
  <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
</head>

<body id="page-top">

  <?php session_start(); ?>

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
            <a class="nav-link js-scroll-trigger" href="#about">Search</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#profile">Λογαριασμός</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
        <ul class="navbar-nav">
		  <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#"><?php if(isset($_SESSION['uname'])) { echo '<i class="fas fa-user-circle"></i> ' . $_SESSION['uname'];} else { header("location: /webeng19g6/"); }?></a></li>
          <li class="nav-item"><a class="nav-link js-scroll-trigger" onclick="document.location.href='./php/logout.php'" href="#logout">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>

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
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Κανε τωρα αναζητηση</a>
        </div>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section class="page-section bg-primary" id="about">
    <form method="post" id="search-form" action="./php/searchSongApi.php">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h2 class="text-white mt-0">ΒΡΕΣ ΤΑ ΜΟΥΣΙΚΑ EVENTS ΠΟΥ ΣΕ ΕΝΔΙΑΦΕΡΟΥΝ ΜΕ ΕΝΑ ΚΛΙΚ</h2>
            <hr class="divider light my-4">

            <a class=!-- Search form -->
              <div class="md-form mt-0">
				<input type="submit" class="btn btn-success btn-xl js-scroll-trigger" value="CLICK">
              </div>
            </a>
          </div>
        </div>
      </div>
    </form>
  </section>

  <!-- Results Section -->
  <section class="page-section d-none" id="results">
    <div class="container">
        <table class="table table-hover"id="resulttable">
        </table>
        <!-- end result-->
    </div>
  </section>
  
<!-- User Profile Section -->
<section class="page-section" id="profile">
    <div class="container bootstrap snippet">
      <h2 class="text-center mt-0">Λογαριασμός</h2>
      <hr class="divider my-4">
	  
    <div class="row">
  		<div class="col-lg-3 col-md-6"><h1><?php if(isset($_SESSION['uname'])) echo $_SESSION['uname']?></h1></div>
     </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
      </div><br>
        
        </div><!--/col-3-->
    	<div class="col-sm-9">
            <ul class="nav nav-tabs" style="margin-bottom:10px">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#account">Στοιχεία λογαριασμού</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#favorites">Αγαπημένα events</a></li>
				<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#password">Αλλαγή κωδικού</a></li>
              </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="account">
                  <form class="form" action="#" method="post">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Όνομα</h4></label>
                              <input type="text" disabled="disabled" class="form-control" name="first_name" id="first_name" placeholder='<?php echo $_SESSION['fname'] ?>'>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Επώνυμο</h4></label>
                              <input type="text" disabled="disabled" class="form-control" name="last_name" id="last_name" placeholder='<?php echo $_SESSION['lname'] ?>'>
                          </div>
                      </div>      
                      <div class="form-group">                       
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" disabled="disabled" class="form-control" name="email" id="email" placeholder='<?php echo $_SESSION['email'] ?>'>
                          </div>
                      </div>	
              	</form>
             </div><!--/tab-pane-->
			 
             <div class="tab-pane" id="favorites">
                      <div class="form-group">
                           <div class="col-xs-12">
        <table class="table table-hover"id="resulttable2">
		<?php include_once("./php/showfavorites.php");?>
        </table>
                            </div>
                      </div>			   
             </div><!--/tab-pane-->
 
             <div class="tab-pane" id="password">
                          <div class="col-xs-6">
                              <label for="email"><h4>Πατήστε το κουμπί για αλλαγή κωδικόυ</h4></label>                                 <br>
                              <label for="email"><p>Θα σας έρθει ενα email με οδηγίες για την αλλαγή κωδικού</p></label>
                          </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                               	<h3></h3><button class="btn btn-lg btn-success" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset Password</button>
                            </div>
                      </div>			   
             </div><!--/tab-pane-->
               
          </div><!--/tab-content-->

        </div><!--/col-9-->
		</div>
    </div><!--/row-->
</div>      

  

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Let's Get In Touch!</h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5">Eπικοινώνησε μαζί μας και βοήθησε μας να κάνουμε την εφαρμογή καλύτερη για εσένα
            και την παρέα σου</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div>+1 (202) 555-0149</div>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="mailto:contact@yourwebsite.com">Triton@hotmail.com</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; 2019 - Powered by Triton Team</div>
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
  <script src="js/showresults.js"></script>
  <script src="js/favorite-toggle.js"></script>
  <script src="js/addfavorite.js"></script>
</body>

</html>
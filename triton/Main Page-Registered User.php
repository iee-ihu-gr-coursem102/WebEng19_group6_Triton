<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Creative - Start Bootstrap Theme</title>

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
  <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

  <script>
    jQuery(function() {
      $('#search-form').submit(function() {
        var search = $('#search').val();
        console.log("1");

        $.ajax({
          url: '/triton/php/searchSongApi.php',
          dataType: 'JSON',
          type: 'post',
          data: {
            //"search": $('#search').val(),
            search: search,
          },
          success: function(data) {
            console.log(data);
            // d=$.parseJSON(JSON.stringify(data));
              
            //console.log(d);
            var output;
            $.each(data,function(i,e) {
                console.log("2");
                output += '<tr><td>'+e+''+'</td><td>'+e+'</td></tr>';
                console.log("1");
            });
            
              $('#resulttable').append(output);
            
          }
        });
        return false;
      });
    });
  </script>

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
            <a class="nav-link js-scroll-trigger" href="#services">Υπηρεσίες</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#">Λογαριασμός</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#"><?php echo $_SESSION['uname'] ?></a></li>
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
    <form method="post" id="search-form" action="/triton/php/searchSongApi.php">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h2 class="text-white mt-0">ΒΡΕΣ ΤΑ ΜΟΥΣΙΚΑ EVENTS ΠΟΥ ΣΕ ΕΝΔΙΑΦΕΡΟΥΝ ΜΕ ΕΝΑ ΚΛΙΚ</h2>
            <hr class="divider light my-4">

            <a class=!-- Search form -->
              <div class="md-form mt-0">
                <input class="form-control" name='search' type="text" placeholder="Search" aria-label="Search" id="search">
                <input type="submit" class="button" name="search" value="insert" />
              </div>
            </a>
          </div>
        </div>
      </div>
    </form>
  </section>

  <!-- Results Section -->
  <section class="page-section" id="results">
    <h2 class="text-center  mt-0"></h2>

    <div class="container">

      <div class="row justify-content-center">

      </div>
      <div class="row">
        <table id="resulttable">
            <tbody>
                
                
            </tbody>
        </table>
        <!-- end result-->


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
            <h3 class="h4 mb-2">Mουσικό Ημερολόγιο</h3>
            <p class="text-muted mb-0">Ενα calendar που συνεχώς ανανεώνεται και σου προσφέρει τα τελευταία μουσικά νέα
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

</body>
</html>
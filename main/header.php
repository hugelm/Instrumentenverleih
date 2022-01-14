<?php include ("main/data.php"); ?>
<?php
echo '   

<!-- import css & js -->
  <!-- style.css -->
  <link rel="stylesheet" href="style.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- Google Maps API -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=geometry&callback" type="text/javascript"></script>
  <!-- Cookies -->
  <script src="scripts/cookies.js"></script>
  <!-- AJAX -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Sweet Alert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<!-- Navigation-Bar -->

<div class="fixed-top">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <div class="col-le-1 p-1 bg-dark">
     <img src="./img/logo.jpg" alt="D&H" class="img-thumbnail bg-dark" width="80" height="80">
    </div>
    <div class="header">
      <a class="navbar-brand fs-3" href="index.php">
      '.$header.'
      </a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

  <!-- naviagtion between pages -->
  <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
    <li class="nav-item">
      <a class="nav-link" aria-current="page" href="index.php">Verleih</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="products.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Instrumente</a>
      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="products.php#pianos"><img src="./img/svg/piano.svg" width="30" height="30"> Pianos</a></li>
        <li><a class="dropdown-item" href="products.php#drums"><img src="./img/svg/drum.svg" width="30" height="30"> Schlagzeuge</a></li>
        <li><a class="dropdown-item" href="products.php#guitars"><img src="./img/svg/guitar.svg" width="30" height="30"> Gitarren</a></li>
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contact.php">Kontakt</a>
    </li>
    <li class="nav-item">
      <form method="post" action="./scripts/logout.php">
        <button type="submit" class="'.$sessionSet[0].'">
          <i class="'.$sessionSet[1].'"></i> 
          '.$sessionSet[2].'
        </button>
      </form>  
    </li>    
    <li class="d-flex align-items-center">
      <a class="icon-link" href="https://de-de.facebook.com/" target=”_blank”>
        <i class="fa fa-facebook fa-lg"></i>  
      </a> 
      <a class="icon-link" href="https://www.instagram.com/" target=”_blank”>
        <i class="fa fa-instagram"></i>  
      </a>
      <a class="icon-link" href="https://www.google.de/search?q=D%26H+Instrumentenverleih" target=”_blank”>
        <i class="fa fa-google"></i>  
      </a>  
      <a class="icon-link" href="https://www.youtube.com/results?search_query=D%26H+Instrumentenverleih" target=”_blank”>
       <i class="fa fa-youtube"></i>  
      </a> 
      <a class="icon-link" href="https://www.google.com/maps/search/D%26H+Instrumentenverleih" target=”_blank”>
       <i class="fa fa-map"></i>  
      </a>
    </li> 
          
  </ul>

  </div>
</div>

</nav>

</div>
';
?>

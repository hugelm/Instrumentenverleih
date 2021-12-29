<?php include ("main/data.php"); ?>
<?php
echo '   
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
      <a class="nav-link dropdown-toggle" href="#rental" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Instrumente
      </a>
      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="#rental/guitar">Gitarren</a></li>
        <li><a class="dropdown-item" href="#rental/drums">Schlagzeuge</a></li>
        <li><a class="dropdown-item" href="#rental/pianos">Pianos</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#rental/bundles">Bundles</a></li>
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
      <a class="icon-link" href="https://www.google.com/maps/search/D%26H+Instrumentenverleih" target=”_blank”>
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

</div>';
?>
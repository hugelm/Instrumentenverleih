<!DOCTYPE html>
<html lang="de">
<head>

   <meta charset="utf-8">
   
   <title>D&H - Verleih</title>
   <link rel="icon" href="./img/logo.jpg"  type="image/x-icon">
 
   <meta name="description" content="Verleih von Musikinstrumenten">
   <meta http-ewuiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <br>

</head>

<body class="bg-dark text-white">

    <!-- Background Image -->
    <div id="intro-example" class="p-5 bg-image" style="background-image: url('img/bg01.jpg');">

    <!-- Navigation-Bar -->
    <?php include ("main/header.php"); ?>

    <!-- Carousel -->
    <br><br><br>

    <div id="carouselInstruments" class="carousel carousel-white slide" data-bs-ride="carousel">

      <div class="carousel-inner text-white">

        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselInstruments" data-bs-slide-to="0" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselInstruments" data-bs-slide-to="1" class="active" aria-current="true" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselInstruments" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-item" data-bs-interval="4000">
          <div class="carousel-caption d-none d-md-block">
            <img src="./img/piano.jpg" class="d-block w-100" alt="...">
            <p></p>
            <h5>Handwerk und Innovation in perfekter Harmonie.</h5>
            <p></p>
            <a href="products.php#pianos"><button type="button" class="btn btn-outline-light btn-lg">Gehe zu Pianos</button></a>
          </div>
        </div>

        <div class="carousel-item active" data-bs-interval="4000">
          <div class="carousel-caption d-none d-md-block">
            <img src="./img/drums.jpg" class="d-block w-100" alt="...">
            <p></p>
            <h5>Dein Schlagzeug ist die beste Medizin.</h5>
            <p></p>
            <a href="products.php#drums"><button type="button" class="btn btn-outline-light btn-lg">Gehe zu Schlagzeugen</button></a>
          </div>
        </div>

        <div class="carousel-item" data-bs-interval="4000">
          <div class="carousel-caption d-none d-md-block">
            <img src="./img/guitar.jpg" class="d-block w-100" alt="...">
            <p></p>
            <h5>Von Heavy Metal bis Western Style ist alles dabei.</h5>
            <p></p>
            <a href="products.php#guitars"><button type="button" class="btn btn-outline-light btn-lg">Gehe zu Gitarren</button></a>
          </div>
        </div>

      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselInstruments" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>

      <button class="carousel-control-next" type="button" data-bs-target="#carouselInstruments" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>

    </div>

    <!-- Footer -->
    <?php include ("main/footer.php"); ?>

</body>

</html>

<!DOCTYPE html>
<html lang="de">
<head>

   <meta charset="utf-8">
   
   <title>D&H - Kontakt</title>
   <link rel="icon" href="./img/logo.jpg"  type="image/x-icon">
          
   <meta name="description" content="Verleih von Musikinstrumenten">
   <meta http-ewuiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <br>

</head>

<body class="bg-dark text-white" onload="getDistance()">

    <!-- Background Image -->
    <div id="intro-example" class="p-5 bg-image" style="background-image: url('img/bg02.jpg');">

    <!-- Navigation-Bar -->
    <?php include ("main/header.php"); ?>
  
    <!-- Contact Form -->
    <div class="container mt-5">

      <section class="my-5">

        <h2 class="h1-responsive font-weight-bold text-center my-5">Du möchstes ein Instrument vorher ausprobieren oder hast weitere Fragen?</h2>
        <p class="text-center w-responsive mx-auto pb-5">Wir sind sowohl vor Ort, telefonisch, als auch per Kontaktformular erreichbar.</p>

        <div class="row">

          <div class="col-lg-5 mb-lg-0 mb-4">

            <form class="row g-3" action="scripts/contact.php" method="POST">
            <div class="card bg-dark text-white">
              <div class="card-body">
                <!-- Header -->
                <div class="form-header blue accent-1">
                  <h3 class="mt-2"><i class="fa fa-envelope"></i> Schreib' uns direkt!</h3>
                </div>
                <p class="dark-grey-text">Wir werden uns innerhalb der nächsten 24 Stunden bei Dir melden.</p>
                <!-- Body -->
                <div class="md-form">
                  <i class="fa fa-user prefix grey-text"></i>
                  <label for="form-name">Name *</label>
                  <input type="text" class="form-control" name="name" id="name" value="<?=$fName?> <?=$lName?>" required>
                </div>
                <div class="md-form">
                  <i class="fa fa-envelope prefix grey-text"></i>
                  <label for="form-email">E-Mail *</label>
                  <input type="email" class="form-control" name="email" id="email" value="<?=$email?>" required>
                </div>
                <div class="md-form">
                  <i class="fa fa-phone prefix grey-text"></i>
                  <label for="form-phone">Telefon</label>
                  <input type="phone" class="form-control" name="phone" id="phone" value="<?=$phone?>">
                </div>
                <div class="md-form">
                  <i class="fa fa-home prefix grey-text"></i>
                  <label for="form-adress">Adresse</label>
                  <input type="phone" class="form-control" name="adress" id="adress" value="<?=$adress?>">
                </div>
                <div class="md-form">
                  <i class="fa fa-tag prefix grey-text"></i>
                  <label for="form-Subject">Thema *</label>
                  <select class="form-select" name="subject" id="subject" aria-label="Default select example" required>
                    <option value="allgemeine Anfrage">allgemeine Anfrage</option>
                    <option value="Fragen zum Instrument">Probetermin</option>
                    <option value="Fragen zum Instrument">Fragen zum Instrument</option>
                    <option value="Reklamation">Reklamation</option>
                    <option value="Karriere">Karriere</option>  
                  </select>
                </div>
                <div class="md-form">
                  <i class="fa fa-commenting-o prefix grey-text"></i>
                  <label for="form-text">Nachricht *</label>
                  <textarea class="form-control md-textarea" name="msg" id="msg" placeholder="..." required rows="5"></textarea>
                </div>
                <br>
                <div class="md-form">
                  <label for="form-text">Wie sollen wir uns bei Dir melden? </label>
                  <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="response" id="responsePhone" autocomplete="off" checked>
                    <label class="btn btn-outline-light" for="responsePhone">per Rückruf</label>
                    <input type="radio" class="btn-check" name="response" id="responseMail" autocomplete="off">
                    <label class="btn btn-outline-light" for="responseMail">per Mail</label>
                  </div>
                  <button type="submit" class="btn btn-outline-info"><i class="fa fa-paper-plane"></i></button>
                </div>
              </div>
            </div>
            </form>

            <!-- Modal Newsletter Submit -->
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal fade" id="submitModal" tabindex="-1" aria-labelledby="submitModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content text-dark">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Du bist dabei!</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Deine Anmeldung zum Newsletter war erfolgreich. Du kannst dich jederzeit abmelden.
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Alles klar</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-7">

            <!--Google Map-->
            <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px">
              <iframe src="https://maps.google.com/maps?q=Windmühlstraße+27,+68165+Mannheim,+Deutschland&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0"
                style="border:0" allowfullscreen></iframe>
            </div>
            <!-- Buttons-->
            <div class="row text-center">
              <div class="col-md-6">
                <a class="btn-floating blue accent-1">
                  <i class="fa fa-map-marker"></i>
                </a>
                <p>Windmühlstraße 27</p>
                <p class="mb-md-0">68165 Mannheim</p>
              </div>
              <div class="col-md-6">
                <a class="btn-floating blue accent-1">
                  <i class="fa fa-phone"></i>
                </a>
                <p>0187 69420</p>
                <p class="mb-md-0">täglich erreichbar</p>
              </div>
              
              <div class="col-md-12 mb-2">
                <p></p>
              </div>

              <div class="col-md-12" id="journey">
                <h4>nur <span class="badge rounded-pill bg-primary" id="distance">wenige km</span> Luftlinie von Dir entfernt!</h4>
              </div>
           

          </div>

        </div>

        <!-- Geolocation Integration -->

        <div class="col-md-12 mb-2">
                <p></p>
        </div>

        <ul class="nav nav-tabs text-white">
          <li class="nav-item-active">
            <a class="nav-link" href="#journey" onclick="calcRoute('DRIVING')">Anfahrt mit dem Auto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#journey" onclick="calcRoute('TRANSIT')">Anfahrt mit dem ÖPNV</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#journey" onclick="calcRoute('BICYCLING')">Anfahrt mit dem Fahrrad</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#journey" onclick="calcRoute('WALKING')">zu Fuß</a>
          </li>
        </ul>
     
        <div id="mapContainer" class="map-container-section"></div>

        <style type="text/css">
        #mapContainer {
          height: 500px;
          width: 100%px;
          border:10px solid #eaeaea;
        }
        </style>

        </div>

      </section>

<script type="text/javascript">

/* Distance Calculation */
function getDistance() {
    navigator.geolocation.getCurrentPosition(
      function(position) {
          var latLngA = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
          var latLngB = new google.maps.LatLng(49.4756676, 8.4859626);
          var distance = google.maps.geometry.spherical.computeDistanceBetween(latLngA, latLngB);
          document.getElementById('distance').innerHTML = (Math.round(distance)/1000).toFixed(2).toString().replace('.', ',') + " km";
      },
      function() {
         swal( "Ihr Standort konnte nicht ermittelt werden.",  "Einige Inhalte der Website werden dadurch möglicherweise nicht korrekt angezeigt. Bitte erlauben sie ggf. die Standortbestimmung oder verwenden sie die aktuellste Version ihres Browsers." ,  "warning" );
      }
    );
}

/* Route Calculation */
function calcRoute(travelM) {

    const directionsService = new google.maps.DirectionsService();
    const directionsRenderer = new google.maps.DirectionsRenderer();
    if (navigator.geolocation) {
        
      navigator.geolocation.getCurrentPosition(function(position){
      var latitude = position.coords.latitude;
      var longitude = position.coords.longitude;
      var coords = new google.maps.LatLng(latitude, longitude);

      var mapOptions = {
          zoom: 15,
          center: coords,
          mapTypeControl: true,
          navigationControlOptions: {
              style: google.maps.NavigationControlStyle.SMALL
          },
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
      map = new google.maps.Map(
              document.getElementById("mapContainer"), mapOptions
            );
      var marker = new google.maps.Marker({
                  position: coords,
                  map: map,
                  title: "Dein aktueller Standort."
      });

      var start = coords;
      var end = "Windmühlstraße 27, 68165 Mannheim";
      var request = {
          origin: start,
          destination: end,
          travelMode: travelM
      };
      directionsService.route(request, function(result, status) {
          if (status == 'OK') {
              directionsRenderer.setDirections(result);
              var totalDistance = 0;
              var totalDuration = 0;
              var legs = result.routes[0].legs
              totalDistance += legs[0].distance.value;
              totalDuration += legs[0].duration.value;
              console.log(totalDistance)
              console.log(totalDuration)
          }
      });
      directionsRenderer.setMap(map);
      });
    }
} 
calcRoute("DRIVING");

</script>

  <!-- footer -->
  <?php include ("main/footer.php"); ?>

</body>

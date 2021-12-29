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
   
   <link rel="stylesheet" href="style.css">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- Icons -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  

   <script src="script.js"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body class="bg-dark text-white" onload="getDistance()">

    <!-- Navigation-Bar -->
    <?php include ("main/header.php"); ?>
  
    <!-- Contact Form -->

    <div class="container mt-5">

      <section class="my-5">

        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold text-center my-5">Du hast eine Frage?</h2>
        <!-- Section description -->
        <p class="text-center w-responsive mx-auto pb-5">Wir sind sowohl vor Ort, telefonisch, als auch per Kontaktformular erreichbar.</p>

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-lg-5 mb-lg-0 mb-4">

            <!-- Form with header -->
            <form class="row g-3" action="scripts/contact_submit.php" method="POST">
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
                  <input type="text" class="form-control" name="name" id="name" value="<?=$name?>" required>
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
                    <option value="1">allgemeine Anfrage</option>
                    <option value="2">Fragen zum Instrument</option>
                    <option value="3">Reklamation</option>  
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
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                    <label class="btn btn-outline-light" for="btnradio1">per Rückruf</label>
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                    <label class="btn btn-outline-light" for="btnradio2">per Mail</label>
                  </div>
                  <button type="submit" class="btn btn-outline-info"><i class="fa fa-paper-plane"></i></button>
                </div>
              </div>
            </div>
            </form>
            <!-- Form with header -->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-7">

            <!--Google map-->
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

              <script type="text/javascript">
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
              </script>

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
                    title: "Your current location!"
            });
            
            




    // get User location
    new google.maps.Geocoder().geocode({'latLng' : coords}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
        if (results[1]) {
            var country = null, countryCode = null, city = null, cityAlt = null;
            var c, lc, component;
            for (var r = 0, rl = results.length; r < rl; r += 1) {
                var result = results[r];

                if (!city && result.types[0] === 'locality') {
                    for (c = 0, lc = result.address_components.length; c < lc; c += 1) {
                        component = result.address_components[c];

                        if (component.types[0] === 'locality') {
                            city = component.long_name;
                            break;
                        }
                    }
                }
                else if (!city && !cityAlt && result.types[0] === 'administrative_area_level_1') {
                    for (c = 0, lc = result.address_components.length; c < lc; c += 1) {
                        component = result.address_components[c];

                        if (component.types[0] === 'administrative_area_level_1') {
                            cityAlt = component.long_name;
                            break;
                        }
                    }
                } else if (!country && result.types[0] === 'country') {
                    country = result.address_components[0].long_name;
                    countryCode = result.address_components[0].short_name;
                }

                if (city && country) {
                    break;
                }
            }

            console.log("City: " + city + ", City2: " + cityAlt + ", Country: " + country + ", Country Code: " + countryCode);
        }
    }
});
  


//calcRoute("DRIVING");
//directionsRenderer.setMap(map);

  




 
        });



    }else {
        alert("Geolocation API is not supported in your browser.");
    }
    
</script>



  <?php include ("main/footer.php"); ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- Google Maps API -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxHxo8Xz4-ja9767Zw7_rwedFkPHTBSS4&libraries=geometry&callback" 
type="text/javascript"></script>




</body>

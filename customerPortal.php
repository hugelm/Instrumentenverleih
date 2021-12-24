<!DOCTYPE html>
<html lang="de">
<head>

   <meta charset="utf-8">
   
   <title>D&H - Kundenportal</title>
   <link rel="icon" href="./img/logo.jpg"  type="image/x-icon">
          
   <meta name="description" content="Verleih von Musikinstrumenten">
   <meta http-ewuiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <br>
   
   <!-- import style.css -->
   <link rel="stylesheet" href="style.css">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- Icons -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  

</head>

<body class="bg-dark text-white">

    <!-- Navigation-Bar -->
    <?php include ("main/header.php"); ?>

    <!-- Login Section -->

    <!-- Skript für Sweet Alert -> ausgelagert in register.php -> kann wenn alles läuft gelöscht werden -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
        $(function(){  
            $('#login').click(function(){
                var valid = this.form.checkValidity();
                if(valid){
                    var email = $('#email');
                    var pwd = $('#pwd');
                    swal('Willkommen zurück!', 'Sie wurden erfolgreich eingeloggt.', 'success');
                }
            });
            $('#register').click(function(e){

                var valid = this.form.checkValidity();
                if(valid){

                var fName = $('#firstName').val();
                var lName = $('#lastName').val();
                var birth = $('#birth').val();
                var street = $('#street').val();
                var housenumber = $('#number').val();
                var zipCode = $('#zipCode').val();
                var city = $('#city').val();
                var phone = $('#phone').val();
                var email = $('#email').val();
                var pwd = $('#pwd').val();
                    
                    e.preventDefault();

                    $.ajax({
                        type: 'POST',
                        url: 'scripts/register.php',
                        data: {fName: fName, lName: lName, birth: birth, street: street, housenumber: housenumber, zipCode: zipCode, city: city, phone: phone, email: email, pwd: pwd},
                        success: function(data){
                            swal( "Herzlich Willkommen " + fName + "!",  "Deine Registrierung war erfolgreich." ,  "success" );
                        },
                        error: function(data){
                            swal( "Registrierung fehlgeschlagen!" ,  "Bitte kontaktieren Sie unseren Support." ,  "error" );
                        }

                    });


                }
            });
        });
    </script>
    


    <br>

    <section class="h-100 gradient-form" style="background-color: #252525;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
            <div class="card rounded-3 text-white" style="background-color: #000;">
            <div class="row g-0">
                <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">

                    <div class="text-center">
                    <img src="./img/logo.jpg" style="width: 185px;" alt="logo">
                    <h4 class="mt-1 mb-5 pb-1">Instrumentenverleih</h4>
                    </div>

                    <form action="scripts/login.php" method="POST">
                    <h3>Anmelden</h3>
                    <br>

                    <div class="form-outline mb-4">
                        <input type="email" name="email" id="email" class="form-control" required/>
                        <label class="form-label" for="email">E-Mail</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="password" name="pwd" id="pwd" class="form-control" placeholder="****" required/>
                        <label class="form-label" for="pwd">Passwort</label>
                    </div>

                    <div class="text-center pt-1 mb-5 pb-1">
                        <button class="btn btn-lg btn-primary btn-block fa-lg gradient-custom mb-3" type="submit" id="login">Einloggen</button><br>
                        <a class="text-muted" href="#!">Passwort vergessen?</a>
                    </div>

                    <div class="text-center pt-1 mb-6 pb-1">
                    <a href="https://accounts.google.com"><button class="btn  btn-block btn-primary" style="background-color: #dd4b39;" type="button"><i class="fa fa-google me-2"></i> mit Google einloggen</button> </a>
                    </div>

                    <div class="text-center pt-1 mb-5 pb-1">
                    <a href="https://www.facebook.com"><button class="btn btn-block btn-primary" style="background-color: #3b5998;" type="button"><i class="fa fa-facebook-f me-2"></i>mit Facebook einloggen</button></a>
                    </div>

                    <div class="d-flex align-items-center justify-content-center pb-4">
                        <p class="mb-2 me-2">Noch keinen Account?</p>
                    </div>

                    </form>

                </div>
                </div>


                <div class="col-lg-6 gradient-custom">
                <div class="card-body p-md-5 mx-md-4">
               
                <form action="scripts/register.php" method="POST">
                    <h3>Registrieren</h3>
                    <br>

                    <div class="row">
                    <div class="col-md-6 mb-6 pb-2">

                    <div class="form-outline">
                        <input type="text" id="firstName" class="form-control form-control-lg" required/>
                        <i class="fa fa-user"></i>
                        <label class="form-label" for="street">Vorname *</label>
                    </div>

                    </div>
                    <div class="col-md-6 mb-6 pb-2">

                    <div class="form-outline">
                        <input type="text" id="lastName" class="form-control form-control-lg" required/>
                        <i class="fa fa-user"></i>
                        <label class="form-label" for="number">Nachname *</label>
                    </div>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-md-7 mb-6 d-flex align-items-center">

                    <div class="form-outline datepicker w-100">
                        <input type="date" class="form-control form-control-lg" id="birth" required/>
                        <i class="fa fa-calendar"></i>
                        <label for="birthdayDate" class="form-label">Geburtsdatum *</label>
                    </div>

                    </div>
                    <div class="col-md-5 mb-6">

                    <h6 class="mb-0 pb-10"></h6>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="genderF"/>
                        <label class="form-check-label" for="genderF">Weiblich</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="genderM"/>
                        <label class="form-check-label" for="genderF">Männlich</label>
                    </div>
                                
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-md-8 mb-6 pb-2">

                    <div class="form-outline">
                        <input type="text" id="street" class="form-control form-control-lg" required/>
                        <i class="fa fa-map"></i>
                        <label class="form-label" for="street">Straße *</label>
                    </div>

                    </div>
                    <div class="col-md-4 mb-6 pb-2">

                    <div class="form-outline">
                        <input type="text" id="number" class="form-control form-control-lg" required/>
                        <i class="fa fa-home"></i>
                        <label class="form-label" for="number">Hausnr. *</label>
                    </div>

                    </div>
                    </div>
    
                    <div class="row">
                    <div class="col-md-4 mb-6 pb-2">

                    <div class="form-outline">
                        <input type="text" id="zipCode" class="form-control form-control-lg" required/>
                        <i class="fa fa-globe"></i>
                        <label class="form-label" for="zipCode">Postleitzahl *</label>
                    </div>
                    </div>
                    <div class="col-md-8 mb-6 pb-2">
                    <div class="form-outline">
                        <input type="text" id="city" class="form-control form-control-lg" required/>
                        <i class="fa fa-map-marker"></i>
                        <label class="form-label" for="city">Ort *</label>
                    </div>
                    </div>
                    </div>                 
                    <div class="form-outline mb-6">
                        <input type="tel" id="phone" class="form-control" />
                        <i class="fa fa-phone"></i>
                        <label class="form-label" for="phoneNumber">Telefonnummer</label>
                    </div>
                   
                    <div class="form-outline mb-6">
                        <input type="email" id="email" class="form-control" required/>
                        <i class="fa fa-envelope"></i>
                        <label class="form-label" for="email">E-Mail *</label>
                    </div>
                    <div class="form-outline mb-6">
                        <input type="password" id="pwd" class="form-control " required/>
                        <i class="fa fa-lock"></i>
                        <label class="form-label" for="pwd">Passwort *</label>
                    </div>
                    <div class="form-outline mb-2">
                        <input type="password" id="pwd" class="form-control" required/>
                        <i class="fa fa-lock"></i>
                        <label class="form-label" for="pwd">Passwort wiederholen *</label>
                    </div>
                    <div class="form-outline mb-3">
                        <input class="form-check-input me-2" type="checkbox" value="" id="tos" required/>
                        <label class="form-check-label" for="tos">Ich habe die <a href="https://i1.wp.com/atlassianblog.wpengine.com/wp-content/uploads/2017/12/44-incredible-404-error-pages@3x.png?resize=1560%2C760&ssl=1">AGBs</a> gelesen und akzeptiere diese.</label>
                    </div>
                    <div class="d-flex align-items-center justify-content-center pb-4">
                        <button class="btn btn-lg btn-block btn-dark" style="background-color: #000000;" type="submit" id="register">Jetzt registrieren - und Vorteile sichern!</button>
                    </div>


                </form>
                </div>
                </div>


            </div>
            </div>
        </div>
        </div>
    </div>
    </section>

    <!-- Geolocation Integration -->

    <style type="text/css">
#mapContainer {
    height: 500px;
    width: 800px;
    border:10px solid #eaeaea;
}
</style>

<script src="http://maps.google.com/maps/api/js?sensor=false">
</script>

<!--
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHqgK27rLZ-mWuh2Ha1wPCkMGVs0MDoQI&callback=initMap">
    </script>-->

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
            
            latlng = new google.maps.LatLng(40.730885, -73.997383); 
    new google.maps.Geocoder().geocode({'latLng' : latlng}, function(results, status) {
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
  
/*
 
            var directionsService = new google.maps.DirectionsService();
  var end = new google.maps.LatLng(49.476387, 8.481109);
  var request = {
    origin: coords,
    destination: end,
    travelMode: 'DRIVING'
  }

  directionsService.route(request, function(response, status) {
    if (status == 'OK') {
      directionsDisplay.setDirections(response);
    } else {
      alert("directions request failed, status=" + status)
    }
  });

  */




 
        });



    }else {
        alert("Geolocation API is not supported in your browser.");
    }
</script>

<div id="mapContainer"></div>

    <!-- footer -->
    <?php include ("main/footer.php"); ?>

</body>

</html>
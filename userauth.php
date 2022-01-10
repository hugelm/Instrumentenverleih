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

</head>

<body class="bg-dark text-white">

    <!-- Background Image -->
    <div id="intro-example" class="p-5 bg-image" style="background-image: url('img/bg03.jpg');">

    <!-- Navigation-Bar -->
    <?php include ("main/header.php"); ?>
    
    <br>

    <section class="h-100 gradient-form" style="background-color: #252525;">
    
            <div class="card rounded-3 text-white" style="background-color: #252525;">
            <div class="row g-0">

                <!-- Login Section -->
                <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">

                    <div class="text-center">
                    <img src="./img/logo.jpg" style="width: 185px;" alt="logo">
                    <h4 class="mt-1 mb-5 pb-1">Instrumentenverleih</h4>
                    </div>

                    <form>
                    <h3>Anmelden</h3>
                    <br>

                    <div class="form-outline mb-4">
                        <input type="email" id="emailLogin" name="login_email" class="form-control" required autofocus/>
                        <i class="fa fa-envelope"></i>
                        <label class="form-label" for="emailLogin">E-Mail</label>
                    </div>

                    <div class="form-outline mb-4">
             
                        <input type="password" id="pwdLogin" name="login_pwd"class="form-control" placeholder="****" required/>
                        <i class="fa fa-lock"></i>
                        <label class="form-label" for="pwdLogin">Passwort</label>
                    </div>

                    <div class="text-center pt-1 mb-5 pb-1">
                        <button class="btn btn-lg btn-primary btn-block fa-lg gradient-custom mb-3" type="submit" id="login">Einloggen</button><br>                      
                        <a class="text-muted" id="forgotPwd">Passwort vergessen?</a>
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

                <!-- Register Section -->
                <div class="col-lg-6 gradient-custom">
                <div class="card-body p-md-5 mx-md-4">
               
                <form>
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

                    <div class="col-md-4 mb-6">
                    <h6 class="mb-0 pb-10"></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="genderF"/>
                        <label class="form-check-label" for="genderF">Frau</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="genderM"/>
                        <label class="form-check-label" for="genderF">Herr</label>
                    </div>         
                    </div>

                    <div class="col-md-8 mb-6 d-flex align-items-center">
                    <div class="form-outline datepicker w-100">
                        <input type="date" class="form-control form-control-lg" id="birth"/>
                        <i class="fa fa-calendar"></i>
                        <label for="birthdayDate" class="form-label">Geburtsdatum</label>
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
                        <input type="tel" id="phone" class="form-control"/>
                        <i class="fa fa-phone"></i>
                        <label class="form-label" for="phoneNumber">Telefonnummer</label>
                    </div>

                    <div class="form-outline mb-6">
                        <input type="email" id="email" class="form-control" onkeyup="emailIsTaken(this.value)" autocomplete="off" required/>
                        <i class="fa fa-envelope"></i>
                        <label class="form-label" for="email" id="emailIsTaken">E-Mail *</label>
                    </div>

                    <div class="form-outline mb-6">
                        <input type="password" id="pwd" class="form-control " pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                            title="Das Passwort muss aus einer Zahl, Groß- sowie Kleinbuchstaben und mindestens 8 Zeichen bestehen." autocomplete="new-password" required/>
                        <i class="fa fa-lock"></i>
                        <label class="form-label" for="pwd">Passwort *</label>
                    </div>

                    <div class="form-outline mb-2">
                        <input type="password" id="pwd_rep" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" onkeyup="pwdIsEqual(this.value)"
                            title="Das Passwort muss aus einer Zahl, Groß- sowie Kleinbuchstaben und mindestens 8 Zeichen bestehen." autocomplete="new-password" required/>
                        <i class="fa fa-lock"></i>
                        <label class="form-label" for="pwd_rep" id="pwdIsEqual">Passwort wiederholen *</label>
                    </div>

                    <div class="form-outline mb-3">
                        <input class="form-check-input me-2" type="checkbox" value="" id="tos" required/>
                        <label class="form-check-label" for="tos">Ich habe die <a href="error/404.php">AGBs</a> gelesen und akzeptiere diese.</label>
                    </div>

                    <div class="d-flex align-items-center justify-content-center pb-4">
                        <button class="btn btn-lg btn-block btn-dark" style="background-color: #000000;" type="submit" id="register">Jetzt registrieren - und Vorteile sichern!</button>
                    </div>

                </form>
                </div>
                </div>

            </div>     
            </div>
    </section>

<script type="text/javascript">

$(function(){
// login & register button

    $('#login').click(function(e){

        var valid = this.form.checkValidity();
        if(valid){

        var login_email = $('#emailLogin');
        var login_pwd = $('#pwdLogin');

            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'scripts/login.php',
                data: {login_email: login_email.val(), login_pwd: login_pwd.val()},
                success: function(data){
                    if($.trim(data) === "user found"){
                        swal( "Willkommen zurück!",  "Du wurdest erfolgreich eingeloggt." ,  "success" );
                        setTimeout('window.location.href = "index.php"', 2000);
                    } else if($.trim(data) === "no user found"){
                        swal( "Ooops",  "Dein/e E-Mail / Passwort ist falsch. Bitte versuche es erneut." ,  "warning" );
                    } else {
                        swal( "Login fehlgeschlagen!",  "Bitte versuche es später erneut." ,  "error" );
                    }
                },
                error: function(data){
                    swal(  "Login fehlgeschlagen!" ,  "Bitte versuche es später erneut." ,  "error" );
                }
            });  
        }
    });

    $('#register').click(function(e){

        console.log(document.getElementById('birth').value)

        var valid = this.form.checkValidity();
        if(valid){

            // save form data in variables
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
            var pwdR = $('#pwd_rep').val();
            if (document.getElementById('birth').value = ""){
                var birth = null;
            }
            if (document.getElementById('genderM').checked){
                var gender = "M";
            } else if (document.getElementById('genderF').checked){
                var gender = "F";
            } else {
                var gender = "-";
            }
            
            if ($('#pwd').val() == $('#pwd_rep').val()){
            // 1. condition: are password and password repetition equal?
            if (document.getElementById("emailIsTaken").innerHTML == "E-Mail verfügbar."){
            // 2. condition: does the email account exit in database?
                    e.preventDefault();
                    $.ajax({
                        type: 'POST',
                        url: 'scripts/register.php',
                        data: {gender: gender, fName: fName, lName: lName, birth: birth, street: street, housenumber: housenumber, zipCode: zipCode, city: city, phone: phone, email: email, pwd: pwd},
                        success: function(data){
                            swal( "Herzlich Willkommen, " + fName + "!",  "Deine Registrierung war erfolgreich." ,  "success" );
                            setTimeout('window.location.href = "userauth.php"', 2000);
                        },
                        error: function(data){
                            swal( "Registrierung fehlgeschlagen!" ,  "Bitte versuche es später erneut." ,  "error" );
                        }
                    });
            } else {
                // 2. conditon: exception
                e.preventDefault();
                swal( "Ooops",  "Ein Konto mit dieser E-Mail-Adresse existiert bereits." ,  "warning" );
            }
            } else {
                    // 1. conditon: exception
                e.preventDefault();
                swal( "Ooops",  "Deine Passwörter stimmen nicht überein." ,  "warning" );
            }
        };      
    });

    $('#forgotPwd').click(function(e){
        swal(  'Passwort vergessen?', 'Bitte wende Dich in diesem Fall per Formular, Telefon oder direkt persönlich bei uns. Wir helfen Dir gerne weiter.', 'error')
    });

});

function emailIsTaken(email){
// check is email is already saved in database
    if (window.XMLHttpRequest)
    {
    /// AJAX with mit IE7+, Chrome, Firefox, Safari, Opera
    xmlhttp=new XMLHttpRequest();
    }
    else
    {
    /// AJAX with IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function(){
        if (xmlhttp.readyState==4 && xmlhttp.status==200){
            document.getElementById("emailIsTaken").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","scripts/isEmailTaken.php?query="+email,true);
    xmlhttp.send();
}

function pwdIsEqual(pwdR){
// checks if both passwords are equal
    if (pwdR==document.getElementById("pwd").value){
        document.getElementById("pwdIsEqual").innerHTML="Die Passwörter stimmen überein.";
    } else {
        document.getElementById("pwdIsEqual").innerHTML="Die Passwörter stimmen nicht überein!";
    }
    return;
}

if (navigator.geolocation && !(getCookie("dataLocation"))) {
// get user location if it is not saved as a cookie
    console.log("detect user location...")
    navigator.geolocation.getCurrentPosition(function(position){
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;
        var coords = new google.maps.LatLng(latitude, longitude);
                
        // use geocoder to get address
        var google_maps_geocoder = new google.maps.Geocoder();
        google_maps_geocoder.geocode(
            { 'latLng': coords },
            function( results, status ) {
                if ( status == google.maps.GeocoderStatus.OK && results[0] ) {
                    //console.log( results[0].formatted_address );
                    //console.log( results[1].formatted_address );
                    //console.log( results[2].formatted_address );
                    //console.log(results[0].address_components[0]);
                    //console.log(results[0].address_components[1]);
                    //console.log(results[0].address_components[2]);
                    document.getElementById("number").value=results[0].address_components[0].long_name;
                    document.getElementById("street").value=results[0].address_components[1].long_name;
                    document.getElementById("city").value=results[0].address_components[3].long_name;
                    if(navigator.cookieEnabled && getCookie("acceptCookies")){
                        setCookie("userStreet", results[0].address_components[1].long_name, 14)
                        setCookie("userHousenumber", results[0].address_components[0].long_name, 14)
                        setCookie("userCity", results[0].address_components[3].long_name, 14)
                        setCookie("dataLocation", true, 14)
                    };
                }
            }
        );
    });
} else {
    document.getElementById("street").value=getCookie("userStreet");
    document.getElementById("number").value=getCookie("userHousenumber");
    document.getElementById("city").value=getCookie("userCity");
};

</script>

    <!-- Footer -->
    <?php include ("main/footer.php"); ?>

</body>

</html>
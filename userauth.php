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

    <!-- Skript für Sweet Alert -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(function(){  

            $(document).on('click','#login',function(e){

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
                var pwdR = $('#pwd_rep').val();

                if (pwd == pwdR){
                    alert("Passwörter stimmen überein [tbd]");
                    e.preventDefault();

                    $.ajax({
                        type: 'POST',
                        url: 'scripts/register.php',
                        data: {fName: fName, lName: lName, birth: birth, street: street, housenumber: housenumber, zipCode: zipCode, city: city, phone: phone, email: email, pwd: pwd},
                        success: function(data){
                            swal( "Herzlich Willkommen, " + fName + "!",  "Deine Registrierung war erfolgreich." ,  "success" );
                        },
                        error: function(data){
                            swal( "Registrierung fehlgeschlagen!" ,  "Bitte kontaktieren Sie unseren Support." ,  "error" );
                        }
                    });
                } else {
                    alert("Passwörter stimmen nicht überein [tbd]");
                    swal( "Ooops",  "Deine Passwörter stimmen nicht überein." ,  "warning" );
                }

                }
            });

            $('#forgotPwd').click(function(e){
                swal(  'Passwort vergessen?', 'Bitte wende Dich in diesem Fall per Formular, Telefon oder direkt persönlich bei uns. Wir helfen Dir gerne weiter.', 'error')
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

                    <form>
                    <!-- <form action="scripts/login.php" method="POST"> ersetzt durch ajax-->
                    <h3>Anmelden</h3>
                    <br>

                    <div class="form-outline mb-4">
                        <input type="email" id="emailLogin" name="login_email" class="form-control" required autofocus/>
                        <label class="form-label" for="emailLogin">E-Mail</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="password" id="pwdLogin" name="login_pwd"class="form-control" placeholder="****" required/>
                        <label class="form-label" for="pwdLogin">Passwort</label>
                    </div>

                    <div class="text-center pt-1 mb-5 pb-1">
                        <button class="btn btn-lg btn-primary btn-block fa-lg gradient-custom mb-3" type="submit" id="login">Einloggen</button><br>                      
                        <a class="text-muted" href="#!" id="forgotPwd">Passwort vergessen?</a>
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
                    <script>
                    function emailIsTaken(email){
                        // check is email is already saved in database
                        if (window.XMLHttpRequest)
                        {
                        // AJAX nutzen mit IE7+, Chrome, Firefox, Safari, Opera
                        xmlhttp=new XMLHttpRequest();
                        }
                        else
                        {
                        // AJAX mit IE6, IE5
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
                    </script>
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

    <!-- footer -->
    <?php include ("main/footer.php"); ?>

</body>

</html>
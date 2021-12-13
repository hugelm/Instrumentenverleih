<!DOCTYPE html>
<html lang="de">
<head>

   <meta charset="utf-8">
   
   <title>PornHub</title>
   <link rel = "icon" href = "https://venturebeat.com/wp-content/uploads/2017/03/pornhub_logo.jpg?w=750&strip=all" type = "image/x-icon">
          
   <meta name="description" content="Verleih von Musikinstrumenten">
   <meta http-ewuiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <br>
   
   <link rel="stylesheet" href="style.css">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- Icons -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  



</head>

<body class="bg-dark text-white">

    <!-- Navigation-Bar -->
    <?php include ("main/header.php"); ?>

    <!-- Login Modal -->
    <div id="login" class="modal">
      <span onclick="document.getElementById('login').style.display='none'"class="close" title="Close Modal">&times;</span>

    <!-- Login Modal Content -->
    <form class="modal-content animate" action="/action_page.php">

      <div class="container">
        <label for="uname"><b>Benutzername</b></label>
        <input type="text" placeholder="..." name="uname" required>

        <label for="psw"><b>Passwort</b></label>
        <input type="password" placeholder="***" name="psw" required>

      <button type="submit">Einloggen</button>
      <label>
          <input type="checkbox" checked="checked" name="remember"> Eingeloggt bleiben
      </label>
      </div>

      <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('login').style.display='none'" class="cancelbtn">Abbrechen</button>
          <span class="psw"><a href="#forgotpsw">Passwort vergessen?</a></span>
      </div>
     </form>
    </div> 
  
    <!-- Contact Form -->

    <div class="container mt-5">
      <h1>Kontaktformular</h1>
      <form class="row g-3" action="scripts/contact_submit.php" method="POST">
        <!-- Honeypot -->
        <input type="text" name="_honey" style="display: none;">

        <!-- Disable Captcha -->
        <input type="hidden" name="_captcha" value="false">

        <input type="hidden" name="_next" value="https://haydn5.github.io/formsubmitdemo/success.html" >

        <div class="col-md-8">
          <label for="name" class="form-label">Name *</label>
          <input type="text" class="form-control" name="name" id="name" required>
        </div>
        <div class="col-md-4">
          <label for="date" class="form-label">Geburtstag</label>
          <input type="date" class="form-control" name="date" id="date">
        </div>
        <div class="col-md-8">
          <label for="emailInfo" class="form-label">E-Mail *</label>
          <input type="email" class="form-control" name="email" id="emailInfo" required>
        </div>
        <div class="col-md-4">
          <label for="phoneNumber" class="form-label">Telefon</label>
          <input type="text" class="form-control" name="phone" id="phoneNumber" placeholder="0160 18742069">
        </div>
        <div class="col-md-12">
          <label for="comments" class="form-label">Nachricht *</label>
          <textarea class="form-control" id="comments" name="message" rows="3" required></textarea>
        </div>
        <div class="col-md-6">
          <input type="hidden" name="MAX_FILE_SIZE" value="100" />Anhang:<br>   
          <input name="file" type="file" /><br>
        </div>
        <div class="col-md-6">
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"/>
            <label class="form-check-label" for="flexSwitchCheckChecked">Ich bin bereits Kunde.</label>
             <br>
          </div>
        </div>
        <div class="col-md-6">
          <label>Wie möchten Sie von uns kontaktiert werden?</label> <br />
          <input type="radio" name="responseflag" value="mail" /> per Mail <br />
          <input type="radio" name="responseflag" value="phone" /> per Telefon <br />
          <br>
        </div>
        <div class="col-md-6">
          <label>Haben Sie Probleme mit einem bei uns ausgeliehenen Instrument?</label> <br />
          <input type="radio" name="emergencyflag" value="true" /> ja <br />
          <input type="radio" name="emergencyflag" value="false" /> nein <br />
          <br>
        </div>
        <div class="col-md-4">
          <button type="reset" class="btn btn-primary">Inhalt löschen</button>
        </div>
        <div class="col-md-8">
          <button type="submit" class="btn btn-primary">Absenden</button>
        </div>
      </form>
  </div>

  <?php include ("main/footer.php"); ?>

    <style>
        textarea {
          width: 100%;
          height: 200px;
        }
      </style>

<script src="script.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>





</body>

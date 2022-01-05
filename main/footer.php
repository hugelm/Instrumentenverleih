<?php
echo '

<!-- Footer -->
<div class="container my-5">

<div class="container p-5 pb-0 align-items-center">
<form action="./scripts/newsletter.php" method="POST">

  <div class="row">

    <div class="col-auto mb-4 mb-md-0">
      <p class="pt-2">
        <strong>Nie mehr die besten Angebote verpassen? Jetzt für unseren Newsletter anmelden! </strong>
      </p>
    </div>
    <div class="col-md-4 col-12 mb-4 mb-md-0">
    <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="email" name="newslettermail" class="form-control" placeholder="max.mustermann@gmail.com" value="'.$email.'" required/>
      </div>
    </div>
    <div class="col-auto mb-4 mb-md-0">
    <!-- Submit button -->
    <button type="submit" class="btn btn-primary mb-4">
      Anmelden
    </button>
    </div>

  </div>

</form>

<!-- Cookies-Advice (https://github.com/Wruczek/Bootstrap-Cookie-Alert) -->

<div class="alert alert-dark alert-dismissible fade text-center cookiealert" role="alert">
  <b>Magst du Cookies?</b> &#x1F36A; Wir verwenden Cookies, um Dir das beste Erlebnis auf unserer Website zu bieten.
  <button type="button" class="btn btn-primary btn-sm acceptcookies"><b> Lecker! </b></button>
  <a href="https://cookiesandyou.com/" target="_blank"> Was sind Cookies? </a>
</div>
<script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>

<footer class="text-white text-center text-lg-start" style="background-color: #23242a;">
  <div class="container p-4">
    <div class="row mt-4">

      <!--About-->
      <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-4">Über D&H</h5>

        <p>
          At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
          voluptatum deleniti atque corrupti.
        </p>

        <p>
          Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas
          molestias.
        </p>

      </div>

      <!--Contact-->
      <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-4 pb-1">Kontakt</h5>

        <ul class="fa-ul" style="margin-left: 1.65em;">
          <li class="mb-3">
            <span class="fa-li"><i class="fa fa-home"></i></span><span class="ms-2">Windmühlstraße 27, 68165 Mannheim</span>
          </li>
          <li class="mb-3">
            <span class="fa-li"><i class="fa fa-envelope"></i></span><span class="ms-2">dhverleih@byom.de</span>
          </li>
          <li class="mb-3">
            <span class="fa-li"><i class="fa fa-phone"></i></span><span class="ms-2">0187 69420</span>
          </li>
        </ul>

        <!-- Social Media Support -->
        <a class="btn btn-outline-light btn-floating m-1"  href="https://de-de.facebook.com/" role="button" target=”_blank”
          ><i class="fa fa-facebook-f"></i
        ></a>
        <a class="btn btn-outline-light btn-floating m-1"  href="https://twitter.com/" role="button" target=”_blank”
          ><i class="fa fa-twitter"></i
        ></a>
        <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/" role="button" target=”_blank”
          ><i class="fa fa-instagram"></i
        ></a>
        <a class="btn btn-outline-light btn-floating m-1" href="https://de.linkedin.com/" role="button" target=”_blank”
          ><i class="fa fa-linkedin"></i
        ></a>
        <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/majushgl/Web---Instrumentenverleih" role="button" target=”_blank”
        ><i class="fa fa-github"></i
      ></a>

      </div>

      <!--Opening hours-->
      <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-4">Öffnungszeiten</h5>

        <table class="table text-center text-white">
          <tbody class="font-weight-normal">
            <tr>
              <td>Montag - Donnerstag:</td>
              <td>09:00 - 19:00 Uhr</td>
            </tr>
            <tr>
              <td>Freitag:</td>
              <td>09:00 - 17:00 Uhr</td>
            </tr>
            <tr>
              <td>Samstag:</td>
              <td>10:00 - 16:00 Uhr</td>
            </tr>
            <tr>
              <td>Sonntag:</td>
              <td>12:00 - 16:00 Uhr</td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>   
  </div>

  <!-- "Copyright" -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-white" href="error/404.php">D&H Instrumentenverleih</a>
  </div>

</footer>

</div>
';
?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php

session_start();
if (isset($_SESSION['userlogin'])) {
// if user logged in, end session

    unset($_SESSION['userlogin']);
    session_destroy();
    /*
    echo'
    <script> 
    setTimeout(function() {
        swal({
            title: "Abmeldung erfolgreich!",
            text: "Bis zum nächsten Mal.",
            type: "success"
        });
    }, 100);
    setTimeout(function() {
        window.location.href = "../userauth.php" ;
    }, 2000);
    </script>
    ';
    */
}
echo '<script> window.location.href = "../userauth.php" ; </script>';

?>

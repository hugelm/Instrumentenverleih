<?php

session_start();

if (isset($_SESSION['userlogin'])) {
// if user logged in, end session
    unset($_SESSION['userlogin']);
    session_destroy();    
}
echo '<script> window.location.href = "../userauth.php" ; </script>';

?>

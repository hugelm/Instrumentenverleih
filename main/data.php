<?php

session_start();
if (isset($_SESSION['userlogin'])) {
    $header = "Hi, " . $_SESSION['userlogin']['firstName'] . "!";
    $name = $_SESSION['userlogin']['firstName']." ".$_SESSION['userlogin']['lastName'];
    $email = $_SESSION['userlogin']['email'];
    $birth = $_SESSION['userlogin']['birth'];
    $phone = $_SESSION['userlogin']['phone'];
    $adress = $_SESSION['userlogin']['street']." ".$_SESSION['userlogin']['housenumber']." (".$_SESSION['userlogin']['zipcode'].", ".$_SESSION['userlogin']['city'].")";
    $sessionSet = array("btn btn-outline-danger", "fa fa-power-off", "Abmelden");
} else {
    $header = "Instrumentenverleih";
    $name = "";
    $email = "";
    $birth = "";
    $phone = "";
    $adress = "";
    $sessionSet = array("btn btn-success", "fa fa-lock", "Anmelden");
}
?>
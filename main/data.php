<?php

session_start();
if (isset($_SESSION['userlogin'])) {
    $header = "Hi, " . $_SESSION['userlogin']['firstName'] . "!";
    $fName = $_SESSION['userlogin']['firstName'];
    $lName = $_SESSION['userlogin']['lastName'];
    $email = $_SESSION['userlogin']['email'];
    $birth = $_SESSION['userlogin']['birth'];
    $phone = $_SESSION['userlogin']['phone'];
    $street = $_SESSION['userlogin']['street'];
    $number = $_SESSION['userlogin']['housenumber'];
    $zipCode = $_SESSION['userlogin']['zipcode'];
    $city = $_SESSION['userlogin']['city'];
    $adress = $_SESSION['userlogin']['street']." ".$_SESSION['userlogin']['housenumber']." (".$_SESSION['userlogin']['zipcode'].", ".$_SESSION['userlogin']['city'].")";
    $sessionSet = array("btn btn-outline-danger", "fa fa-power-off", "Abmelden");
} else {
    $header = "Instrumentenverleih";
    $fName = "";
    $lName = "";
    $email = "";
    $birth = "";
    $phone = "";
    $street = "";
    $number = "";
    $zipCode = "";
    $city = "";
    $adress = "";
    $sessionSet = array("btn btn-success", "fa fa-lock", "Anmelden");
}
?>
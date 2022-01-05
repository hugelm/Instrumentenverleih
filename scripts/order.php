<?php

require_once("config.php");

if(isset($_POST)){

    // data from ajax post; [!] not from HTML5 form
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    
    $street = $_POST['street'];
    
    $housenumber = $_POST['housenumber'];
    
    $zipCode = $_POST['zipCode'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    
    $ccHolder = $_POST['ccHolder'];
    $ccNumber = $_POST['ccNumber'];
    $ccExpire = $_POST['ccExpire'];
    $ccCVV = $_POST['ccCVV'];

    $instrument = $_POST['instrument'];

    $sql = "INSERT INTO orderinstruments (firstName, lastName, street, housenumber, zipcode, city, phone, email, ccHolder, ccNumber, ccExpire, ccCVV, instrument) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $insert = $db->prepare($sql);
    $res = $insert->execute([$fName, $lName, $street, $housenumber, $zipCode, $city, $phone, $email, $ccHolder, $ccNumber, $ccExpire, $ccCVV, $instrument]);
    if($res){
        echo 'data successfully saved';
    } else {
        echo 'error while saving data';
    }

} else {
    echo 'error cause there no data to paste';
}

?>
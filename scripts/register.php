<?php

require_once("config.php");

if(isset($_POST)){

    // data from ajax post; [!] not from HTML5 form
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $birth = $_POST['birth'];
    $street = $_POST['street'];
    $housenumber = $_POST['housenumber'];
    $zipCode = $_POST['zipCode'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    

    $sql = "INSERT INTO user (firstName, lastName, birth, street, housenumber, zipcode, city, phone, email, pwd) VALUES (?,?,?,?,?,?,?,?,?,?)";
    $insert = $db->prepare($sql);
    $res = $insert->execute([$fName, $lName, $birth, $street, $housenumber, $zipCode, $city, $phone, $email, $pwd]);
    if($res){
        echo 'data successfully saved';
    } else {
        echo 'error while saving data';
    }

} else {
    echo 'error cause there no data to paste';
}

?>
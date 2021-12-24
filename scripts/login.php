<?php

$nameT = $_POST['name'];
$birth = $_POST['birthdayDate'];
$street = $_POST['street'];
$housenumber = $_POST['number'];
$zipcode = $_POST['zipcode'];
$city = $_POST['city'];
$phone = $_POST['phoneNumber'];
$email = $_POST['emailAdress'];
$pwd = $_POST['pwd'];

$sql = "INSERT INTO users (nameT, birth, street, housenumber, zipcode, city, phone, email, pwd) VALUES (?,?,?,?,?,?,?,?,?)";
//$insert = $db->prepare($sql);
$res = $insert->execute([$nameT, $birth, $street, $housenumber, $zipcode, $city, $phone, $email, $pwd);

if($res){
    echo('works');
} else {
    echo('error');
}



?>

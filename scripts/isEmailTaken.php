<?php

require_once("config.php");

$email = "";

if (isset($_GET["query"])){
    $email = $_GET["query"];
    $sql = "SELECT email FROM user WHERE email = ? LIMIT 1";
    $isTaken = $db->prepare($sql);
    $res = $isTaken->execute([$email]);
    if($res){
        $email = $isTaken->fetch(PDO::FETCH_ASSOC);
        if($email==''){
           echo 'E-Mail verfügbar.';
        } else {
           echo "E-Mail bereits vergeben!";
        }
     };
};

?>
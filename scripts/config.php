<?php

$dbUser = "root";
$dbPass = "test";
$dbName = "dhverleih";

// connect to database
$db = new PDO('mysql:host=localhost;dbname='. $dbName . ';charstet=utf8' , $dbUser , $dbPass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
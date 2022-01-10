<?php

session_start();

require_once("config.php");

if(isset($_POST)){
    $email = $_POST['login_email'];
    $pwd = sha1($_POST['login_pwd']);
    
    $sql = "SELECT * FROM user WHERE email = ? AND pwd = ? LIMIT 1";
    $select = $db->prepare($sql);
    $res = $select->execute([$email, $pwd]);

    if($res){
       $user = $select->fetch(PDO::FETCH_ASSOC);
       if($select->rowCount() > 0){
          $_SESSION['userlogin'] = $user;
          echo 'user found';
       } else {
          echo 'no user found';
       }
    };
}

?>

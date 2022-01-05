<?php

require_once("config.php");

if(isset($_POST)){

    // data from HTML5 form
    $email = $_POST['newslettermail'];    

    $sql = "INSERT INTO newsletter (email) VALUES (?)";
    $insert = $db->prepare($sql);
    $res = $insert->execute([$email]);
    if($res){
	?>
		<script language="javascript" type="text/javascript">
			alert('Deine Newsletter-Anmeldung war erfolgreich.');
			window.location = '../index.php';
		</script>
	<?php
    } else { 
	?>
		<script language="javascript" type="text/javascript">
			alert('Deine Newsletter-Anmeldung ist fehlgeschlagen. Bitte versuche es später erneut.');
			window.location = '../contact.php';
		</script>
	<?php
    }
}

?>
<?php

$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_phone = $_POST['phone'];
$field_adress = $_POST['adress'];
$field_subject = $_POST['subject'];
$field_message = $_POST['msg'];

$mail_to = 'dhverleih@byom.de';
$subject = 'Anfrage an DH Instrumentenverleih von '.$field_name;

$body_message = 'Name: '.$field_name."\n";
$body_message .= 'E-Mail: '.$field_email."\n";
$body_message .= 'Telefonnummer: '.$field_phone."\n";
$body_message .= 'Adresse: '.$field_adress."\n";
$body_message .= 'Thema: '.$field_subject."\n";
$body_message .= 'Nachricht: '."\n".$field_message."\n";

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to,$subject,$body_message,$headers);
if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Vielen Dank für Deine Nachricht. Wir werden uns schnellstmöglich mit Dir in Verbindung setzen.');
		window.location = '../index.php';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Deine Nachricht konnte nicht versendent werden. Bitte versuche es später erneut.');
		window.location = '../contact.php';
	</script>
<?php
}

?>
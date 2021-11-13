<?php
require_once '../phpmailer/src/Exception.php';
require_once '../phpmailer/src/PHPMailer.php';
require_once '../phpmailer/src/SMTP.php';

include_once('controllers.php');
if(!empty($_POST['email']))
{
	$achat = new Achat(3);
	$achat -> set_info($_POST['nom'], $_POST['prenoms'], $_POST['cin'], $_POST['email'], $_POST['date'], $_POST['heure']);
	$achat -> send_mail_achat();
	echo '1';
}

else
{
	echo "Erreur !";
}
unset($achat);
?>

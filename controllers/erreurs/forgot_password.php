<?php
session_start();
require_once '../../phpmailer/src/Exception.php';
require_once '../../phpmailer/src/PHPMailer.php';
require_once '../../phpmailer/src/SMTP.php';

include_once('../controllers.php');
include_once('../../models/models.php');

$verification = new ChangePassword(3);
$informations = new ForgotPassword(3);

if(!empty($_POST['email']))
{
	$informations -> set_email_account($_POST['email']);
	$donnees = $verification -> verify_email($informations -> get_email_account());

	if(!empty($donnees['TRUE']) AND !empty($donnees['id']))
	{
		$_SESSION['id'] = $donnees['id'];
		$_SESSION['nom'] = $donnees['names'];

		$verification -> update_forgot_password($_SESSION['id']);
		$informations -> set_name($_SESSION['nom']);

		// Send the email...
		$informations -> send_password_forgotten();
		echo 'success';
	}

	else
	{
		echo "Il semblerait que cet adresse email n'existe pas...!";
	}

	unset($verification);
	unset($informations);
	session_destroy();
}
?>
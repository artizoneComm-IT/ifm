<?php
session_start();
include_once('../models/models.php');
include_once('controllers.php');

$verification = new Login(3); 
$informations = new GetInfoLogin(3);
$informations -> setinfo($_POST['identifiant'], $_POST['password']);
$donnees = $informations -> getinfo();

$reponse = $verification -> get_id_artisant($donnees);
if(!empty($reponse['TRUE']) AND !empty($reponse['id']))
{	
	$_SESSION['id'] = $reponse['id'];
	echo $reponse['TRUE'];
}
else
{
	echo 'Identifiant et/ou mot de passe incorrect...! Veuillez réessayer !';
}
unset($verification);
unset($informations);
?>
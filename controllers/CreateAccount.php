<?php
include_once('../models/models.php');
include_once('controllers.php');

$verification = new InsertInformationsArtisants(5);
$informations = new GetInfoCreateAccount(5);
if(!empty($names) AND !empty($last_names) AND !empty($pseudo) AND !empty($birthday) AND !empty($phone1) AND !empty($addresses) AND !empty($email) AND !empty($password) AND !empty($id_categorie))
{
    $informations -> setinfo($_POST['names'], $_POST['last_names'], $_POST['pseudo'], $_POST['birthday'], $_POST['phone1'], $_POST['phone2'], $_POST['addresses'], $_POST['email'], $_POST['passwords'], $_POST['id_categorie']);
    $donnees = $informations -> getInfo();
    $verification -> remplir_identities($donnees);
}
else 
{
    echo "Error";  
}

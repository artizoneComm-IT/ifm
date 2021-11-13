<?php
include_once('../models/models.php');
include_once('controllers.php');

$inserer = new InsertInformationsArtisants(5);
$informations = new GetInfoCreateAccount(5);

if(!empty($_POST['names']) AND !empty($_POST['last_names']) AND !empty($_POST['phone1']) AND !empty($_POST['addresses']) AND !empty($_POST['email']) AND !empty($_POST['passwords']) AND !empty($_POST['id_categorie']))
{
    $informations -> setinfo($_POST['names'], $_POST['last_names'], $_POST['pseudo'], $_POST['phone1'], $_POST['phone2'], $_POST['addresses'], $_POST['email'], $_POST['passwords'], $_POST['id_categorie']);

    $donnees = $informations -> getInfo();
    $inserer -> remplir_identities($donnees);
    echo '1';
}

else 
{
    echo "Veuillez remplir toutes les champs ...!";  
}
unset($inserer);
unset($informations);
?>
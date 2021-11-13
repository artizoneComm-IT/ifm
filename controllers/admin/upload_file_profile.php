<?php
session_start();
include_once('../../models/models.php');
include_once('../controllers.php');
	
	if(isset($_FILES['fichier']) && $_FILES['fichier']['error'] == 0)
	{
		$file = new UploadFile(3);
		$file -> set_info_fichier($_FILES['fichier']['name'], $_FILES['fichier']['tmp_name'], $_FILES['fichier']['size'], '/opt/lampp/htdocs/ifm/mes_images/profiles');
		$lien_file = $file -> upload_file();
		$file -> set_link($lien_file);
		
		$inserer = new UpdateIdentities(3);
		$inserer -> update_link_profile($file -> get_link(), $_SESSION['id']);
		header('Location:../../views/admin/modifierportfolio.php');
	}
	else
	{
		echo 'Erreur';
	}
	
	
?>
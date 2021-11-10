<?php
/* connexion à la base de données */
class ConnectToDb
{
	/* Il faut toujours qu'une classe possède une valeur par défaut quand on l'utilise */
	private $defaultValue = null; // l'attribut qui est la valeur de la classe 'ConnectToDb'

	private function __construct()
	{
		$this -> defaultValue = "mybestfriends"; // On affecte la valeur 'mybestfriends' à l'attribut ci-dessus...
	}

	protected function db_connect() // function qui fait la connexion à la base de données...
	{
		/* la fonction créée est protected ici car on va seulement l'utiliser dans toutes les autres 'classe' dans ce fichiers */
		try
		{
			$database = new PDO('mysql:host=localhost; dbname=artizone; charset=utf8', 'root', '', 
				array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
			return $database; // on return l'objet donnée par PDO qui est la connexion à la DB...
		}

		catch(PDOException $e)
		{
			die('Erreur:<br>'.$e -> getMessage()); // On kill ici les erreurs s'il y en a afin que PHP n'affiche pas notre code...
		}
	}
}

class InsertInformationsArtisants extends ConnectToDb
{
	private $defaultValue = null;

	public function __construct(int $nombre)
	{
		$this -> defaultValue = $nombre;
	}

	public function remplir_identities(array $donnees)
	{
		try
		{
			$database = $this -> db_connect(); // connexion à la base de données...

				/* la requete SQL qui faire une insertion d'informations dans la table 'identities'...
				Cependant, on prépare la requete puisqu'on attend encore des données venant de l'utilisateur*/
			$requete = $database -> prepare('INSERT INTO identities(names, last_names, pseudo, birthday, phone1, phone2, addresses, email, passwords, id_categorie, dates)
				VALUES(:names, :last_name, :pseudo, :birthday, :phone1, :phone2, sha2(:addresses, 256), :email, :password, :id_categorie, NOW())'); 

			$requete -> execute($donnees);
		}

		catch(PDOException $e)
		{
			die('Erreur:<br>'.$e -> getMessage());
		}

		$database = null;
	}

	public function remplir_formations(array $donnees)
	{
		try
		{
			$database = $this -> db_connect();

			$requete = $database -> prepare('INSERT  INTO formations(places, dates, objects, descriptions, id_identity)
				VALUES(:places, :dates, :objects, :descriptions, :id_identity)');
			$requete -> execute($donnees);
		}

		catch(PDOException $e)
		{
			die('Erreur:<br>'.$e -> getMessage());
		}

		$database = null;
	}

	public function remplir_experiences(array $donnees)
	{
		try
		{
			$database = $this -> db_connect();
			$requete = $database -> prepare('INSERT INTO experiences(experience_name, dates, descriptions, id_identity)
				VALUES(:experience_name, :dates, :descriptions, :id_identity)');
			$requete -> execute($donnees);
		}

		catch(PDOException $e)
		{
			die('Erreur:<br>'.$e -> getMessage());
		}

		$database = null;
	}
}


class InsertFiles extends ConnectToDb
{
	private $defaultValue = null;

	public function __construct(int $nombre)
	{
		$this -> defaultValue = $nombre;
	}

	public function inserer_lien_fichier(array $donnees)
	{
		try
		{
			$database = $this -> db_connect();
			$requete = $requete -> prepare('INSERT INTO files(links, comments, dates, id_identity)
				VALUES(:links, :comments, NOW(), :id_identity)');
			$requete -> execute($donnees);
		}

		catch(PDOException $e)
		{
			die('Erreur:<br>'.$e -> getMessage());
		}

		$database = null;
	}
}

class InsertMessages extends ConnectToDb
{
	private $defaultValue = null;

	public function __construct(int $nombre)
	{
		$this -> defaultValue = $nombre;
	}

	private function inserer_messages(array $donnees)
	{
		try
		{
			$database = $this -> db_connect();
			$requete = $database -> prepare('INSERT INTO messengers(messages, dates, id_identity)
				VALUES(:messages, NOW(), :id_identity)');
			$requete -> execute($donnees);
		}
		
		catch(PDOException $e)
		{
			die('Erreur:<br>'.$e -> getMessage());
		}

		$database =null;
	}
}

class Login extends ConnectToDb
{
	private $defaultValue = null;

	public function __construct(int $nombre)
	{
		$this -> defaultValue = $nombre;
	}

	public function get_id_artisant(array $infos)
	{
		try
		{
			$database = $this -> db_connect();
			$reponse = $database -> prepare("SELECT True, id FROM identities WHERE (email = :identifiant OR phone1 = :identifiant OR phone2 = :identifiant) AND passwords = sha2(:password, 256)");
			$reponse -> execute($infos);

			$donnees = $reponse -> fetch();
			return $donnees;
		}

		catch(PDOException $e)
		{
			die('Error: login <br>'.$e -> getMessage());
		}

		$database = null;
	}
}

// Obtenir des informations de l'artisant...

class GetInformationsArtisant extends ConnectToDb
{
	private $defaultValue = null;

	public function __construct(int $nombre)
	{
		$this -> defaultValue = $nombre;
	}

	public function get_identities(array $donnees)
	{
		try
		{
			$database = $this -> db_connect();
			$reponse = $database -> prepare('SELECT names, last_names, pseudo, phone1, phone2, addresses, email, linkedin, facebook, work, work_description, id_categorie FROM identities WHERE id = :id');
			$reponse -> execute($donnees);
		}

		catch(PDOException $e)
		{
			die('Error:<br>'.$e -> getMessage());
		}

		$database = null;
	}

	public function get_formations(array $donnees)
	{
		try
		{
			$database = $this -> db_connect();
			$reponse = $database -> prepare('SELECT f.places, f.dates, f.objects, f.descriptions FROM formations f` JOIN `identities i` ON f.id_identity = i.id WHERE i.id = :id');
			$requete -> execute($donnees);
		}

		catch(PDOException $e)
		{
			die('Error:<br>'.$e -> getMessage());
		}

		$database = null;
	}
}

// Pour faire les mises à jours ...

class UpdateIdentities extends ConnectToDb
{
	private $defaultValue = null;

	public function __construct(int $nombre)
	{
		$this -> defaultValue = $nombre;
	}

	public function update_informations(array $donnees)
	{
		try
		{
			$database = $this -> db_connect();
			$requete = $database -> prepare('UPDATE identities SET pseudo = :pseudo, phone1 = :phone1, linkedin = :linkedin, facebook = :facebook, work = :work, work_description = :work_description WHERE id = :id');
			$requete -> execute($donnees);
		}

		catch(PDOException $e)
		{
			die('Erreur:<br>'.$e -> getMessage());
		}

		$database = null;
	}

	public function update_link_profile(array $donnees)
	{
		try
		{
			$database = $this -> db_connect();
			$requete = $database -> prepare('UPDATE identities SET profile_link = :profile_link WHERE id = :id');
			$requete -> execute($donnees);
		}

		catch(PDOException $e)
		{
			die('Erreur:<br>'.$e -> getMessage());
		}

		$database = null;
	}
}

class ChangePassword extends ConnectToDb
{
	private $defaultValue = null;

	public function __construct(int $nombre)
	{
		$this -> defaultValue = $nombre;
	}

	public function update_forgot_password(array $donnees)
	{
		try
		{
			$database = $this -> db_connect();
			$requete = $database -> prepare("UPDATE identities SET passwords = sha2('mybestfreinds', 256) WHERE id = :id");
			$requete -> execute($donnees);
		}

		catch(PDOException $e)
		{
			die("Erreur:<br>".$e -> getMessage());
		}
	}

	public function change_password(array $donnees)
	{
		try
		{
			$database = $this -> db_connect();
			$requete = $database -> prepare("UPDATE identities SET passwords = sha2(:password, 256) WHERE id = :id");
			$requete -> execute($donnees);
		}

		catch(PDOException $e)
		{
			die('Erreur: <br>'.$e -> getMessage());
		}
	}
}


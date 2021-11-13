<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


// La class suivante est utilisée pour les envoies des emails...
class SendEmail
{
	private $defaultValue = null;
	private $email_destinataire = null;
	private $destinataire = null;
	private $objet = null;
	private $message = null;

	private  function __construct()
	{
		$this -> defaultValue = "mybestfriends";
	}

	protected function set_data(string $email_destinataire, string $destinataire, string $objet, string $message)
	{
		$this -> email_destinataire = strip_tags($email_destinataire);
		$this -> destinataire =  strip_tags(ucwords($destinataire));
		$this -> objet = strip_tags(trim($objet));
		$this -> message = $message;
	}

	protected function send_email()
	{
		$email = new PHPMailer(true);

		try
		{
			$email -> SMTPDebug = 0;
			$email -> isSMTP();
			$email -> Host = 'smtp.gmail.com';
			$email -> SMTPAuth =  true;
			$email -> Username = 'lahatrap20.aps2a@gmail.com';
			$email -> Password = '299792458m/S/tsiory';
			$email -> SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
			$email -> Port = 587;

			$email -> setFrom('lahatrap20.aps2a@gmail.com', 'Artizone');
			$email -> addAddress($this -> email_destinataire, $this -> destinataire);
			
			$email -> isHTML(true);
			$email -> Subject = $this -> objet;
			$email -> Body = $this -> message; 
			$email -> AltBody = $this -> message;

			$email -> send();
			return 'success';
		}

		catch(Exception $e)
		{
			die('Erreur:<br>'.$e -> getMessage());
		}
	}
}


class GetInfoLogin
{
	private $defaultValue = null;
	private $identifiant = null;
	private $password = null;

	public function __construct(int $nombre)
	{
		$this -> defaultValue = $nombre;
	}

	public function setinfo(string $identifiant, string $password)
	{
		$this -> identifiant = strip_tags(trim($identifiant));
		$this -> password = strip_tags($password);
	}

	public function getInfo()
	{
		$infos = array(
			'identifiant' => $this -> identifiant,
			'password' => $this -> password);
		return $infos;
	}
}

class GetInfoCreateAccount
{
	private $defaultValue = null;
	private $names = null;
	private $last_names = null;
	private $pseudo = null;
	private $birthday = null;
	private $phone1 = null;
	private $phone2 = null;
	private $addresses = null;
	private $email = null;
	private $passwords = null;
	private $id_categorie = null;

	public function __construct(int $nombre)
	{
		$this -> defaultValue = $nombre;
	}

	public function setinfo(string $names, string $last_names, string $pseudo, string $phone1, string $phone2, string $addresses, string $email, string $passwords, int $id_categorie)
	{
		$this -> names = strip_tags(ucwords($names));
		$this -> last_names = strip_tags(ucwords($last_names));
		$this -> pseudo = strip_tags(ucwords($pseudo));
		$this -> phone1 = strip_tags(trim($phone1));
		$this -> phone2 = strip_tags(trim($phone2));
		$this -> addresses = strip_tags($addresses);
		$this -> email = strip_tags(trim($email));
		$this -> passwords = $passwords;
		$this -> id_categorie = strip_tags(trim($id_categorie));
	}

	public function getInfo()
	{
		$infos = array(
			'names' => $this -> names,
			'last_names' => $this -> last_names,
			'pseudo' => $this -> pseudo,
			'phone1' => $this -> phone1,
			'phone2' => $this -> phone2,
			'addresses' => $this -> addresses,
			'email' => $this -> email,
			'passwords' => $this -> passwords,
			'id_categorie' => $this -> id_categorie);
		return $infos;
	}
}

class GetInfoMessages
{
	private $defaultValue = null;
	private $messages = null;
	private $dates = null;
	private $id_identity = null;

	public function __construct(int $nombre)
	{
		$this -> defaultValue = $nombre;
	}

	public function setInfo(string $messages, string $id_identity)
	{
		$this -> messages = strip_tags($messages);
		$this -> id_identity = strip_tags($id_identity);
	}
	public function getInfo()
	{
		$infos = array(
			'messages' => $this -> messages,
			'id_identity' => $this -> id_identity);
		return $infos;
	}
}

class GetInfoFiles
{
	private $defaultValue = null;
	private $links = null;
	private $comments = null;
	private $id_identity = null;

	public function __construct(int $nombre)
	{
		$this-> defaultValue = $nombre;
	}

	public function setInfo(string $links, string $comments, string $id_identity)
	{
		$this-> links = strip_tags(trim($links));
		$this-> comments = strip_tags($comments);
		$this-> id_identity = strip_tags($id_identity);
	}

	public function getInfo()
	{
		$infos = array(
			'links' => $this -> links,
			'comments' => $this -> comments,
			'id_identity' => $this -> id_identity);
		return $infos;
	}
}

// Mot de passe oublier...

class ForgotPassword extends SendEmail
{
	private $defaultValue = null;
	private $email = null;
	private $nom = null;

	public function __construct(int $nombre)
	{
		$this-> defaultValue = $nombre;
	}

	public function set_email_account(string $email)
	{
		$this -> email = strip_tags($email);
	}

	public function get_email_account()
	{
		$infos = array(
			'email' => $this -> email);
		return $infos;
	}

	// Mot de passe ... 
	public function set_name(string $nom)
	{
		$this -> nom = strip_tags($nom);
	}

	public function send_password_forgotten()
	{
		$messages = '<h3>Salutation !</h3>Le mot de passe de votre compte Artizone:<br><b><i>mybestfriends</i></b><br>Merci de votre confiance !';
		SendEmail::set_data($this -> email, $this -> nom, 'Le nouveau mot de passe', $messages);
		SendEmail::send_email();
	}
}


class UploadFile
{
	private $defaultValue = null; 
	private $nom_fichier = null;
	private $nom_temporaire = null;
	private $taille = null;
	private $path = null;
	private $link = null;

	public function __construct(int $nombre)
	{
		$this -> defaultValue = $nombre;
	}

	public function set_info_fichier(string $nom_fichier, string $nom_temporaire, int $taille, string $path)
	{
		$this -> nom_fichier = $nom_fichier;
		$this -> nom_temporaire = $nom_temporaire;
		$this -> taille = $taille;
		$this -> path = $path;
	}

	public function upload_file()
	{
		if($this -> taille <= 10000000)
		{
			$informations_fichier = pathinfo($this -> nom_fichier);
			$extension = $informations_fichier['extension'];
			$access_extension = ['jpg', 'jpeg', 'gif', 'png'];

			if(in_array($extension, $access_extension))
			{
				$image_link = $this -> path.'/'.basename($this -> nom_fichier);

				move_uploaded_file($this -> nom_temporaire, $image_link);
				return $image_link;
			}
		}
	}


	public function set_link(string $link)
	{
		$this -> link = str_replace('/opt/lampp/htdocs/ifm-hackathon/ifm', '', $link);
	}

	public function get_link()
	{
		return $this -> link;
	}
}

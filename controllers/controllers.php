<?php
class GetInfoLogin
{
	private $defaultValue = null;
	private $identifiant = null;
	private $passwords = null;

	public function __construct(int $nombre)
	{
		$this -> defaultValue = $nombre;
	}

	public function setinfo(string $identifiant, string $passwords)
	{
		$this -> identifiant = strip_tags(trim($identifiant));
		$this -> passwords = strip_tags($passwords);
	}

	public function getInfo()
	{
		$infos = array(
			'identifiant' = > $this -> identifiant,
			'passwords' => $this -> passwords);
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

	public function setinfo(string $names, string $last_names, string $pseudo, string $birthday, string $phone1, string $phone2, string $addresses, string $email, string $passwords, int $id_categorie)
	{
		$this -> names = strip_tags(ucwords($names));
		$this -> last_names = strip_tags(ucwords($last_names));
		$this -> pseudo = strip_tags(ucwords($pseudo));
		$this -> birthday = strip_tags($birthday);
		$this -> phone1 = strip_tags(trim($phone1));
		$this -> phone2 = strip_tags(trim($phone2));
		$this -> addresses = strip_tags($addresses);
		$this -> email = strip_tags(trim($email));
		$this -> passwords = strip_tags($passwords);
		$this -> id_categorie = strip_tags(trim($id_categorie));
	}

	public function getInfo()
	{
		$infos = array(
			'names' => $this -> names,
			'last_names' => $this -> last_names,
			'pseudo' => $this -> pseudo,
			'birthday' => $this -> birthday,
			'phone1' => $this -> phone1,
			'phone2' => $this -> phone2,
			'addressses' => $this -> addressses,
			'email' => $this -> email,
			'passwords' => $this -> passwords,
			'id_categorie' => $this -> id_categorie);
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
	}
}

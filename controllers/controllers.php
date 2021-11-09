<?php
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
		$this -> password = strip_tags(trim($password));
	}

	public function getInfo()
	{
		$infos = array(
			'identifiant' = > $this -> identifiant,
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
	private $password = null;
	private $id_categorie = null;

	public function __construct(int $nombre)
	{
		$this -> defaultValue = $nombre;
	}

	public function setinfo(string $names, string $last_names, string $pseudo, string $birthday, string $phone1, string $phone2, string $addresses, string $email, string $password, int $id_categorie)
	{
		$this -> names = strip_tags(ucwords($names));
		$this -> last_names = strip_tags(ucwords($last_names));
	}
}

<?php



class User {
	
 public $idUser;
 public $nom;
 public $email; 
 public $password;
 public $adresse;
 public $phone;
 public $picture;
 
 
 public function __construct()
 {}

  public function getidUser(): ?int
    {
        return $this->idUser;
    }
	
	public function getnom(): ?string
    {
        return $this->nom;
    }
	
	public function getemail(): ?string
    {
        return $this->email;
    }
	
	public function getpassword(): ?string
    {
        return $this->password;
    }
	
	public function getadresse(): ?string
    {
        return $this->adresse;
    }
	
	public function getphone(): ?string
    {
        return $this->phone;
    }
	
	public function getpicture(): ?string
    {
        return $this->picture;
    }
	
	
	public function setidUser(?int $idUser): void
    {
        $this->idUser = $idUser;
    }
	
	public function setnom(?string $nom): void
    {
        $this->nom = $nom;
    }
	
	public function setemail(?string $email): void
    {
        $this->email = $email;
    }
	
	public function setpassword(?string $password): void
    {
        $this->password = $password;
    }
	
	public function setadresse(?string $adresse): void
    {
        $this->adresse = $adresse;
    }
	
	public function setphone(?string $phone): void
    {
        $this->phone = $phone;
    }
	
	public function setpicture(?string $picture): void
    {
        $this->picture = $picture;
    }

public function consultUser($id)
{
	require_once "config/config.php";
	$cnx = config::getConnexion();
	$req="SELECT * from user where id_user ='$id'";
	$res=$cnx->query($req) or die($cnx->errorInfo());
	return $res;
}

public function GetUser($id)
{
	require_once "../config/config.php";
	$cnx = config::getConnexion();
	$req="SELECT * from user where email ='$id'";
	$res=$cnx->query($req) or die($cnx->errorInfo());
	return $res;
}


}
?>
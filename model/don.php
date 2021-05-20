<?php
class don {
private ?int $id = null ; 
private ?int $id_u = null ; 
private ?string $type = null;
private ?string $sexe = null;
private ?string $couleur = null;
private ?string $pelage = null;
private ?string $age = null;
private ?string $race = null; 
private ?string $image = null;
 


 
public function __construct(?string $type,?string $sexe,?string $couleur,?string $pelage,?string $age,  ?string $race , ?string $image , ?int $id_u )
{

$this->type = $type ; 
$this->sexe = $sexe ;
$this->couleur = $couleur ;
$this->pelage = $pelage  ;
$this->age = $age ;
 
$this->race = $race ;
 
$this->image = $image ;
$this->id_u = $id_u ;






}


public function getID(): ?int
{
  return $this->id;
}
public function getIDu(): ?int
{
  return $this->id_u;
}
public function gettype(): ?string
{
  return $this->type;
}

public function getsexe(): ?string
{
  return $this->sexe;
}
public function getcouleur(): ?string
{
  return $this->couleur;
}
public function getpelage(): ?string
{
  return $this->pelage;
}
public function getage(): ?string
{
  return $this->age;
}
 
 
public function getrace(): ?string
{
  return $this->race;
}
 
public function getimage(): ?string
{
  return $this->image;
}
 
public function settype(string $type) : void {
  $this->type=$type;
}
public function setsexe(string $sexe) : void {
  $this->sexe=$sexe;
}

public function setpelage(string $pelage) : void 
{
  $this->pelage=$pelage;
}

public function setage(string $age) : void 
{
  $this->age=$age;
}
 
public function setrace(string $race) : void {
  $this->race=$race;
}
 
public function setcouleur(string $couleur) : void {
  $this->couleur=$couleur;
}
public function setid_u(string $id_u) : void {
  $this->id_u=$id_u;
}
public function setimage(string $image) : void {
  $this->image=$image;
}
}




?>
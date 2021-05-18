<?php
class adoption {
private ?int $id = null ; 
private ?string $espece = null;
private ?string $race = null;
private ?string $sexe = null;
private ?string $age = null;
private ?string $region = null;
private ?string $image = null;
 
 


public function __construct(?string $espece,?string $race,?string $age,?string $sexe,?string $region,?string $image )
{

$this->espece = $espece ; 
$this->race = $race ;
$this->age = $age ;
$this->sexe = $sexe  ;
$this->region = $region ;
$this->image = $image ;

}


public function getID(): ?int
{
  return $this->id;
}

public function getespece(): ?string
{
  return $this->espece;
}
public function getsexe(): ?string
{
  return $this->sexe;
}
public function getrace(): ?string
{
  return $this->race;
}
public function getage(): ?string
{
  return $this->age;
}
public function getregion(): ?string
{
  return $this->region;
}
public function getimage(): ?string
{
  return $this->image;
}
public function setespace(string $espece) : void {
  $this->espece=$espece;
}
public function setage(string $age) : void {
  $this->age=$age;
}
public function setsexe(string $sexe) : void {
  $this->sexe=$sexe;
}
public function setregion(string $region) : void {
  $this->region=$region;
}
public function setimage(string $image) : void {
  $this->image=$image;
}
}




?>
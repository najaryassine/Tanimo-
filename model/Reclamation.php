<?php


class Reclamation {
	
 public $idreclamation;
 public $description;
 public $date; 
 public $user_id;
 public $type;
 
 
  public function __construct()
 {}

 public function getidreclamation(): ?int
    {
        return $this->idreclamation;
    }
	
	public function getdescription(): ?string
    {
        return $this->description;
    }
	public function getdate(): ?string
    {
        return $this->date;
    }
	public function getuser_id(): ?int
    {
        return $this->user_id;
    }
	public function gettType(): ?string
    {
        return $this->type;
    }

    public function setIdreclamation(?int $idreclamation): void
    {
        $this->idreclamation = $idreclamation;
    }
	
	public function setdate(?string $date): void
    {
        $this->date = $date;
    }
	
	public function setuser_id(?int $user_id): void
    {
        $this->user_id = $user_id;
    }
	
	public function setdescription(?string $description): void
    {
        $this->description = $description;
    }
	
	public function setType(?int $Type): void
    {
        $this->type = $Type;
    }

}

?>
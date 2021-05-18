<?PHP
               
    class Boutique{
        private  $Id;
        private  $Nom;
        private  $Email;
        private  $Gearnt;
        private  $Description;
        private  $Adresse;
        private  $Image;

        
        
        function __construct($Id,$Nom,$Email,$Gearnt,$Description,$Adresse,$Image){
            
            $this->Id=$Id;
            $this->Nom=$Nom;
            $this->Email=$Email;
            $this->Gearnt=$Gearnt;
            $this->Description=$Description;
            $this->Adresse=$Adresse;
            $this->Image=$Image;
            
        }
        
      function getId() {
            return $this->Id;
        }
       function getNom() {
            return $this->Nom;
        }
        function getEmail() {
            return $this->Email;
        }
         function getGearnt() {
            return $this->Gearnt;
        }
       function getDescription() {
            return $this->Description;
        }
         function getAdresse() {
            return $this->Adresse;
        }
        function getImage() {
            return $this->Image;
        }
        

        
       function setId($Id) {
            $this->Id=$Id;
        }
       function setNom($Nom) {
            $this->Nom=$Nom;
        }
       function setEmail($Email) {
            $this->Email=$Email;
        }
       function setGearnt($Gearnt) {
            $this->Gearnt=$Gearnt;
        }
      function setDescription($Description) {
            $this->Description=$Description;
        }
       function setAdresse($Adresse) {
            $this->Adresse=$Adresse;
        }
        function setImage($Image) {
            $this->Image=$Image;
        }
        
    }
?>
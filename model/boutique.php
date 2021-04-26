<?PHP
               
    class Boutique{
        private  $Id;
        private  $Nom;
        private  $Budget;
        private  $Gearnt;
        private  $Description;
        private  $Adresse;

        
        
        function __construct($Id,$Nom,$Budget,$Gearnt,$Description,$Adresse){
            
            $this->Id=$Id;
            $this->Nom=$Nom;
            $this->Budget=$Budget;
            $this->Gearnt=$Gearnt;
            $this->Description=$Description;
            $this->Adresse=$Adresse;
            
        }
        
      function getId() {
            return $this->Id;
        }
       function getNom() {
            return $this->Nom;
        }
        function getBudget() {
            return $this->Budget;
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
        

        
       function setId($Id) {
            $this->Id=$Id;
        }
       function setNom($Nom) {
            $this->Nom=$Nom;
        }
       function setBudget($Budget) {
            $this->Budget=$Budget;
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
        
    }
?>
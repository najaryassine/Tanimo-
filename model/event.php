<?PHP
               
    class Event{
        private  $id;
        private  $Titre;
        private  $Description;
        private  $DateD;
        private  $DateF;
        private  $Image;

        
        
        function __construct($id,$Titre,$Description,$DateD,$DateF,$Image){
            
            $this->id=$id;
            $this->Titre=$Titre;
            $this->Description=$Description;
            $this->DateD=$DateD;
            $this->DateF=$DateF;
            $this->Image=$Image;
            
        }
        
      function getid() {
            return $this->id;
        }
       function getTitre() {
            return $this->Titre;
        }
        function getDescription() {
            return $this->Description;
        }
         function getDateD() {
            return $this->DateD;
        }
       function getDateF() {
            return $this->DateF;
        }
         function getImage() {
            return $this->Image;
        }
        

        
       function setid($id) {
            $this->id=$id;
        }
       function setTitre($Titre) {
            $this->Titre=$Titre;
        }
       function setDescription($Description) {
            $this->Description=$Description;
        }
       function setDateD($DateD) {
            $this->DateD=$DateD;
        }
      function setDateF($DateF) {
            $this->DateF=$DateF;
        }
       function setImage($Image) {
            $this->Image=$Image;
        }
        
    }
?>
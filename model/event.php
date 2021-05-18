<?PHP
               
    class Event{
        private  $Id;
        private  $Titre;
        private  $Description;
        private  $DateD;
        private  $DateF;
        private  $Image;

        
        
<<<<<<< HEAD
        function __construct($Id, $Titre, $Description, $DateD, $DateF, $Image){
=======
        function __construct($Id,$Titre,$Description,$DateD,$DateF,$Image){
>>>>>>> ce409d30636e5ca5da5f575b394012e9476d2900
            
            $this->Id=$Id;
            $this->Titre=$Titre;
            $this->Description=$Description;
            $this->DateD=$DateD;
            $this->DateF=$DateF;
            $this->Image=$Image;
            
        }
        
<<<<<<< HEAD
      function getId() {
=======
      function getid() {
>>>>>>> ce409d30636e5ca5da5f575b394012e9476d2900
            return $this->Id;
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
        

        
<<<<<<< HEAD
       function setId($Id) {
            $this->Id=$Id;
=======
       function setid($Id) {
            $this->id=$id;
>>>>>>> ce409d30636e5ca5da5f575b394012e9476d2900
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
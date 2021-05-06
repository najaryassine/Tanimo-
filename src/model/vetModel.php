<?PHP
               
    class Veterinaire{
        private  $id = null;
        private  $nom = null;
        private  $prenom = null;
        private  $mail = null;
        private  $telephone = null;
        private $image = null;

        
        
        public function __construct( $nom, $prenom, $mail,  $telephone, $image){
            
            $this->nom=$nom;
            $this->prenom=$prenom;
            $this->mail=$mail;
            $this->telephone=$telephone;   
            $this->image = $image;         
        }
        
        public function getId() {
            return $this->id;
        }
        public function getNom() {
            return $this->nom;
        }
        public function getPrenom() {
            return $this->prenom;
        }
        public function getmail() {
            return $this->mail;
        }
        public function getTelephone() {
            return $this->telephone;
        }

        
        public function setId(int $id) {
            $this->id=$id;
        }
        public function setNom(string $nom) {
            $this->nom=$nom;
        }
        public function setPrenom(int $prenom) {
            $this->prenom=$prenom;
        }
        public function setMail(string $mail) {
            $this->mail=$mail;
        }
        public function setTelephone(string $telephone) {
            $this->telephone=$telephone;
        }

        public function getImage() {
            return $this->image;
        }

        public function setImage($img) {
            $this->image = $img;
        }
    }
?>
<?PHP
               
    class Promotion{
        private  $id = null;
        private  $produit = null;
        private  $prixnouveau = null;
        
        
        public function __construct( $produit,  $prixnouveau){
            
            $this->produit=$produit;
            $this->prixnouveau=$prixnouveau;
        }
        
        public function getId() {
            return $this->id;
        }
        public function getproduit() {
            return $this->produit;
        }
        public function getprixnouveau() {
            return $this->prixnouveau;
        }
        
        
        public function setId( $id) {
            $this->id=$id;
        }
        public function setproduit( $produit) {
            $this->produit=$produit;
        }
        public function setprixnouveau( $prixnouveau) {
            $this->prixnouveau=$prixnouveau;
        }
       

        
    }
?>
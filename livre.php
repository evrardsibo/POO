<?php
    class Livres
    {
        public $title;
        public $nbPages;
        private $couleurCouverture;
        private $traduitAnglais;
        private $type;

        public function __construct($title, $nbPages, $couleur, $traduit,$type)
        {
            $this->title = $title;
            $this->nbPages = $nbPages;
            $this->couleurCouverture = $couleur;
            $this->traduitAnglais = $traduit;
            $this->type = $type;
        }

        private function traductionAnglais()
        {
            $this->traduitAnglais = true;
        }
        
            public function __toString()
            {
                $txt = '';
                $txt .= $this->title .'<br>' ;
                $txt .= $this->nbPages . '<br>';  
                $txt .= $this->couleurCouverture . '<br>';
    
                if($this->traduitAnglais)
                {
                    $txt .= $this->traduitAnglais . 'le livre est traduit';
                }else
                {
                    $txt .= $this->traduitAnglais . 'non traduit';
                }

                return $txt;
            }
        

        public function setChangeCouleur($couleur)
        {
            $this->couleurCouverture = $couleur;
        }
       
        public function ajouterPages($nbAjouter)
        {
            $this->nbPages += $nbAjouter;
        }
        public function basculeranglais()
        {
            $this->traductionAnglais();
            $this->ajouterPages(5);
            $this->setChangeCouleur('blue');
        }
        public function getType()
        {
            return $this->type;
        }
        public function setType($type)
        {
            return $this->type = $type;
        }


    }
?>

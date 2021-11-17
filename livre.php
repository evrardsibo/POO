<?php
    class Livres
    {
        public $title;
        public $nbPages;
        private $couleurCouverture;
        private $traduitAnglais;

        public function __construct($title, $nbPages, $couleur, $traduit)
        {
            $this->title = $title;
            $this->nbPages = $nbPages;
            $this->couleurCouverture = $couleur;
            $this->traduitAnglais = $traduit;
        }

        private function traductionAnglais()
        {
            $this->traduitAnglais = true;
        }
        
            public function afficheLivres()
        {
            echo $this->title .'<br>' ;
            echo $this->nbPages . '<br>';  
            echo $this->couleurCouverture . '<br>';

            if($this->traduitAnglais)
            {
               echo $this->traduitAnglais . 'le livre est traduit';
            }else
            {
                echo $this->traduitAnglais . 'non traduit';
            }
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


    }
?>

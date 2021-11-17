<?php
 class Voitures
 {
     private $marque;
     private $modele;
     private $couleur;
     private $electrique;
     public $prix;
     const MINI = 3;
     const NORMAL = 5;
     const TVA = 20;

     public function __construct($marque, $modele, $couleur, $nbPorte, $electrique, $prix)
     {
         $this->marque = $marque;
         $this->modele = $modele;
         $this->couleur = $couleur;
         $this->nbPorte = $nbPorte;
         $this->electrique = $electrique;
         $this->prix = $prix * self::TVA / 100 ;

     }
     private function estelecrtique()
     {
         $this->electrique = true;
     }
     public function affichevoiture()
     {
        return $this->marque . ' ' . $this->modele . ' ' . $this->couleur . ' ' . $this->nbPorte  . '' . $this->prix   ;
       

        if($this->electrique)
        {
            return $this->electrique . 'cette voiture est electrique';
        }else
        {
            return $this->electrique . "cette voiture n'est pas electrique";
        }
     }

     public function getMarque()
     {
         return $this->marque ;
     }
     public function setMarque($marque)
     {
         return $this->marque = $marque;
     }
     public function getModel()
     {
         return $this->model ;
     }
     public function setModel($model)
     {
         return $this->model = $model;
     }
     public function getCouleur()
     {
         return $this->couleur ;
     }
     public function setCouleur($couleur)
     {
         return $this->couleur = $couleur;
     }
     public function getNbportes()
     {
         return $this->nbPorte ;
     }
     public function setNbportes($nbPorte)
     {
         return $this->nbPorte = $nbPorte;
     }
     public function getElectriques()
     {
         return $this->electrique ;
     }
     public function setElectrique($electrique)
     {
         return $this->electrique = $electrique;
     }
 }
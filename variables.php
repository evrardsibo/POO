<?php

    class Personnag
    {
            private $name;
            private $classe;
            private $attaque;
            private $forceDuBien;
            private $pv;

            public function __construct($name, $classe, $pv, $forceDuBien,$attaque)
            {
                $this->name = $name;
                $this->classe = $classe;
                $this->pv = $pv;
                $this->attaque = $attaque;
                $this->forceDuBien = $forceDuBien;
            }
            public function getName()
            {
                return $this->name;
            }
            public function setName($name)
            {
                $this->name = $name;
            }

            public function getClasse()
            {
                return $this->classe;
            }
            public function setClasse($classe)
            {
                $this->classe = $classe;
            }

            public function getPv()
            {
                return $this->pv;
            }
            public function setPv($pv)
            {
                $this->pv = $pv;
            }

            public function getAttaque()
            {
                return $this->attaque;
            }
            public function setAttaque($attaque)
            {
                $this->attaque = $attaque;
            }

            public function getForce()
            {
                return $this->forceDuBien;
            }
            public function setForce($forceDuBien)
            {
                $this->forceDuBien = $forceDuBien;
            }

            private function calculDegat()
            {
                return $this->pv /100 * $this->attaque +1 ;
            }

            public function afficheDegat()
            {
                return 'les degats sont'. ' '. $this->calculDegat() . '%';
            }

            public function ditBonjour()
            {
                echo 'Bonjour' . $this->name;
            }


    }
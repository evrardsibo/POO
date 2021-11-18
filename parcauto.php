<?php
       // require('cars.php');

        class ParcAuto
        {
                    private $nom;
                    private $adress;
                    private $voitu;

                    public function __construct($nom, $adress)
                    {
                        $this->nom = $nom;
                        $this->adress = $adress;
                    }

                    public function ajouVoiture($v)
                    {
                        $this->voitu [] = $v;
                    }

                    public function afficheVoit($marque)
                    {
                        echo '******************* <br>';
                        echo 'voici les marques' . $marque . '<br>';
                        for($i = 0 ; $i < count($this->voitu); $i++)
                        {
                            if($this->voitu[$i]->getMarque() === $marque)
                            {
                                echo $this->voitu[$i];
                            }
                        }

                    }

        }
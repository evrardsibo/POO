<?php
class Zombi extends Personnag
{
     private $vitesse;
     const DEGATZOMBI = 10;

     public function __construct($name, $classe, $pv, $forceDuBien, $vitesse)
    {
        parent::__construct($name, $classe, $pv, $forceDuBien, self::DEGATZOMBI);
        $this->vitesse = $vitesse;
    }
    public function setVitesse($vitesse)
    {
        $this->vitesse = $vitesse;
    }

    private function calculDegat()
    {
        return $this->attaque;
    }
    public function afficheDegat()
            {
                return 'les degats sont'. ' '. $this->calculDegat() . '%' .'<br>';
            }

     public function __toString()
     {
         $txt = 'Zombiiiiiiiii' . '<br>';
         $txt .= parent::__toString();
         $txt .= $this->vitesse . "<br>";
         return $txt;
     }       

}
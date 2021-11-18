<?php

 class Human extends Personnag
 {
    private $level;

    public function __construct($name, $classe, $pv, $forceDuBien,$attaque, $level)
    {
        parent::__construct($name, $classe, $pv, $forceDuBien,$attaque);
        $this->level = $level;
    }

    public function __toString()
    {
        $txt = '';
        $txt .= parent::__toString() .'<br>';
        $txt .= 'level is' . $this->level .'<br>';
        return $txt;
    }
    public function gagne()
    {
        $this->level++;
    }

    public function modifatt($attaque, $pv)
    {
        $this->attaque = $attaque;
        $this->pv = $pv;
        $this->afficheDegat();
        //echo '<br>'.'Mes pv sont'. $this->pv;
    }
 }
 
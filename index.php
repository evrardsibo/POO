<?php
require("personnage.php");
require('human.php');
require('zombi.php');
$human = new Human('Evan','hima',5,true,200,1);
$human1 = new Human('Kendji','hima',1,true,200,2);

$zombi = new Zombi('dd','fdd',10, false,50);
echo '********************' . '<br>';
echo $zombi;
echo '********************' . '<br>';
echo $zombi->afficheDegat();

echo '********************' . '<br>';
echo $human;
echo '********************' . '<br>';
echo $human1;
echo '********************' . '<br>';
$human->modifatt(100,200);

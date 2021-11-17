<?php 
require('variables.php');
require('cars.php');
require('livre.php');
$livres = new Personnag('EvaKen', 'hima', 1000, true, 6);
$cars = new Livres('POO', 500, 'rouge', false);
$voiture = new Voitures('mercedes', 'classe c', 'noir', 5, true, 1500);
$voiture->setElectrique(true);
$voiture1 = new Voitures('bmw', 'classe c', 'blue', 5, true,2000,Voitures::NORMAL);
$voiture2 = new Voitures('ford', 'classe c', 'jaune', 5, false, 3000);
$voiture3 = new Voitures('bugatti', 'classe c', 'rouge', 5, false, 5000);
$array = [$voiture, $voiture1, $voiture2, $voiture3];
echo $cars->afficheLivres() . '<br>';
echo "*************<br>";
$cars->nbPages = 505;
echo $cars->afficheLivres() . '<br>';
echo "*************<br>";
$cars->setChangeCouleur('orange');
$cars->ajouterPages(100);
echo $cars->afficheLivres() . '<br>';
echo "*************<br>";
$cars->basculeranglais();
echo $cars->afficheLivres() . '<br>';
echo "*************<br>";
for($i = 0; $i < count($array); $i++)
{
   echo $array[$i]->affichevoiture() . '<br>';
}

echo "*************<br>";



 echo $livres;


// $livres->getName() ;
// echo $livres->ditBonjour() .'<br>';

// $livres->setName('sibomana');
// //var_dump($livres->getName());
// echo $livres->ditBonjour();






//var_dump( $livres);




<?php 
require('variables.php');
require('cars.php');
require('livre.php');
require('parcauto.php');
require('biblio.php');
$bibli = new Bibliotheque();
$livres = new Personnag('EvaKen', 'hima', 1000, true, 6);
$cars = new Livres('POO', 500, 'rouge', false , 'roman');
$cars1 = new Livres('PHP', 570, 'violet', false , 'policier');
$cars3 = new Livres('LARAVEL', 670, 'violet', false , 'bd');
$parc = new ParcAuto('Evrard', 'Lessines');
$voiture = new Voitures('mercedes', 'classe c', 'noir', 5, true, 1500,Voitures::NORMAL);
$voiture->setElectrique(true);
$voiture1 = new Voitures('bmw', 'classe c', 'blue', 5, true,2000,Voitures::NORMAL);
$voiture2 = new Voitures('ford', 'classe c', 'jaune', 5, false, 3000,Voitures::MINI);
$voiture3 = new Voitures('bugatti', 'classe c', 'rouge', 5, true, 5000, Voitures::MINI) . '<br>' ;
//$array = [$voiture, $voiture1, $voiture2, $voiture3];
//echo $cars->afficheLivres() . '<br>';
echo "*************<br>";
$cars->nbPages = 505;
//echo $cars->afficheLivres() . '<br>';
echo "*************<br>";
$cars->setChangeCouleur('orange');
$cars->ajouterPages(100);
//echo $cars->afficheLivres() . '<br>';
echo "*************<br>";
$cars->basculeranglais();
//echo $cars->afficheLivres() . '<br>';
echo "*************<br>";
$bibli->ajoutlivr($cars);
echo "*************<br>";
$bibli->ajoutlivr($cars1);
$bibli->ajoutlivr($cars3);
echo $bibli;
// $voiture->getMarque();
// $voiture->setMarque('bmw');
// for($i = 0; $i < count(Voitures::$voitur); $i++)
// {
//    echo Voitures::$voitur[$i]. '<br>';
//    echo "*************<br>";
// }
$parc->ajouVoiture($voiture);
$parc->ajouVoiture($voiture1);
$parc->ajouVoiture($voiture2);
$parc->ajouVoiture($voiture3);
$parc->afficheVoit('mercedes');

echo "*************<br>";



 echo $livres;


// $livres->getName() ;
// echo $livres->ditBonjour() .'<br>';

// $livres->setName('sibomana');
// //var_dump($livres->getName());
// echo $livres->ditBonjour();






//var_dump( $livres);




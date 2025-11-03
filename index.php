<?php
include "Auteur.php";
include "Livre.php";

$auteur = new Auteur("Stephen", "King", "12/12/2012");
$livre = new Livre("Ca" ,1986 , 1138, 20, $auteur);
$livre22 = new Livre("test" ,1986 , 1138, 20, $auteur);

// echo $auteur . "<br>";
// echo $livre ;

var_dump($livre);

echo $auteur->afficherBibliographie();

// chainage
?>



<!-- un livre sera lié à UN SEUL objet auteur 

un auteur aura une COLLECTION d'objets livre -->


<!-- quand on crée un objet livre, on le met directement dans le tableaux de livres de l'auteur en question -->
<?php
// $message="Hello";
$message=$_GET['message'];
echo "<h1>$message</h1>";


// methode get dans l'url , variable spé $_GET (super globale) 
// permet de récupérer sous la forme d'un tableau l'ensemble des éléments dans l'url

// var dump permet d'affichier le contenu d'une variable 
// isset permet de savoir si la variable est affectée  ou non '$a=5', valeur boolean
// empty 
// cf doc php de php https://www.php.net/manual/fr/index.php

$message=$_GET['message']??"Bienvenue à Caen";
$nb=$_GET['nb']??1; 
$i=0;
while($i<$nb) {
    echo "<h1>$message</h1>";
    $i++;
}
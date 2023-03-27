<h1> Exercice  11 </h1>

<!-- énoncé -->
<P>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une<br>
chaîne de caractère représentant une date.<br>
Exemple :<br>
formaterDateFr("2018-02-23");</P>
<!--resultat -->
<h2>Resultat 11</h2>
<!-- balise php -->
<?php

// function formaterDateFr($ans, $mois, $jour)
// {
    
   
//     var_dump ($date);
    
    
//     echo $date->format('Y-m-d');
// }

// "23"

// formaterDateFr( 2018,02,23);
 
setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
$date = new DateTime("23-02-2018");
var_dump(LC_TIME);
var_dump($date);
echo $date->format('r');

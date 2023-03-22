<h1> Exercice  </h1>

<!-- énoncé -->
<P>Créer une fonction personnalisée convertirMajRouge()permettant de<br>
transformer une chaîne de caractère passée en argument en majuscules et en rouge.<br>
Vous devrez appeler la fonction comme suit: convertirMajRouge($texte);</P>
<!--resultat -->
<h2>Resultat</h2>
<!-- balise php -->
<?php
$texte = "mon texte en parametre";




function convertirMajRouge($a){
   $result = "<p style='color:red' >". $a ."</p>";
   return $result;
};


echo convertirMajRouge($texte);



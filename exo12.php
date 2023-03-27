<h1> Exercice  </h1>

<!-- énoncé -->
<P>La fonction var_dump($variable) permet d’afficher les informations d’une variable.<br>
Soit le tableau suivant :<br>
$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));<br>
A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.</P>
<!--resultat -->
<h2>Resultat</h2>
<!-- balise php -->
<?php
$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));


function vardumptableau($tableau)
{
    foreach ($tableau as $key => $valeurs) {
        var_dump($key); echo "<br>";
        var_dump($valeurs); echo "<br>";
      }
};


vardumptableau($tableauValeurs);

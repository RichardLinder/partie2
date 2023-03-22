<h1> Exercice 2 </h1>

<!-- énoncé -->
<P>Soit le tableau suivant:<br>
$capitales= array<br>
("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");<br>
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays s’affichera en majuscule<br>
et que le tableau est trié par ordre alphabétique du nom de pays) grâce à<br>
une fonction personnalisée.Vous devrez appeler la fonction comme suit: afficherTableHTML($capitales);</P>
<!--resultat -->
<h2>Resultat</h2>
<!-- balise php -->

<?php 
$capitales= array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");

function afficherTableHTML($a){
    
    sort($a);
    foreach ($a as $key => $val) {
        echo  $key;
    }

};

afficherTableHTML($capitales);
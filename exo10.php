<h1> Exercice 10  </h1>

<!-- énoncé -->
<P>
En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire <br>
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-<br>
mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation:<br>
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».<br>
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement<br>
de validation (submit).</P>
<!--resultat -->
<h2>Resultat</h2>
<!-- balise php -->
<?php
include_once './function.php';
$texte ;

$role=["Développeur Logiciel ", "Designer web" , "Intégrateur" , "Chef de projet"];


afficherRadio($role);
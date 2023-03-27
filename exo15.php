<h1> Exercice 15 </h1>

<!-- énoncé -->
<P>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une <br>
adresse e-mail a le bon format.</P>
<!--resultat -->
<h2>Resultat</h2>
<!-- balise php -->
<?php
$email1="abc@abc";

$email = "john.doe@example.com";


// var_dump(FILTER_VALIDATE_EMAIL);
function verificateuremail( $email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
        echo("L’adresse $email est une adresse e-mail valide");
        } else {
        echo("L’adresse $email est une adresse e-mail invalide");
        };
    };


    verificateuremail($email);
    echo "<br>";
    verificateuremail($email1);
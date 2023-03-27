<h1> Exercice 8 </h1>

<!-- énoncé -->
<P>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg <br>
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.<br>
Exemple :<br>
repeterImage($url,4);</P>
<!--resultat -->
<h2>Resultat</h2>
<!-- balise php -->
<?php
$url= "http://my.mobirise.com/data/userpic/764.jpg";
function repeterImage($url,int $n=1)
{
    for ($i=0; $i <$n ; $i++) { 

    ?><img src="<?php echo $url?>"
    alt="image répété">
    <?php        
       
    }
};

repeterImage($url ,4);
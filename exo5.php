<h1> Exercice  </h1>

<!-- énoncé -->
<P>Créer  une  fonction  personnalisée  permettant  de créer  un  formulaire  de  champs  de  texte  en<br>
précisant le nom des champs associés.<br>
Exemple:$nomsInput = array("Nom","Prénom","Ville");afficherInput($nomsInput);</P>
<!--resultat -->
<h2>Resultat</h2>
<!-- balise php -->
<?php

function formulaire( $tableau ,$titre="formulaire", $post=true )
{
    // balise form
    ?> 
    <form action=,

    <?php    
    // insertion du titre 

     echo $titre 
     
    //  htlm de la metode
     ?>

    method=""
    
    <?php
    // insertion métode
     if($post==true)
    {
        echo"post>";
    }
    else{
        echo"get>";
    }

    // lecture du tableau  pour inseré les valeur 
    foreach ($tableau as $key ) 
    {    
        ?><div><label for= "
        <? echo$key?>   
            
        ">
        <?php echo $key ?>  
        :</label><input type="text" id="
        
        <?php echo $key?>
        
        "name="user_
        
        <? echo $key ?>
        
        " >
        </div>
    <?php
    }
}
$nomsInput = array("Nom","Prénom","Ville");

formulaire($nomsInput);

// <form action="/ma-page-de-traitement" method="post">
//     <div>
//         <label for="name">Nom :</label>
//         <input type="text" id="name" name="user_name">
//     </div>
//     <div>
//         <label for="mail">e-mail&nbsp;:</label>
//         <input type="email" id="mail" name="user_mail">
//     </div>
//     <div>
//         <label for="msg">Message :</label>
//         <textarea id="msg" name="user_message"></textarea>
//     </div>
// </form>

<h1> Exercice 6 </h1>

<!-- énoncé -->
<P> Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau<br>
de valeurs.<br>
Exemple :<br>
$elements = array("Monsieur","Madame","Mademoiselle");<br>
alimenterListeDeroulante($elements);</P>
<!--resultat -->
<h2>Resultat</h2>
<!-- balise php -->
<?php
$elements = array("Monsieur","Madame","Mademoiselle");
// fonction qui transform un tableau en menus deroulant 
function alimenterListeDeroulante($tableau, $nom="menusDeroulant")


    {   
        ?><select name="<?php echo$nom;?>" id="<?php  echo $nom;?>-select">
        <option value="">--Choichisez une option--</option>
        <?php
        // creation de des element du menus 
        foreach ($tableau as $key ) 
            {
            ?>  <option value="<?php echo $key; ?>"><?php echo $key?></option> <?php
            };
        ?> </select> <?php
       

    };
//utilisé la fonction
alimenterListeDeroulante($elements);









// model de htlm

//  le label je l'ai suprimé il es là si bessoin 
// label for="pet-select">Choose a pet:</label>

// <select name="pets" id="pet-select">
//     <option value="">--Please choose an option--</option>
//     <option value="dog">Dog</option>
//     <option value="cat">Cat</option>
//     <option value="hamster">Hamster</option>
//     <option value="parrot">Parrot</option>
//     <option value="spider">Spider</option>
//     <option value="goldfish">Goldfish</option>
// </select>
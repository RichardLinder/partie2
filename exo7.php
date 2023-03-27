<h1> Exercice  </h1>

<!-- énoncé -->
<P>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser<br>
dans le tableau associatif si la case est cochée ou non.<br>
Exemple :<br>
genererCheckbox($elements);<br>
où $elements est un tableau associatif clé => valeur avec 3 entrées </P>
<!--resultat -->
<h2>Resultat</h2>
<!-- balise php -->
<?php

// tableau des choix
$elements =["choix 1"=>"chiens","choix 2"=>"ou chien" ,"choix 3"=>"chien bien sur"];


//fonction de creation de checkbox


function genererCheckbox($tableau)
{
    ?><fieldset>
        <legend>Choisier parmis les choix suivant :</legend>
    <?php
    foreach ($tableau as $key => $value) {
        ?><div>
        <input type="checkbox" id="<?php echo $key?>" name="<?php echo$key ?>" checked>
        <label for="<?php echo $key?>"><?php echo $value?></label> 
        </div>  
        <?php
    }
    ?></fieldset><?php

};


genererCheckbox($elements);




/* <fieldset>
    <legend>Choose your monster's features:</legend>

    <div>
      <input type="checkbox" id="scales" name="scales" checked>
      <label for="scales">Scales</label>
    </div>

    <div>
      <input type="checkbox" id="horns" name="horns">
      <label for="horns">Horns</label>
    </div>
</fieldset> */


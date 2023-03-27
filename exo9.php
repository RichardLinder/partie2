<h1> Exercice 9 </h1>

<!-- énoncé -->
<P>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de <br>
valeurs en paramètre ("Monsieur","Madame","Mademoiselle").<br>
Exemple :<br>
afficherRadio($nomsRadio);</P>
<!--resultat -->
<h2>Resultat</h2>
<!-- balise php -->
<?php
$nomsRadio =["Monsieur","Madame","Mademoiselle"];

function afficherRadio($tableau) 
{
    
?><form>
    <fieldset>
      <legend>Choix parmi les proposition suivante:</legend><?php
      $i=0;
        foreach ($tableau as $key  ) 
        {
            ?>
            <div>
              <input type="radio"  id="<?php echo $key?>" name="<?php echo $key?>" value="<?php echo $key?>"<?php
                    if( $i<1 ) 
                    {
                          echo "checked";                
                    }; ?>
                      >
                        <label for="<?php echo $key;?>"><?php echo $key;?></label>
              </div> 
          <?php $i++;
                  
        };?>
    

      </fieldset>
    </form>
    <input type="submit" value="Envoyer le formulaire">

      <?php
};

afficherRadio($nomsRadio);



// model htlm
/* <fieldset>
    <legend>Select a maintenance drone:</legend>

    <div>
      <input type="radio" id="huey" name="drone" value="huey"
             checked>
      <label for="huey">Huey</label>
    </div>

    <div>
      <input type="radio" id="dewey" name="drone" value="dewey">
      <label for="dewey">Dewey</label>
    </div>

    <div>
      <input type="radio" id="louie" name="drone" value="louie">
      <label for="louie">Louie</label>
    </div>
</fieldset> */

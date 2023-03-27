<?php function afficherRadio($tableau) 
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
    <input type="submit" value="Envoyer le formulaire"><?php
};
echo "teste";
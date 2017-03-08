    <fieldset>
        <label>Ascending order</label>  
        <input type="radio" name="order" value="ASC"
        <?php if ($order == ASC): ?>
               checked="checked"
               <?php endif; ?>
               />
        <label>Descending order</label> 
        <input type="radio" name="order" value="DESC"
            <?php if ($order == DESC): ?>
               checked="checked"
               <?php endif; ?>
               />
    </fieldset> 
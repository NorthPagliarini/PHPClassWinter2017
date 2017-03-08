    <fieldset>
        <label>Search:</label>  
        <select name="column">
            <option value="id" <?php if ($column == id): ?> selected <?php endif; ?>>ID</option>
            <option value="corp" <?php if ($column == corp): ?> selected <?php endif; ?>>Corporation Name</option>
            <option value="incorp_dt" <?php if ($column == incorp_dt): ?> selected <?php endif; ?>>Incorporation Date</option>
            <option value="email" <?php if ($column == email): ?> selected <?php endif; ?>>Email Address</option>        
            <option value="zipcode" <?php if ($column == zipcode): ?> selected <?php endif; ?>>Zip Code</option>
            <option value="owner" <?php if ($column == owner): ?> selected <?php endif; ?>>Owner Name</option>
            <option value="phone" <?php if ($column == phone): ?> selected <?php endif; ?>>Phone Number</option>
        </select>
    </fieldset>    
    <fieldset>
        <label>For: </label>
        <input name="searchTerms" type="search" value="<?php echo $searchTerms;?>" placeholder="Search...." />
    </fieldset>            
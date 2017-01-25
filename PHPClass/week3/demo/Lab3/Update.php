<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    </head>
    
    <body>
        <?php
        
            include './dbconnect.php';
            include './functions.php';
            
            
            
            $result = '';
            if (isPostRequest()) {
                $id = filter_input(INPUT_POST, 'id');
                $corp = filter_input(INPUT_POST, 'corp');
                $incorp_dt = filter_input(INPUT_POST, 'incorp_dt');
                $email = filter_input(INPUT_POST, 'email');
                $zipcode = filter_input(INPUT_POST, 'zipcode');
                $owner = filter_input(INPUT_POST, 'owner');
                $phone = filter_input(INPUT_POST, 'phone');
                
                
                $updated = updateCorpRow($id, $corp, $incorp_dt, $email, $zipcode, $owner, $phone);
                if ($updated)
                {
                    $result = "Record Updated";
                }
                else
                {
                    $result = "Record NOT Updated";
                }
            }
            else
            {
                $id = filter_input(INPUT_GET, 'id');
                if ( !isset($id) ) 
                {
                    exit('Record not found');
                }
                
                $row = viewOneFromCorps($id);
 
                $corp = $row['corp'];
                $incorp_dt = $row['incorp_dt'];
                $email = $row['email'];
                $zipcode = $row['zipcode'];
                $owner = $row['owner'];
                $phone = $row['phone'];
                
            }
        
        ?>
        <h1>Updating Record <?php echo $id;?></h1>
        
        <h1><?php echo $result; ?></h1>
        
        <form method="post" action="#">            
            Corp<input type="text" value="<?php echo $corp; ?>" name="corp" />
            <br />
            Incorporation Date<input type="date" value="<?php echo $incorp_dt; ?>" name="incorp_dt" />
            <br />
            Email<input type="text" value="<?php echo $email; ?>" name="email" />
            <br />
            Zipcode<input type="text" value="<?php echo $zipcode; ?>" name="zipcode" />
            <br />
            Owner<input type="text" value="<?php echo $owner; ?>" name="owner" />
            <br />
            Phone<input type="text" value="<?php echo $phone; ?>" name="phone" />
            <br />
            <input type="hidden" value="<?php echo $id; ?>" name="id" /> 
            <input type="submit" button type="button" class="btn btn-info" value="Update" />
        </form>
        
        <p> <a href="view-action.php" button type="button" class="btn btn-default">Back to view</a></p>
        
    </body>
</html>

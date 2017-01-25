<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Assignment 2 - Add Page</title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    </head>
    <h1>Add a Corporation</h1>
    <body>
        
        <?php
        include './dbconnect.php';
        include './functions.php';
        include './crud.php';

        $results = '';

        if (isPostRequest()) {
            $corp = filter_input(INPUT_POST, 'corp');
            $incorp_dt = filter_input(INPUT_POST, 'incorp_dt');
            $email = filter_input(INPUT_POST, 'email');
            $zipcode = filter_input(INPUT_POST, 'zipcode');
            $owner = filter_input(INPUT_POST, 'owner');
            $phone = filter_input(INPUT_POST, 'phone');

            $isItTrue = createCorpData($corp, $incorp_dt, $email, $zipcode, $owner, $phone);
            
            if($isItTrue === true)
            {
                $results = 'Data Add Successful!';
            }
            else 
            {
                $results = 'Data NOT Added!';
            }
            
        }
        ?>


        <h1><?php echo $results; ?></h1>

        <form method="post" action="#">            
            Corp<input type="text" value="" name="corp" />
            <br />
            Incorporation Date<input type="date" value="" name="incorp_dt" />
            <br />
            Email<input type="text" value="" name="email" />
            <br />
            Zipcode<input type="text" value="" name="zipcode" />
            <br />
            Owner<input type="text" value="" name="owner" />
            <br />
            Phone<input type="text" value="" name="phone" />
            <br />
            

            <input type="submit" value="Submit" class="btn btn-success" />
        </form>
        <a href="view-action.php?id=<?php echo $row['id']; ?>">Back to view</a> 
    </body>
</html>

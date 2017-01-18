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
    <h1>Add an Actor</h1>
    <body>
        
        <?php
        include './dbconnect.php';
        include './functions.php';
        include './crud.php';

        $results = '';

        if (isPostRequest()) {
            $fname = filter_input(INPUT_POST, 'fname');
            $lname = filter_input(INPUT_POST, 'lname');
            $dob = filter_input(INPUT_POST, 'dob');
            $height = filter_input(INPUT_POST, 'height');

            $isItTrue = createActorData($fname, $lname, $dob, $height);
            
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
            First Name<input type="text" value="" name="fname" />
            <br />
            Last Name<input type="text" value="" name="lname" />
            <br />
            Date of Birth<input type="date" value="" name="dob" />
            <br />
            Height<input type="text" value="" name="height" />
            <br />

            <input type="submit" value="Submit" class="btn btn-success" />
        </form>
        <a href="view.php?id=<?php echo $row['id']; ?>">Back to view</a> 
    </body>
</html>

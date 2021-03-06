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
        /*
         * include the data base connect file
         * and helper functions as if we are adding
         * the code on the page
         */
        include './dbconnect.php';
        include './functions.php';

        $results = viewAllFromCorps();
        ?>

        <a href="add.php?id=<?php echo $row['id']; ?>"type="button" class="btn btn-warning">Add a Corporation</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Corporation Name</th> 
                </tr>
            </thead>
            <?php
            /*
             * Use a for each loop to go through the
             * associative array. $results is a multi 
             * dimensional array. Arrays with arrays.
             * 
             * So we loop through each result to get back
             * an array with values
             * 
             * feel free to 
             * <?php echo print_r($results); ?>
             * to see how the array is structured
             */            
            ?>
            
            <?php foreach ($results as $row): ?>
                <tr>
                    <td><?php echo $row['corp']; ?></td>
                    <td><a href="Update.php?id=<?php echo $row['id']; ?>" button type="button" class="btn btn-success">Update</a></td>            
                    <td><a href="Delete.php?id=<?php echo $row['id']; ?> " button type="button" class="btn btn-danger">Delete</a></td>            
                    <td><a href="read-one.php?id=<?php echo $row['id']; ?>" button type="button" class="btn btn-info">Read</a></td>            
                </tr>
            <?php endforeach; ?>
            
        </table>
            
    </body>
</html>

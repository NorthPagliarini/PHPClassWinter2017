<?php
include './dbconnect.php';
include './functions.php';

$id = filter_input(INPUT_GET, 'id');
$row = viewOneFromCorps($id);
?>
<html>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <body>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Corporation</th>
                    <th>Incorporation Date</th>
                    <th>Email</th>
                    <th>Zipcode</th>
                    <th>Owner</th>
                    <th>Phone</th>
                </tr>
            </thead>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['corp']; ?></td>
                    <td><?php echo $row['incorp_dt']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['zipcode']; ?></td>
                    <td><?php echo $row['owner']; ?></td> 
                    <td><?php echo $row['phone']; ?></td> 
                    <td><a href="Update.php?id=<?php echo $row['id']; ?>" button type="button" class="btn btn-success">Update</a></td>            
                    <td><a href="Delete.php?id=<?php echo $row['id']; ?>" button type="button" class="btn btn-danger">Delete</a></td>                      
                </tr>
        </table>
        <a href="view-action.php?id=<?php echo $row['id']; ?>" button type="button" class="btn btn-default">Back to view</a> 
    </body>
</html>


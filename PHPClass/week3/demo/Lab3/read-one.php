<?php
include './dbconnect.php';
include './functions.php';

$id = filter_input(INPUT_GET, 'id');
$row = viewOneFromCorps($id);
?>
<html>
    <body>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>corp</th>
                    <th>incorp_dt</th>
                    <th>email</th>
                    <th>zipcode</th>
                    <th>owner</th>
                    <th>phone</th>
                    <th></th>
                    <th></th>
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
                    <td><a href="Update.php?id=<?php echo $row['id']; ?>">Update</a></td>            
                    <td><a href="Delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>                      
                </tr>
        </table>
        <a href="view-action.php?id=<?php echo $row['id']; ?>">Back to view</a> 
    </body>
</html>


<!DOCTYPE html>
<?php if(isset ($results) && is_array($results) && count($results) > 0): ?>
 <table border="1" class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Corporation Name</th>
                    <th>Incorporation Date</th>
                    <th>Email Address</th>
                    <th>Zip Code</th>
                    <th>Owner Name</th>
                    <th>Phone Number</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($results as $row): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['corp']; ?></td>
                    <td><?php echo date("M d, Y",strtotime($row['incorp_dt'])); ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['zipcode']; ?></td>
                    <td><?php echo $row['owner']; ?></td>
                    <td><?php echo $row['phone']; ?></td> 
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
<?php else: ?>
<h1>You got Nothin'</h1>
<?php endif; ?>


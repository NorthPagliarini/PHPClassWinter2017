<?php
require_once("db.php");
$categoryID = $_GET['category'];
if ( empty($categoryID) ){
    $categoryID = 1;
}
$sql = "SELECT * FROM caegories";
try {
    $results = $db->query($sql);
}
catch (PDOException $e){
    die("There was a problem with the select categories query.");
}

?>
<form action='index.php' method='get'>
    <select name="category">
        <?php
        foreach($results as $row){
            echo "<option value='" . $row['categoryID'] . "'>";
            echo $row['categoryName'];
            echo "</option>\n";
        }
        ?>
    </select>
    <input type="submit" />
</form>
<?php
$sql = "SELECT categoryName FROM categories WHERE categoryID=$categoryID";
$results = $db->query($sql);
$row = $results->fetch();
?>
<h1>Products for <?php echo $row['categoryName']; ?></h1>
<?php
require_once("db.php");
$categoryID = $_GET['category'];
if ( empty($categoryID) ){
    $categoryID = 1;
}
$sql = "SELECT * FROM categories";
$results = $db->query($sql);
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
<style>
td {
    border: 1px solid black;
}
</style>
<?php
$sql = "SELECT categoryName FROM categories WHERE categoryID=$categoryID";
$results = $db->query($sql);
$row = $results->fetch();
?>
<h1>Products for <?php echo $row['categoryName']; ?></h1>
<?php
switch ($categoryID)
{
	case 1:
	$EndNum = 5;
	$StartingNum = 1;
	break;
	case 2:
	$EndNum = 8;
	$StartingNum = 7;
	break;
	case 3;
	$EndNum = 10;
	$StartingNum = 9;
	break;
}

echo "<table>
		<tbody>";
		echo "<tr>" ;
	
	for ($row = $StartingNum; $row <= $EndNum; $row++)
	{	

		$sql = "SELECT productName FROM products WHERE ProductID = $row && categoryID = $categoryID";	
		$results = $db->query($sql);
		$products = $results->fetch();
		
		$product = $products['productName'];
		
		echo "<td>
	$product  <span style='color: #ffffff;'></span>
      </td>";
		
	}

echo "</tr>
		</tbody>
	</table>";
?>
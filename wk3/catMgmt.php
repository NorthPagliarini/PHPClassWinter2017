<?php
require_once('db.php'); // Need the database

/********** Functions **********/
function display_categories($db) {
    try {
        $stmt = $db->prepare("SELECT * FROM categories");
        $stmt->execute();
        while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ){
            echo "<div>" . $row['categoryName'];
            echo "\n\t<form action='" . $_SERVER['SCRIPT_NAME']. "' method='post'>";
            echo "\n\t\t<input type='submit' value='Edit' name='action' />";
            echo "\n\t\t<input type='hidden' name='categoryID' value='" . $row['categoryID'] . "' />";
            echo "</form>\n";
            echo "\n\t<form action='" . $_SERVER['SCRIPT_NAME']. "' method='post'>";
            echo "\n\t\t<input type='submit' value='Delete' name='action' />";
             echo "\n\t\t<input type='hidden' name='categoryID' value='" . $row['categoryID'] . "' />";
            echo "</form>\n";
            echo "</div>";
        }
    } catch(PDOException $e) {
        die("There was a problem getting the category list");
    }
}

function display_form($db, $categoryID="") {
    if ($categoryID == ""){
        echo "<div>";
        echo "\n\t<form action='" . $_SERVER['SCRIPT_NAME']. "' method='post'>";
        echo "<input type='text' name='categoryName' />";
        echo "\n\t\t<input type='submit' value='Add' name='action' />";
        echo "</form>";
        echo "</div>";
    } else {
        echo "<div>";
        echo "\n\t<form action='" . $_SERVER['SCRIPT_NAME']. "' method='post'>";
        try {
            $stmt = $db->prepare("SELECT categoryName FROM categories WHERE categoryID=:categoryID");
            $stmt->bindParam(':categoryID', $categoryID, PDO::PARAM_INT);
            $stmt->execute();
            while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
                $categoryName = $row['categoryName'];
            }
        } catch (PDOException $e) {
            die("There was a problem retrieving the categoryName");
        }
        echo "<input type='text' name='categoryName' value='". $categoryName ."' />";
        echo "<input type='hidden' name='categoryID' value='" . $categoryID . "' />";
        echo "\n\t\t<input type='submit' value='Update' name='action' />";
        echo "</form>";
        echo "</div>";
		switch ($categoryID)
		{
			case 1: 
			$stmt = $db->prepare("SELECT * FROM products WHERE categoryID = 1");
			$stmt->execute();
			while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ){
            echo "<div>" . $row['productName'];
            echo "\n\t<form action='" . $_SERVER['SCRIPT_NAME']. "' method='post'>";
            echo "\n\t\t<input type='submit' value='Edit' name='action' />";
            echo "\n\t\t<input type='hidden' name='productName' value='" . $row['productName'] . "' />";
            echo "</form>\n";
            echo "\n\t<form action='" . $_SERVER['SCRIPT_NAME']. "' method='post'>";
            echo "\n\t\t<input type='submit' value='Delete' name='action' />";
            echo "\n\t\t<input type='hidden' name='productName' value='" . $row['productName'] . "' />";
            echo "</form>\n";
            echo "</div>";
			}
			break;
			
			case 2: 
			$stmt = $db->prepare("SELECT * FROM products WHERE categoryID = 2");
			$stmt->execute();
			while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ){
            echo "<div>" . $row['productName'];
            echo "\n\t<form action='" . $_SERVER['SCRIPT_NAME']. "' method='post'>";
            echo "\n\t\t<input type='submit' value='Edit' name='action' />";
            echo "\n\t\t<input type='hidden' name='productName' value='" . $row['productName'] . "' />";
            echo "</form>\n";
            echo "\n\t<form action='" . $_SERVER['SCRIPT_NAME']. "' method='post'>";
            echo "\n\t\t<input type='submit' value='Delete' name='action' />";
            echo "\n\t\t<input type='hidden' name='productName' value='" . $row['productName'] . "' />";
            echo "</form>\n";
            echo "</div>";
			}
			break;
			
			case 3: 
			$stmt = $db->prepare("SELECT * FROM products WHERE categoryID = 3");
			$stmt->execute();
			while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ){
            echo "<div>" . $row['productName'];
            echo "\n\t<form action='" . $_SERVER['SCRIPT_NAME']. "' method='post'>";
            echo "\n\t\t<input type='submit' value='Edit' name='action' />";
            echo "\n\t\t<input type='hidden' name='productName' value='" . $row['productName'] . "' />";
            echo "</form>\n";
            echo "\n\t<form action='" . $_SERVER['SCRIPT_NAME']. "' method='post'>";
            echo "\n\t\t<input type='submit' value='Delete' name='action' />";
            echo "\n\t\t<input type='hidden' name='productName' value='" . $row['productName'] . "' />";
            echo "</form>\n";
            echo "</div>";
			}
			break;
		}

		if ($productID == ""){
			echo "<div>";
			echo "\n\t<form action='" . $_SERVER['SCRIPT_NAME']. "' method='post'>";
			echo "<input type='text' name='action' />";
			echo "\n\t\t<input type='submit' value='Add Product' name='action' />";
			echo "</form>";
			echo "</div>";
			} 
    }
}

function add_category($db, $categoryName) {
    try{
        $stmt = $db->prepare("INSERT INTO categories (categoryName) VALUES (:categoryName)");
        $stmt->bindParam(':categoryName', $categoryName, PDO::PARAM_STR);
        $stmt->execute();
    }catch(PDOException $e) {
        die("There was a problem adding the new category");
    }
}

function add_product($db, $productName) {
    try{
        $stmt = $db->prepare("INSERT INTO products (productName) VALUES (:productName)");
        $stmt->bindParam(':productName', $productName, PDO::PARAM_STR);
        $stmt->execute();
    }catch(PDOException $e) {
        die("There was a problem adding the new product");
    }
}

function delete_category($db, $categoryID){
    try {
        $stmt = $db->prepare("DELETE FROM categories WHERE categoryID=:categoryID");
        $stmt->bindParam(':categoryID', $categoryID, PDO::PARAM_INT);
        $stmt->execute();
    }catch(PDOException $e) {
        die("There was a problem deleting the category.");
    }
}

function update_category($db, $categoryID, $categoryName){
    try {
        $stmt = $db->prepare("UPDATE categories SET categoryName=:categoryName WHERE categoryID=:categoryID");
        $stmt->bindParam(':categoryName', $categoryName, PDO::PARAM_STR);
        $stmt->bindParam(':categoryID', $categoryID, PDO::PARAM_INT);
        $stmt->execute();
    } catch(PDOException $e) {
        die("There was a problem updating $categoryID with name $categoryName");
    }
}

/******* Grab data ********/
$action = $_POST['action'];
$categoryID = $_POST['categoryID'];
$categoryName = $_POST['categoryName'];

/******* Page Logic Starts Here ********/
if ( !empty($action) ) :
    switch ($action) {
        case "Add":
            add_category($db, $categoryName);
            break;
        case "Edit":
            // display_form will take care of this based on presence of categoryID
            break;
        case "Update":
            update_category($db, $categoryID, $categoryName);
            $categoryID = "";
            break;
        case "Delete":
            delete_category($db, $categoryID);
            $categoryID = "";
            break;
		case "Add Product":
            add_product($db, $productName);
            $productID = "";
            break;
    }
endif;
display_categories($db);
display_form($db, $categoryID);
?>
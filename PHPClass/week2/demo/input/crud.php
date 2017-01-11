<?php

//Create Data for table test
function createTestData($dataone, $datatwo) 
{
    $result = false;
    
    $db = getDatabase();
    
    $stmt = $db->prepare("INSERT INTO test SET dataone = :dataone, datatwo = :datatwo");
    
    $binds = array(
        ":dataone" => $dataone,
        ":datatwo" => $datatwo
    );
    
    if ($stmt->execute($binds) && $stmt->rowCount() > 0)
    {
        $results = true;
    }
    
    return $result;  
}

//Gets all the data from Test table
function readAllFromTest() 
{
     $db = getDatabase();
     
     $stmt = $db->prepare("SELECT * FROM test");
     
     $results = array();
    if ($stmt->execute() && $stmt->rowCount() > 0) 
    {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    return $results;
}

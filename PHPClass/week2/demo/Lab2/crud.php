<?php

//Create Data for Actor test
function createActorData($fname, $lname) 
{
    $dob = 123456;
    $height = 12;
    
    $result = false;
    
    $db = getDatabase();
    
    $stmt = $db->prepare("INSERT INTO actors SET firstname = :firstname, lastname = :lastname, dob = :dob, height = :height");
    
    $binds = array(
        ":firstname" => $fname,
        ":lastname" => $lname,
        ":dob" => $dob,
        ":height" => $height
    );
    
    if ($stmt->execute($binds) && $stmt->rowCount() > 0)
    {
        $result = true;
    }
    
    return $result;  
}

//Gets all the data from Actors table
function readAllFromActor() 
{
     $db = getDatabase();
     
     $stmt = $db->prepare("SELECT * FROM actors");
     
     $results = array();
    if ($stmt->execute() && $stmt->rowCount() > 0) 
    {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    return $results;
}

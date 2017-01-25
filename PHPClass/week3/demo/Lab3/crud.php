<?php

//Create Data for Actor test
function createCorpData($corp, $incorp_dt, $email, $zipcode, $owner, $phone) 
{
    
    $result = false;
    
    $db = getDatabase();
    
    $stmt = $db->prepare("INSERT INTO corps SET corp = :corp, incorp_dt = :incorp_dt, email = :email, zipcode = :zipcode, owner = :owner, phone = :phone");
    
    $binds = array(
        ":corp" => $corp,
        ":incorp_dt" => $incorp_dt,
        ":email" => $email,
        ":zipcode" => $zipcode,
        ":owner" => $owner,
        ":phone" => $phone
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

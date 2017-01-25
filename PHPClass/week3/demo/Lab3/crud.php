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

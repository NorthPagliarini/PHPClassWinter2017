<?php

/**
 * A method to check if a Post request has been made.
 *    
 * @return boolean
 */
function isPostRequest() {
    return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST' );
}

function deleteFromCorps($id)
{
    $isDeleted = false;
    $db = getDatabase();
    $stmt = $db->prepare("DELETE FROM corps WHERE id = :id");
    
    $binds = array(
        ":id" => $id
    );
    
    if ($stmt->execute($binds) && $stmt->rowCount() > 0) 
    {
        $isDeleted = true;
    }
    return $isDeleted;
}

function viewAllFromCorps() {
    
        $db = getDatabase();
        $stmt = $db->prepare("SELECT * FROM corps");
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return $results;
}

function viewOneFromCorps($id) {
    
        $db = getDatabase();
        $stmt = $db->prepare("SELECT * FROM corps WHERE id = :id");
        
        $binds = array(
            ":id" => $id
        );
        
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        return $results;
}

function updateCorpRow($id, $corp, $incorp_dt, $email, $zipcode, $owner, $phone)
{
    $results = false;
    
    $db = getDatabase();
    $stmt = $db->prepare("UPDATE corps SET corp = :corp, incorp_dt = :incorp_dt, email = :email, zipcode = :zipcode, owner = :owner, phone = :phone WHERE id = :id");
    
    $binds = array(
        ":id" => $id,
        ":corp" => $corp,
        ":incorp_dt" => $incorp_dt,
        ":email" => $email,
        ":zipcode" => $zipcode,
        ":owner" => $owner,
        ":phone" => $phone
    );
    
    if ($stmt->execute($binds) && $stmt->rowCount() > 0) 
        {
            $results = true;
        }
    return $results;
    
}




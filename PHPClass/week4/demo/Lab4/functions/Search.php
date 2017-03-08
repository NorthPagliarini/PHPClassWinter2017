<?php

function searchForThis($searchTerms, $column, $order){
    $db = dbconnect();
           
    $stmt = $db->prepare("SELECT * FROM corps WHERE $column LIKE :search ORDER BY $column $order");

            $search = '%'.$searchTerms.'%';
            $binds = array(
                ":search" => $search
            );
            $results = array();
            if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
    return $results;
}


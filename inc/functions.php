<?php
function search_intakes($search) {
    include("insert.php");

    try {
        $sql = "
            SELECT first_name, last_name,records_number,date_of_birth
            FROM Intake
            WHERE first_name
                LIKE ?
            ORDER BY 
            last_name";
        $results = $dbh->prepare($sql);
        $results->bindValue(1,"%".$search."%",PDO::PARAM_STR); 
        $results->execute();
    } catch (Exception $e) {
        echo "Unable to retrieve results";
        exit;
    }
    $intake = $results->fetchall();
    return $intake;
}
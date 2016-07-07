<?php
function check_input($input) {
  $data = filter_input(INPUT_POST, $input, FILTER_SANITIZE_STRING);

  return $data;
}

function search_intakes($search) {
  include("connection.php");

  try {
    $sql = "
      SELECT id, first_name, last_name, full_name, records_number,date_of_birth
      FROM Intake
      WHERE full_name LIKE ? 
        OR first_name LIKE ?
        OR  last_name LIKE ?
        OR records_number LIKE ?
        OR date_of_birth LIKE ?
      ORDER BY last_name";
        $results = $dbh->prepare($sql);
        $results->bindValue(1,"%".$search."%",PDO::PARAM_STR);
        $results->bindValue(2,"%".$search."%",PDO::PARAM_STR);
        $results->bindValue(3,"%".$search."%",PDO::PARAM_STR);
        $results->bindValue(4,"%".$search."%",PDO::PARAM_STR);
        $results->bindValue(5,"%".$search."%",PDO::PARAM_STR);
        $results->execute();
    } catch (Exception $e) {
        echo "Unable to retrieve results.";
        exit;
    }
    $intake = $results->fetchall();
    return $intake;
}

function search_results_html($results) {
  $output = "";

  foreach ($results as $result => $value) {
    $output .= "<div class='col-md-4'><p><a href='details.php?id=" . $value["id"] . "'>" . $value["full_name"] . "</p></div>" . 
    "<div class='col-md-4'><p>" . $value["records_number"] . "</p></div>" . 
    "<div class='col-md-4'><p>" . $value["date_of_birth"] . "</a></p></div>";
  }

  return $output;
}

function search_details($id) {
  include('connection.php');

  try {
    $sql = "SELECT * FROM Intake WHERE id = ?";
    $results = $dbh->prepare($sql);
    $results->bindValue(1,$id,PDO::PARAM_INT);
    $results->execute();
  } catch (Exception $e) {
    echo "Unable to retrieve search details.";
    exit;
  }
  $search_results = $results->fetch(PDO::FETCH_ASSOC);
  return $search_results;
}
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
ini_set("html_errors", 1);

include("connection.php");
 
// Escape user inputs for security
$first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING);
$last_name = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING);
$full_name = $first_name . " " . $last_name;
$records_number = filter_input(INPUT_POST, 'records_number', FILTER_SANITIZE_STRING);
$unformatted_date_of_birth = filter_input(INPUT_POST, 'date_of_birth', FILTER_SANITIZE_STRING);
$date_of_birth = date('Y-m-d', strtotime($unformatted_date_of_birth));
$diagnosis = filter_input(INPUT_POST, 'diagnosis', FILTER_SANITIZE_STRING);
$service = filter_input(INPUT_POST, 'service', FILTER_SANITIZE_STRING);
$q_1 = filter_input(INPUT_POST, 'q_1', FILTER_SANITIZE_STRING);
$q_2 = filter_input(INPUT_POST, 'q_2', FILTER_SANITIZE_STRING);
$q_3 = filter_input(INPUT_POST, 'q_3', FILTER_SANITIZE_STRING);
$q_4 = filter_input(INPUT_POST, 'q_4', FILTER_SANITIZE_STRING);
$q_5 = filter_input(INPUT_POST, 'q_5', FILTER_SANITIZE_STRING);
$q_6 = filter_input(INPUT_POST, 'q_6', FILTER_SANITIZE_STRING);
$q_7 = filter_input(INPUT_POST, 'q_7', FILTER_SANITIZE_STRING);
$q_8 = filter_input(INPUT_POST, 'q_8', FILTER_SANITIZE_STRING);
$q_9 = filter_input(INPUT_POST, 'q_9', FILTER_SANITIZE_STRING);
$q_10 = filter_input(INPUT_POST, 'q_10', FILTER_SANITIZE_STRING);
$q_11 = filter_input(INPUT_POST, 'q_11', FILTER_SANITIZE_STRING);
$q_12 = filter_input(INPUT_POST, 'q_12', FILTER_SANITIZE_STRING);
$q_13 = filter_input(INPUT_POST, 'q_13', FILTER_SANITIZE_STRING);
$q_14 = filter_input(INPUT_POST, 'q_14', FILTER_SANITIZE_STRING);
$q_15 = filter_input(INPUT_POST, 'q_15', FILTER_SANITIZE_STRING);
$q_16 = filter_input(INPUT_POST, 'q_16', FILTER_SANITIZE_STRING);
$q_17 = filter_input(INPUT_POST, 'q_17', FILTER_SANITIZE_STRING);
$q_18 = filter_input(INPUT_POST, 'q_18', FILTER_SANITIZE_STRING);
$q_19 = filter_input(INPUT_POST, 'q_19', FILTER_SANITIZE_STRING);
$q_20 = filter_input(INPUT_POST, 'q_20', FILTER_SANITIZE_STRING);
$q_21 = filter_input(INPUT_POST, 'q_21', FILTER_SANITIZE_STRING);
$q_22 = filter_input(INPUT_POST, 'q_22', FILTER_SANITIZE_STRING);
$q_23 = filter_input(INPUT_POST, 'q_23', FILTER_SANITIZE_STRING);
$q_24 = filter_input(INPUT_POST, 'q_24', FILTER_SANITIZE_STRING);
$therapist_comments = filter_input(INPUT_POST, 'therapist_comments', FILTER_SANITIZE_STRING);
$therapist_name = filter_input(INPUT_POST, 'therapist_name', FILTER_SANITIZE_STRING);
$unformatted_entered_date = filter_input(INPUT_POST, 'entered_date', FILTER_SANITIZE_STRING);
$entered_date = date('Y-m-d', strtotime($unformatted_entered_date));

 
// attempt insert query execution
try {
	$sql = $dbh->prepare("INSERT INTO intakes.Intake (first_name, last_name, full_name, records_number, date_of_birth, diagnosis, service, q_1, q_2, q_3, q_4, q_5, q_6, q_7, q_8, q_9, q_10, q_11, q_12, q_13, q_14, q_15, q_16, q_17, q_18, q_19, q_20, q_21, q_22, q_23, q_24, therapist_comments, therapist_name, entered_date) VALUES ('$first_name', '$last_name', '$full_name', '$records_number', '$date_of_birth', '$diagnosis', '$service', '$q_1', '$q_2', '$q_3', '$q_4', '$q_5', '$q_6', '$q_7', '$q_8', '$q_9', '$q_10', '$q_11', '$q_12', '$q_13', '$q_14', '$q_15', '$q_16', '$q_17', '$q_18', '$q_19', '$q_20', '$q_21', '$q_22', '$q_23', '$q_24', '$therapist_comments', '$therapist_name', '$entered_date')");
	$sql->execute();
}  catch (Exception $e) {
  echo "Failed: " . $e->getMessage();
}
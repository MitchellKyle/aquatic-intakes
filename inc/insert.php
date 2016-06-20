<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
ini_set("html_errors", 1);

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "root", "intakes");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_POST['first_name']);
$last_name = mysqli_real_escape_string($link, $_POST['last_name']);
$records_number = mysqli_real_escape_string($link, $_POST['records_number']);
$date_of_birth = mysqli_real_escape_string($link, $_POST['date_of_birth']);
$diagnosis = mysqli_real_escape_string($link, $_POST['diagnosis']);
$service = mysqli_real_escape_string($link, $_POST['service']);
$q_1 = mysqli_real_escape_string($link, $_POST['q_1']);
$q_2 = mysqli_real_escape_string($link, $_POST['q_2']);
$q_3 = mysqli_real_escape_string($link, $_POST['q_3']);
$q_4 = mysqli_real_escape_string($link, $_POST['q_4']);
$q_5 = mysqli_real_escape_string($link, $_POST['q_5']);
$q_6 = mysqli_real_escape_string($link, $_POST['q_6']);
$q_7 = mysqli_real_escape_string($link, $_POST['q_7']);
$q_8 = mysqli_real_escape_string($link, $_POST['q_8']);
$q_9 = mysqli_real_escape_string($link, $_POST['q_9']);
$q_10 = mysqli_real_escape_string($link, $_POST['q_10']);
$q_11 = mysqli_real_escape_string($link, $_POST['q_11']);
$q_12 = mysqli_real_escape_string($link, $_POST['q_12']);
$q_13 = mysqli_real_escape_string($link, $_POST['q_13']);
$q_14 = mysqli_real_escape_string($link, $_POST['q_14']);
$q_15 = mysqli_real_escape_string($link, $_POST['q_15']);
$q_16 = mysqli_real_escape_string($link, $_POST['q_16']);
$q_17 = mysqli_real_escape_string($link, $_POST['q_17']);
$q_18 = mysqli_real_escape_string($link, $_POST['q_18']);
$q_19 = mysqli_real_escape_string($link, $_POST['q_19']);
$q_20 = mysqli_real_escape_string($link, $_POST['q_20']);
$q_21 = mysqli_real_escape_string($link, $_POST['q_21']);
$q_22 = mysqli_real_escape_string($link, $_POST['q_22']);
$q_23 = mysqli_real_escape_string($link, $_POST['q_23']);
$q_24 = mysqli_real_escape_string($link, $_POST['q_24']);
$therapist_comments = mysqli_real_escape_string($link, $_POST['therapist_comments']);
$therapist_name = mysqli_real_escape_string($link, $_POST['therapist_name']);
$entered_date = mysqli_real_escape_string($link, $_POST['entered_date']);
 
// attempt insert query execution
$sql = "INSERT INTO intakes.Intake (first_name, last_name, records_number, date_of_birth, diagnosis, service, q_1, q_2, q_3, q_4, q_5, q_6, q_7, q_8, q_9, q_10, q_11, q_12, q_13, q_14, q_15, q_16, q_17, q_18, q_19, q_20, q_21, q_22, q_23, q_24, therapist_comments, therapist_name, entered_date) VALUES ('$first_name', '$last_name', '$records_number', '$date_of_birth', '$diagnosis', '$service', '$q_1', '$q_2', '$q_3', '$q_4', '$q_5', '$q_6', '$q_7', '$q_8', '$q_9', '$q_10', '$q_11', '$q_12', '$q_13', '$q_14', '$q_15', '$q_16', '$q_17', '$q_18', '$q_19', '$q_20', '$q_21', '$q_22', '$q_23', '$q_24', '$therapist_comments', '$therapist_name', '$entered_date')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);

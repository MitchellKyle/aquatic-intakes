<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
ini_set("html_errors", 1);

include("connection.php");
include('functions.php');

if ($_POST) {
	// Escape user inputs for security
	$first_name = check_input('first_name');
	$last_name = check_input('last_name');
	$full_name = $first_name . " " . $last_name;
	$records_number = check_input('records_number');
	$unformatted_date_of_birth = check_input('date_of_birth');
	$date_of_birth = date('Y-m-d', strtotime($unformatted_date_of_birth));
	$diagnosis = filter_input(INPUT_POST,'diagnosis',FILTER_SANITIZE_SPECIAL_CHARS);
	$service = check_input('service');
	$q_1 = check_input('q_1');
	$q_2 = check_input('q_2');
	$q_3 = check_input('q_3');
	$q_4 = check_input('q_4');
	$q_5 = check_input('q_5');
	$q_6 = check_input('q_6');
	$q_7 = check_input('q_7');
	$q_8 = check_input('q_8');
	$q_9 = check_input('q_9');
	$q_9_more = check_input('q_9_more');
	$q_10 = check_input('q_10');
	$q_11 = check_input('q_11');
	$q_12 = check_input('q_12');
	$q_12_more = check_input('q_12_more');
	$q_13 = check_input('q_13');
	$q_14 = check_input('q_14');
	$q_15 = check_input('q_15');
	$q_16 = check_input('q_16');
	$q_17 = check_input('q_17');
	$q_18 = check_input('q_18');
	$q_19 = check_input('q_19');
	$q_20 = check_input('q_20');
	$q_21 = check_input('q_21');
	$q_22 = check_input('q_22');
	$q_23 = check_input('q_23');
	$q_24 = filter_input(INPUT_POST,'q_24',FILTER_SANITIZE_SPECIAL_CHARS);
	$therapist_comments = filter_input(INPUT_POST,'therapist_comments',FILTER_SANITIZE_SPECIAL_CHARS);
	$therapist_name = check_input('therapist_name');
	$unformatted_entered_date = check_input('entered_date');
	$entered_date = date('Y-m-d', strtotime($unformatted_entered_date));

	// Validates all required fields are entered
	if (empty($first_name)) {
		$error_message = "Please Enter First Name.";
	}
	if (empty($last_name)) {
		$error_message = "Please Enter Last Name.";
	}
	if (empty($records_number)) {
		$error_message = "Please Enter Medical Records Number.";
	}
	if (empty($date_of_birth)) {
		$error_message = "Please Enter Date of Birth.";
	}
	if (empty($diagnosis)) {
		$error_message = "Please Enter Diagnosis.";
	}
	if (empty($service)) {
		$error_message = "Please Enter Service.";
	}
	if (empty($q_1)) {
		$error_message = "Please Answer Question 1.";
	}
	if (empty($q_2)) {
		$error_message = "Please Answer Question 2.";
	}
	if (empty($q_3)) {
		$error_message = "Please Answer Question 3.";
	}
	if (empty($q_4)) {
		$error_message = "Please Answer Question 4.";
	}
	if (empty($q_5)) {
		$error_message = "Please Answer Question 5.";
	}
	if (empty($q_6)) {
		$error_message = "Please Answer Question 6.";
	}
	if (empty($q_7)) {
		$error_message = "Please Answer Question 7.";
	}
	if (empty($q_8)) {
		$error_message = "Please Answer Question 8.";
	}
	if (empty($q_9)) {
		$error_message = "Please Answer Question 9.";
	}
	if (empty($q_10)) {
		$error_message = "Please Answer Question 10.";
	}
	if (empty($q_11)) {
		$error_message = "Please Answer Question 11.";
	}
	if (empty($q_12)) {
		$error_message = "Please Answer Question 12.";
	}
	if (empty($q_13)) {
		$error_message = "Please Answer Question 13.";
	}
	if (empty($q_14)) {
		$error_message = "Please Answer Question 14.";
	}
	if (empty($q_15)) {
		$error_message = "Please Answer Question 15.";
	}
	if (empty($q_16)) {
		$error_message = "Please Answer Question 16.";
	}
	if (empty($q_17)) {
		$error_message = "Please Answer Question 17.";
	}
	if (empty($q_18)) {
		$error_message = "Please Answer Question 18.";
	}
	if (empty($q_19)) {
		$error_message = "Please Answer Question 19.";
	}
	if (empty($q_20)) {
		$error_message = "Please Answer Question 20.";
	}
	if (empty($q_21)) {
		$error_message = "Please Answer Question 21.";
	}
	if (empty($q_22)) {
		$error_message = "Please Answer Question 22.";
	}
	if (empty($q_23)) {
		$error_message = "Please Answer Question 23.";
	}
	if (empty($q_24)) {
		$error_message = "Please Answer Question 24.";
	}
	if (empty($therapist_name)) {
		$error_message = "Please Enter Therapist Name.";
	}
	if (empty($entered_date)) {
		$error_message = "Please Enter Today's Date.";
	}

	// Checks to see if Questions 9 and 12 were answered yes, if so additional information is required

	if ($q_9 == "yes" && $q_9_more == "") {
		$error_message = "Please specify diagnosed antibiotic resistant organism. (Question 9)";
	}

	if ($q_12 == "yes" && $q_12_more == "") {
		$error_message = "Please specify where skin rash/lesions location. (Question 12)";
	}

	 
	// attempt insert query execution
	if (!isset($error_message)) {
		try {
			$sql = $dbh->prepare("INSERT INTO intakes.Intake (first_name, last_name, full_name, records_number, date_of_birth, diagnosis, service, q_1, q_2, q_3, q_4, q_5, q_6, q_7, q_8, q_9, q_9_more, q_10, q_11, q_12, q_12_more, q_13, q_14, q_15, q_16, q_17, q_18, q_19, q_20, q_21, q_22, q_23, q_24, therapist_comments, therapist_name, entered_date) VALUES ('$first_name', '$last_name', '$full_name', '$records_number', '$date_of_birth', '$diagnosis', '$service', '$q_1', '$q_2', '$q_3', '$q_4', '$q_5', '$q_6', '$q_7', '$q_8', '$q_9', '$q_9_more', '$q_10', '$q_11', '$q_12', '$q_12_more', '$q_13', '$q_14', '$q_15', '$q_16', '$q_17', '$q_18', '$q_19', '$q_20', '$q_21', '$q_22', '$q_23', '$q_24', '$therapist_comments', '$therapist_name', '$entered_date')");
			if($sql->execute()) {
				$success = "Submission Successful. Thank you.";
			}
		}  catch (Exception $e) {
		  echo "Failed: " . $e->getMessage();
		}
	}
}
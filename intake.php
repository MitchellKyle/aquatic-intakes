<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
ini_set("html_errors", 1);

include("inc/header.php");
include("inc/insert.php");
?>

	<div class="container-fluid">
		<div>
			<h1>Aquatic Therapy Intake Questionnaire</h1>
			<?php
			if (isset($success)) {
				echo "<div>" . $success . "</div>";
			} else {
				if (isset($error_message)) {
					echo "<p>" . $error_message . "</p>";
				} else {
					echo "* Denotes a required field.";
				}
			}
			?>
		</div>

		<form action="" method="POST">

			<fieldset>
				<div class="row">

			<!-- First Name -->
					<div class="col-md-6">
						<div class="col-md-12">
							<label for="first_name">First Name:</label>
						</div>
						<div class="col-md-12">
							<input type="text" id="first_name" name="first_name" value="<?php if (isset($first_name)) { echo $first_name; } ?>">
						</div>
					</div>

			<!-- Last Name -->
					<div class="col-md-6">
						<div class="col-md-12">
							<label for="last_name">Last Name:</label>
						</div>
						<div class="col-md-12">
							<input type="text" id="last_name" name="last_name" value="<?php if (isset($last_name)) { echo $last_name; } ?>">
						</div>
					</div>

			<!-- MR Number -->
					<div class="col-md-6">
						<div class="col-md-12">
							<label for="mr_number">Medical Records Number:</label>
						</div>
						<div class="col-md-12">
							<input type="text" id="mr_number" name="records_number" value="<?php if (isset($records_number)) { echo $records_number; } ?>">
						</div>
					</div>

			<!-- DOB -->
					<div class="col-md-6">
						<div class="col-md-12">
							<label for="dob">DOB (MM/DD/YYYY):</label>
						</div>
						<div class="col-md-12">
							<input type="text" id="dob" name="date_of_birth" value="<?php if (isset($unformatted_date_of_birth)) { echo $unformatted_date_of_birth; } ?>">
						</div>
					</div>

			<!-- Diagnosis -->
					<div class="col-md-6">
						<div class="col-md-12">
							<label for="diagnosis">Diagnosis:</label>
						</div>
						<div class="col-md-12">
							<textarea id="diagnosis" name="diagnosis"><?php if (isset($diagnosis)) { echo htmlspecialchars($_POST["diagnosis"]); } ?></textarea>
						</div>
					</div>

			<!-- Service -->
					<div class="col-md-6">
						<div class="col-md-12">
							<label>Service:</label>
							<label for="ip">IP</label><input type="radio" id="ip" value="IP" name="service"<?php if (isset($service) && $service=="IP") { echo " checked"; } ?>>
							<label for="op">OP</label><input type="radio" id="op" value="OP" name="service"<?php if (isset($service) && $service=="OP") { echo " checked"; } ?>>
						</div>
					</div>

				</div>
			</fieldset>

			<fieldset>
				<legend>Basic Information</legend>
				<div class="row">

			<!-- Qustion 1 -->
					<div class="col-md-8">
						<label>1. What is your level of experience in the water?</label>
					</div>
					<div class="col-md-4">
						<label for="beginner">Beginner</label><input type="radio" id="beginner" value="beginner" name="q_1"<?php if (isset($q_1) && $q_1=="beginner") { echo " checked"; } ?>>
						<label for="intermediate">Intermediate</label><input type="radio" id="intermediate" value="intermediate" name="q_1"<?php if (isset($q_1) && $q_1=="intermediate") { echo " checked"; } ?>>
						<label for="expert">Expert</label><input type="radio" id="expert" value="expert" name="q_1"<?php if (isset($q_1) && $q_1=="expert") { echo " checked"; } ?>>
					</div>

			<!-- Qustion 2 -->
					<div class="col-md-8">
						<label>2. Do you have a significant fear of water?</label>
					</div>
					<div class="col-md-4">
						<label for="yes_q_2">Yes</label><input type="radio" id="yes_q_2" value="yes" name="q_2"<?php if (isset($q_2) && $q_2=="yes") { echo " checked"; } ?>>
						<label for="no_q_2">No</label><input type="radio" id="no_q_2" value="no" name="q_2"<?php if (isset($q_2) && $q_2=="no") { echo " checked"; } ?>>
					</div>

			<!-- Qustion 3 -->
					<div class="col-md-8">
						<label>3. Are you able to provide proper swim attire?</label>
					</div>
					<div class="col-md-4">
						<label for="yes_q_3">Yes</label><input type="radio" id="yes_q_3" value="yes" name="q_3"<?php if (isset($q_3) && $q_3=="yes") { echo " checked"; } ?>>
						<label for="no_q_3">No</label><input type="radio" id="no_q_3" value="no" name="q_3"<?php if (isset($q_3) && $q_3=="no") { echo " checked"; } ?>>
					</div>

			<!-- Qustion 4 -->
					<div class="col-md-8">
						<label>4. How long does it take you to get dressed?</label>
					</div>
					<div class="col-md-4">
						<input type="text" name="q_4" value="<?php if (isset($q_4)) { echo $q_4; } ?>">
					</div>

			<!-- Qustion 5 -->
					<div class="col-md-8">
						<label>5. Do you need assistance with getting dressed or undressed for the pool?</label>
					</div>
					<div class="col-md-4">
						<label for="yes_q_5">Yes</label><input type="radio" id="yes_q_5" value="yes" name="q_5"<?php if (isset($q_5) && $q_5=="yes") { echo " checked"; } ?>>
						<label for="no_q_5">No</label><input type="radio" id="no_q_5" value="no" name="q_5"<?php if (isset($q_5) && $q_5=="no") { echo " checked"; } ?>>
					</div>

				</div>
			</fieldset>

			<fieldset>
				<legend>Medical History</legend>
				<div class="row">

			<!-- Qustion 6 -->
					<div class="col-md-8">
						<label>6. Have you had a temperature elevation in the last 48 hours?</label>
					</div>
					<div class="col-md-4">
						<label for="yes_q_6">Yes</label><input type="radio" id="yes_q_6" value="yes" name="q_6"<?php if (isset($q_6) && $q_6=="yes") { echo " checked"; } ?>>
						<label for="no_q_6">No</label><input type="radio" id="no_q_6" value="no" name="q_6"<?php if (isset($q_6) && $q_6=="no") { echo " checked"; } ?>>
					</div>

			<!-- Qustion 7 -->
					<div class="col-md-8">
						<label>7. Have you had any nausea, vomiting or diarrhea within the last 72 hours?</label>
					</div>
					<div class="col-md-4">
						<label for="yes_q_7">Yes</label><input type="radio" id="yes_q_7" value="yes" name="q_7"<?php if (isset($q_7) && $q_7=="yes") { echo " checked"; } ?>>
						<label for="no_q_7">No</label><input type="radio" id="no_q_7" value="no" name="q_7"<?php if (isset($q_7) && $q_7=="no") { echo " checked"; } ?>>
					</div>

			<!-- Qustion 8 -->
					<div class="col-md-8">
						<label>8. Have you been exposed to a communicable disease (i.e. chicken pox, tuberculosis, measles, etc.) within the past month?</label>
					</div>
					<div class="col-md-4">
						<label for="yes_q_8">Yes</label><input type="radio" id="yes_q_8" value="yes" name="q_8"<?php if (isset($q_8) && $q_8=="yes") { echo " checked"; } ?>>
						<label for="no_q_8">No</label><input type="radio" id="no_q_8" value="no" name="q_8"<?php if (isset($q_8) && $q_8=="no") { echo " checked"; } ?>>
					</div>

			<!-- Qustion 9 -->
					<div class="col-md-8">
						<label>9. Have you been diagnosed with an Antibiotic Resistant Organism (VRE, MRSA, C-DIFF, EBSL)?</label>
					</div>
					<div class="col-md-4">
						<label for="yes_q_9">Yes</label><input type="radio" id="yes_q_9" value="yes" name="q_9"<?php if (isset($q_9) && $q_9=="yes") { echo " checked"; } ?>>
						<label for="no_q_9">No</label><input type="radio" id="no_q_9" value="no" name="q_9"<?php if (isset($q_9) && $q_9=="no") { echo " checked"; } ?>>
					</div>

					<div class="col-md-7 col-md-offset-1">
						<label>*If yes, which one?</label>
						<input type="text" name="q_9_more" value="<?php if (isset($q_9_more)) { echo $q_9_more; } ?>">
					</div>

			<!-- Qustion 10 -->
					<div class="col-md-8">
						<label>10. Have you ever had Hepatitis?</label>
					</div>
					<div class="col-md-4">
						<label for="yes_q_10">Yes</label><input type="radio" id="yes_q_10" value="yes" name="q_10"<?php if (isset($q_10) && $q_10=="yes") { echo " checked"; } ?>>
						<label for="no_q_10">No</label><input type="radio" id="no_q_10" value="no" name="q_10"<?php if (isset($q_10) && $q_10=="no") { echo " checked"; } ?>>
					</div>

			<!-- Qustion 11 -->
					<div class="col-md-8">
						<label>11. Do you have any skin infections or fungus (i.e. athletes foot, ring worm, lice, etc.) that you know of?</label>
					</div>
					<div class="col-md-4">
						<label for="yes_q_11">Yes</label><input type="radio" id="yes_q_11" value="yes" name="q_11"<?php if (isset($q_11) && $q_11=="yes") { echo " checked"; } ?>>
						<label for="no_q_11">No</label><input type="radio" id="no_q_11" value="no" name="q_11"<?php if (isset($q_11) && $q_11=="no") { echo " checked"; } ?>>
					</div>

			<!-- Qustion 12 -->
					<div class="col-md-8">
						<label>12. Do you currently have any open sores/wounds, skin lesions or a rash?</label>
					</div>
					<div class="col-md-4">
						<label for="yes_q_12">Yes</label><input type="radio" id="yes_q_12" value="yes" name="q_12"<?php if (isset($q_12) && $q_12=="yes") { echo " checked"; } ?>>
						<label for="no_q_12">No</label><input type="radio" id="no_q_12" value="no" name="q_12"<?php if (isset($q_12) && $q_12=="no") { echo " checked"; } ?>>
					</div>

					<div class="col-md-7 col-md-offset-1">
						<label>*If yes, where?</label>
						<input type="text" name="q_12_more" value="<?php if (isset($q_12_more)) { echo $q_12_more; } ?>">
					</div>

			<!-- Qustion 13 -->
					<div class="col-md-8">
						<label>13. Are you having any drainage from these sores?</label>
					</div>
					<div class="col-md-4">
						<label for="yes_q_13">Yes</label><input type="radio" id="yes_q_13" value="yes" name="q_13"<?php if (isset($q_13) && $q_13=="yes") { echo " checked"; } ?>>
						<label for="no_q_13">No</label><input type="radio" id="no_q_13" value="no" name="q_13"<?php if (isset($q_13) && $q_13=="no") { echo " checked"; } ?>>
					</div>

			<!-- Qustion 14 -->
					<div class="col-md-8">
						<label>14. Do you have any non healing wounds, burns or pressure ulcers?</label>
					</div>
					<div class="col-md-4">
						<label for="yes_q_14">Yes</label><input type="radio" id="yes_q_14" value="yes" name="q_14"<?php if (isset($q_14) && $q_14=="yes") { echo " checked"; } ?>>
						<label for="no_q_14">No</label><input type="radio" id="no_q_14" value="no" name="q_14"<?php if (isset($q_14) && $q_14=="no") { echo " checked"; } ?>>
					</div>

			<!-- Qustion 15 -->
					<div class="col-md-8">
						<label>15. Do you have a Foley catheter or perform intermittent catheterizations?</label>
					</div>
					<div class="col-md-4">
						<label for="yes_q_15">Yes</label><input type="radio" id="yes_q_15" value="yes" name="q_15"<?php if (isset($q_15) && $q_15=="yes") { echo " checked"; } ?>>
						<label for="no_q_15">No</label><input type="radio" id="no_q_15" value="no" name="q_15"<?php if (isset($q_15) && $q_15=="no") { echo " checked"; } ?>>
					</div>

			<!-- Qustion 16 -->
					<div class="col-md-8">
						<label>16. Have you had any recent urinary tract infections?</label>
					</div>
					<div class="col-md-4">
						<label for="yes_q_16">Yes</label><input type="radio" id="yes_q_16" value="yes" name="q_16"<?php if (isset($q_16) && $q_16=="yes") { echo " checked"; } ?>>
						<label for="no_q_16">No</label><input type="radio" id="no_q_16" value="no" name="q_16"<?php if (isset($q_16) && $q_16=="no") { echo " checked"; } ?>>
					</div>

			<!-- Qustion 17 -->
					<div class="col-md-8">
						<label>17. Are you currently taking medicine for a urinary tract infection?</label>
					</div>
					<div class="col-md-4">
						<label for="yes_q_17">Yes</label><input type="radio" id="yes_q_17" value="yes" name="q_17"<?php if (isset($q_17) && $q_17=="yes") { echo " checked"; } ?>>
						<label for="no_q_17">No</label><input type="radio" id="no_q_17" value="no" name="q_17"<?php if (isset($q_17) && $q_17=="no") { echo " checked"; } ?>>
					</div>

			<!-- Qustion 18 -->
					<div class="col-md-8">
						<label>18. Have you had an uncontrollable bowel or bladder incident within the past 3 days?</label>
					</div>
					<div class="col-md-4">
						<label for="yes_q_18">Yes</label><input type="radio" id="yes_q_18" value="yes" name="q_18"<?php if (isset($q_18) && $q_18=="yes") { echo " checked"; } ?>>
						<label for="no_q_18">No</label><input type="radio" id="no_q_18" value="no" name="q_18"<?php if (isset($q_18) && $q_18=="no") { echo " checked"; } ?>>
					</div>

			<!-- Qustion 19 -->
					<div class="col-md-8">
						<label>19. Do you have a perforated eardrum?</label>
					</div>
					<div class="col-md-4">
						<label for="yes_q_19">Yes</label><input type="radio" id="yes_q_19" value="yes" name="q_19"<?php if (isset($q_19) && $q_19=="yes") { echo " checked"; } ?>>
						<label for="no_q_19">No</label><input type="radio" id="no_q_19" value="no" name="q_19"<?php if (isset($q_19) && $q_19=="no") { echo " checked"; } ?>>
					</div>

			<!-- Qustion 20 -->
					<div class="col-md-8">
						<label>20. Have you had a seizure in the past week?</label>
					</div>
					<div class="col-md-4">
						<label for="yes_q_20">Yes</label><input type="radio" id="yes_q_20" value="yes" name="q_20"<?php if (isset($q_20) && $q_20=="yes") { echo " checked"; } ?>>
						<label for="no_q_20">No</label><input type="radio" id="no_q_20" value="no" name="q_20"<?php if (isset($q_20) && $q_20=="no") { echo " checked"; } ?>>
					</div>

			<!-- Qustion 21 -->
					<div class="col-md-8">
						<label>21. When was the start of your last menstrual cycle? (Please enter NA if not applicable)</label>
					</div>
					<div class="col-md-4">
						<input type="text" name="q_21" value="<?php if (isset($q_21)) { echo $q_21; } ?>">
					</div>

				</div>
			</fieldset>

			<fieldset>
				<legend>Other Information</legend>
				<div class="row">
					
			<!-- Qustion 22 -->
					<div class="col-md-8">
						<label>22. Are you receiving assistance from any home health agency?</label>
					</div>
					<div class="col-md-4">
						<label for="yes_q_22">Yes</label><input type="radio" id="yes_q_22" value="yes" name="q_22"<?php if (isset($q_22) && $q_22=="yes") { echo " checked"; } ?>>
						<label for="no_q_22">No</label><input type="radio" id="no_q_22" value="no" name="q_22"<?php if (isset($q_22) && $q_22=="no") { echo " checked"; } ?>>
					</div>

			<!-- Qustion 23 -->
					<div class="col-md-12">
						<label>23. What will be your mode of tranportation to therapy?</label>
					</div>
					<div class="col-md-12 text-right">
						<label for="self">Self Driver</label><input type="radio" id="self" value="self driver" name="q_23"<?php if (isset($q_23) && $q_23=="self driver") { echo " checked"; } ?>>
						<label for="friend">Friend/Relative</label><input type="radio" id="friend" value="friend/relative" name="q_23"<?php if (isset($q_23) && $q_23=="friend/relative") { echo " checked"; } ?>>
						<label for="trans_service">Transportation Service</label><input type="radio" id="trans_service" value="transportation service" name="q_23"<?php if (isset($q_23) && $q_23=="transportation service") { echo " checked"; } ?>>
						<label for="trans_other">Other</label><input type="radio" id="trans_other" value="other" name="q_23"<?php if (isset($q_23) && $q_23=="other") { echo " checked"; } ?>>
					</div>

			<!-- Qustion 24 -->
					<div class="col-md-8">
						<label>24. Is there anything about your health that you feel we should be aware of?</label>
					</div>
					<div class="col-md-12">
						<textarea name="q_24"><?php if (isset($q_24)) { echo htmlspecialchars($_POST["q_24"]); } ?></textarea>
					</div>

				</div>
			</fieldset>

			<fieldset>
				<legend>Therapist Comments</legend>

		<!-- Therapist Comments -->
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-12">
							<label>Additional comments on intake:</label>
							</div>
						<div class="col-md-12">
								<textarea name="therapist_comments"><?php if (isset($therapist_comments)) { echo htmlspecialchars($_POST["therapist_comments"]); } ?></textarea>
						</div>
					</div>

			<!-- Therapist Name -->
					<div class="col-md-6">
						<div class="col-md-12">
							<label for="ther_name">Evaluating Therapist:</label>
						</div>
						<div class="col-md-12">
							<input type="text" id="ther_name" name="therapist_name" value="<?php if (isset($therapist_name)) { echo $therapist_name; } ?>">
						</div>
					</div>

			<!-- Entered Date -->
					<div class="col-md-6">
						<div class="col-md-12">
							<label for="date">Date:</label>
						</div>
						<div class="col-md-12">
							<input type="text" id="date" name="entered_date" value="<?php if (isset($entered_date)) { echo $entered_date; } ?>">
						</div>
					</div>

				</div>
			</fieldset>
			<div class="text-center">
				<button type="submit">Submit</button>
			</div>
		</form>

	</div>
	
<?php
include("inc/footer.php");
?>
<?php
include('inc/functions.php');

// Gets the id of the intake from the database and filters
// the input
if (isset($_GET["id"])) {
	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
	$person = search_details($id);
}

include('inc/header.php');

?>

<div class="container-fluid content">


<h3 class="header">Aquatic Intake for <?php echo $person["full_name"]; ?></h3>

	
<div class="row">

	<!-- First Name -->
			<div class="col-md-6">
				<div class="col-md-12">
					<p class="question">First Name:</p>
				</div>
				<div class="col-md-12">
					<?php echo $person["first_name"];  ?>
				</div>
			</div>

	<!-- Last Name -->
			<div class="col-md-6">
				<div class="col-md-12">
					<p class="question">Last Name:</p>
				</div>
				<div class="col-md-12">
					<?php echo $person["last_name"]; ?>
				</div>
			</div>

	<!-- MR Number -->
			<div class="col-md-6">
				<div class="col-md-12">
					<p class="question">Medical Records Number:</p>
				</div>
				<div class="col-md-12">
					<?php echo $person['records_number']; ?>
				</div>
			</div>

	<!-- DOB -->
			<div class="col-md-6">
				<div class="col-md-12">
					<p class="question">DOB:</p>
				</div>
				<div class="col-md-12">
					<?php echo $person['date_of_birth']; ?>
				</div>
			</div>

	<!-- Diagnosis -->
			<div class="col-md-6">
				<div class="col-md-12">
					<p class="question">Diagnosis:</p>
				</div>
				<div class="col-md-12">
					<?php echo $person["diagnosis"]; ?>
				</div>
			</div>

	<!-- Service -->
			<div class="col-md-6">
				<div class="col-md-12">
					<p class="question">Service:</p>
					<?php echo $person["service"]; ?>
				</div>
			</div>

		</div>
	</fieldset>

	<fieldset>
		<legend>Basic Information</legend>
		<div class="row">

	<!-- Qustion 1 -->
			<div class="col-md-8">
				<p class="question">1. What is your level of experience in the water?</p>
			</div>
			<div class="col-md-4 text-center">
				<?php echo $person["q_1"]; ?>
			</div>

	<!-- Qustion 2 -->
			<div class="col-md-8">
				<p class="question">2. Do you have a significant fear of water?</p>
			</div>
			<div class="col-md-4 text-center">
				<?php echo $person["q_2"]; ?>
			</div>

	<!-- Qustion 3 -->
			<div class="col-md-8">
				<p class="question">3. Are you able to provide proper swim attire?</p>
			</div>
			<div class="col-md-4 text-center">
				<?php echo $person["q_3"]; ?>
			</div>

	<!-- Qustion 4 -->
			<div class="col-md-8">
				<p class="question">4. How long does it take you to get dressed?</p>
			</div>
			<div class="col-md-4 text-center">
				<?php echo $person["q_4"]; ?>
			</div>

	<!-- Qustion 5 -->
			<div class="col-md-8">
				<p class="question">5. Do you need assistance with getting dressed or undressed for the pool?</p>
			</div>
			<div class="col-md-4 text-center">
				<?php echo $person["q_5"]; ?>
			</div>

		</div>
	</fieldset>

	<fieldset>
		<legend>Medical History</legend>
		<div class="row">

	<!-- Qustion 6 -->
			<div class="col-md-8">
				<p class="question">6. Have you had a temperature elevation in the last 48 hours?</p>
			</div>
			<div class="col-md-4 text-center">
				<?php echo $person["q_6"]; ?>
			</div>

	<!-- Qustion 7 -->
			<div class="col-md-8">
				<p class="question">7. Have you had any nausea, vomiting or diarrhea within the last 72 hours?</p>
			</div>
			<div class="col-md-4 text-center">
				<?php echo $person["q_7"]; ?>
			</div>

	<!-- Qustion 8 -->
			<div class="col-md-8">
				<p class="question">8. Have you been exposed to a communicable disease (i.e. chicken pox, tuberculosis, measles, etc.) within the past month?</p>
			</div>
			<div class="col-md-4 text-center">
				<?php echo $person["q_8"]; ?>
			</div>

	<!-- Qustion 9 -->
			<div class="col-md-8">
				<p class="question">9. Have you been diagnosed with an Antibiotic Resistant Organism (VRE, MRSA, C-DIFF, EBSL)?</p>
			</div>
			<div class="col-md-4 text-center">
				<?php echo $person["q_9"]; ?>
			</div>

			<div class="col-md-7 col-md-offset-1">
				<p class="question">*If yes, which one?</p>
			</div>
			<div class="col-md-4 text-center">
				<?php echo $person["q_9_more"]; ?>
			</div>

	<!-- Qustion 10 -->
			<div class="col-md-8">
				<p class="question">10. Have you ever had Hepatitis?</p>
			</div>
			<div class="col-md-4 text-center">
				<?php echo $person["q_10"]; ?>
			</div>

	<!-- Qustion 11 -->
			<div class="col-md-8">
				<p class="question">11. Do you have any skin infections or fungus (i.e. athletes foot, ring worm, lice, etc.) that you know of?</p>
			</div>
			<div class="col-md-4 text-center">
				<?php echo $person["q_11"]; ?>
			</div>

	<!-- Qustion 12 -->
			<div class="col-md-8">
				<p class="question">12. Do you currently have any open sores/wounds, skin lesions or a rash?</p>
			</div>
			<div class="col-md-4 text-center">
				<?php echo $person["q_12"]; ?>
			</div>

			<div class="col-md-7 col-md-offset-1">
				<p class="question">*If yes, where?</p>
			</div>
			<div class="col-md-4 text-center">
				<?php echo $person["q_12_more"]; ?>
			</div>

	<!-- Qustion 13 -->
			<div class="col-md-8">
				<p class="question">13. Are you having any drainage from these sores?</p>
			</div>
			<div class="col-md-4 text-center">
				<?php echo $person["q_13"]; ?>
			</div>

	<!-- Qustion 14 -->
			<div class="col-md-8">
				<p class="question">14. Do you have any non healing wounds, burns or pressure ulcers?</p>
			</div>
			<div class="col-md-4 text-center">
				<?php echo $person["q_14"]; ?>
			</div>

	<!-- Qustion 15 -->
			<div class="col-md-8">
				<p class="question">15. Do you have a Foley catheter or perform intermittent catheterizations?</p>
			</div>
			<div class="col-md-4 text-center">
				<?php echo $person["q_15"]; ?>
			</div>

	<!-- Qustion 16 -->
			<div class="col-md-8">
				<p class="question">16. Have you had any recent urinary tract infections?</p>
			</div>
			<div class="col-md-4 text-center">
				<?php echo $person["q_16"]; ?>
			</div>

	<!-- Qustion 17 -->
			<div class="col-md-8">
				<p class="question">17. Are you currently taking medicine for a urinary tract infection?</p>
			</div>
			<div class="col-md-4 text-center">
				<?php echo $person["q_17"]; ?>
			</div>

	<!-- Qustion 18 -->
			<div class="col-md-8">
				<p class="question">18. Have you had an uncontrollable bowel or bladder incident within the past 3 days?</p>
			</div>
			<div class="col-md-4 text-center">
				<?php echo $person["q_18"]; ?>
			</div>

	<!-- Qustion 19 -->
			<div class="col-md-8">
				<p class="question">19. Do you have a perforated eardrum?</p>
			</div>
			<div class="col-md-4 text-center">
				<?php echo $person["q_19"]; ?>
			</div>

	<!-- Qustion 20 -->
			<div class="col-md-8">
				<p class="question">20. Have you had a seizure in the past week?</p>
			</div>
			<div class="col-md-4 text-center">
				<?php echo $person["q_20"]; ?>
			</div>

	<!-- Qustion 21 -->
			<div class="col-md-8">
				<p class="question">21. When was the start of your last menstrual cycle? (Please enter NA if not applicable)</p>
			</div>
			<div class="col-md-4 text-center">
				<?php echo $person["q_21"]; ?>
			</div>

		</div>
	</fieldset>

	<fieldset>
		<legend>Other Information</legend>
		<div class="row">
			
	<!-- Qustion 22 -->
			<div class="col-md-8">
				<p class="question">22. Are you receiving assistance from any home health agency?</p>
			</div>
			<div class="col-md-4 text-center">
				<?php echo $person["q_22"]; ?>
			</div>

	<!-- Qustion 23 -->
			<div class="col-md-8">
				<p class="question">23. What will be your mode of tranportation to therapy?</p>
			</div>
			<div class="col-md-4 text-center">
				<?php echo $person["q_23"]; ?>
			</div>

	<!-- Qustion 24 -->
			<div class="col-md-8">
				<p class="question">24. Is there anything about your health that you feel we should be aware of?</p>
			</div>
			<div class="col-md-4 text-center">
				<?php echo $person["q_24"]; ?>
			</div>

		</div>
	</fieldset>

	<fieldset>
		<legend>Therapist Comments</legend>

<!-- Therapist Comments -->
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-12">
					<p class="question">Additional comments on intake:</p>
					</div>
				<div class="col-md-12">
						<?php echo $person["therapist_comments"]; ?>
				</div>
			</div>

	<!-- Therapist Name -->
			<div class="col-md-6">
				<div class="col-md-12">
					<p class="question">Evaluating Therapist:</p>
				</div>
				<div class="col-md-12">
					<?php echo $person["therapist_name"]; ?>
				</div>
			</div>

	<!-- Entered Date -->
			<div class="col-md-6">
				<div class="col-md-12">
					<p class="question">Date:</p>
				</div>
				<div class="col-md-12">
					<?php echo $person["entered_date"]; ?>
				</div>
			</div>

		</div>
	</fieldset>
</div>

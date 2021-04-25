<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="maths8.css">
	<title>expand-tabs</title>
	
</head>
<body>
	<!-- path from home-->
	<h5 class="path"><a href="../../index.html">Home</a> / <a href="../classList.html">Class8</a> / <a href="Physics.php">Physics</a></h5>
	<!-- topic div -->
	<ul class="topics">
		<h4>Topics</h4>
		<li><span class="green d-flex justify-content-between">
			<span>Force&Pressure</span><span class="fa fa-angle-down"></span>
			</span>
			<ul class="incHeight">
				<!-- previously, down list, there was no <a></a> -->
				<a><li>Introduction</li></a>
				<a><li>ForceA_push_or_a_pull</li></a>
				<a><li>Forces_interaction</li></a>
				<a><li>Exploring_Forces</li></a>
				<a><li>Force_motion</li></a>
				<a><li>Force_object</li></a>
				<a><li>Effects_Forces</li></a>
				<a><li>Contact_forces_and_Non_contact_forces</li></a>
				<a><li>Pressure</li></a>
			</ul>
		</li>
		<li><span class="d-flex justify-content-between">
			<span>Friction</span><span class="fa fa-angle-down"></span>
			</span>
			<ul>
				<li>Introduction</li>
				<li>Force_of_Friction</li>
				<li>Factors_affecting_Friction</li>
				<li>Friction_a_necessary_evil</li>
				<li>Methods_to_reduce_friction</li>
				<li>Friction_also_produces_heat</li>
				<li>Fluid_Friction</li>
			</ul>
		</li>
		<li><span class="d-flex justify-content-between">
			<span>Sound</span><span class="fa fa-angle-down"></span>
			</span>
			<ul>
				<li>Introduction</li>
				<li>Sound_is_produced_by_a_vibrating_body</li>
				<li>The_Voice_Box</li>
				<li>Sound_needs_a_medium_for_propagation</li>
				<li>The_Human_Ear</li>
				<li>Characteristics_of_Sound</li>
				<li>Audible_and_Inaudible_sounds</li>
				<li>Noise_and_Music</li>
				<li>Noise_Pollution</li>
				<li>Harms_of_Noise_Pollution</li>
				<li>Measure_to_limit_Noise_Pollution</li>
			</ul>
		</li>
		<li><span class="d-flex justify-content-between">
			<span>Chemical_Effects</span><span class="fa fa-angle-down"></span>
			</span>
			<ul>
				<li>Introduction</li>
				<li>Conductors_and_Insulators</li>
				<li>Conductors_of_Electricity</li>
				<li>Chemical_Effects_of_Electric_Current</li>
				<li>Electroplating</li>
				<li>Applications_of_Electroplating</li>
			</ul>
		</li>
	</ul>

	<!-- topic detail div -->
	<div class="topic-detail">
		
		<div class="Force&Pressure-Introduction show">
			<?php
			include 'ContentVariable.php';
			echo fread($myFile51,filesize("Content_Details/E1311.html"));
			?>
		</div>
		<div class="Force&Pressure-ForceA_push_or_a_pull">
			<?php
			include 'ContentVariable.php';
			echo fread($myFile52,filesize("Content_Details/E1312.html"));
			?>
		</div>
		<div class="Force&Pressure-Forces_interaction">
			<?php
			include 'ContentVariable.php';
			echo fread($myFile53,filesize("Content_Details/E1313.html"));
			?>
		</div>
		<div class="Force&Pressure-Exploring_Forces">
			<?php
			include 'ContentVariable.php';
			echo fread($myFile54,filesize("Content_Details/E1314.html"));
			?>
		</div>
		<div class="Force&Pressure-Force_motion">
			<?php
			include 'ContentVariable.php';
			echo fread($myFile55,filesize("Content_Details/E1315.html"));
			?>
		</div>
		<div class="Force&Pressure-Force_object">
			<?php
			include 'ContentVariable.php';
			echo fread($myFile56,filesize("Content_Details/E1316.html"));
			?>
		</div>
		<div class="Force&Pressure-Effects_Forces">
			<?php
			include 'ContentVariable.php';
			echo fread($myFile57,filesize("Content_Details/E1317.html"));
			?>
		</div>
		<div class="Force&Pressure-Contact_forces_and_Non_contact_forces">
			<?php
			include 'ContentVariable.php';
			echo fread($myFile58,filesize("Content_Details/E1318.html"));
			?>
		</div>
		<div class="Force&Pressure-Pressure">
			<?php
			include 'ContentVariable.php';
			echo fread($myFile59,filesize("Content_Details/E1319.html"));
			?>
		</div>
		
		
		<div class="Friction-Introduction">
			<?php
			include 'ContentVariable.php';
			echo fread($myFile61,filesize("Content_Details/E1321.html"));
			?>	
		</div>
		<div class="Friction-Force_of_Friction">
			<?php
			include 'ContentVariable.php';
			echo fread($myFile62,filesize("Content_Details/E1322.html"));
			?>
		</div>
		<div class="Friction-Factors_affecting_Friction">
			<?php
			include 'ContentVariable.php';
			echo fread($myFile63,filesize("Content_Details/E1323.html"));
			?>
		</div>
		<div class="Friction-Friction_a_necessary_evil">
			<?php
			include 'ContentVariable.php';
			echo fread($myFile64,filesize("Content_Details/E1324.html"));
			?>
		</div>
		<div class="Friction-Methods_to_reduce_friction">
			<?php
			include 'ContentVariable.php';
			echo fread($myFile65,filesize("Content_Details/E1325.html"));
			?>
		</div>
		<div class="Friction-Friction_also_produces_heat">
			<?php
			include 'ContentVariable.php';
			echo fread($myFile66,filesize("Content_Details/E1326.html"));
			?>
		</div>
		<div class="Friction-Fluid_Friction">
			<?php
			include 'ContentVariable.php';
			echo fread($myFile67,filesize("Content_Details/E1327.html"));
			?>
		</div>

		<div class="Sound-Introduction">
			<?php
			include 'ContentVariable.php';
			echo fread($myFile13301,filesize("Content_Details/E13301.html"));
			?>
		</div>
		<div class="Sound-Sound_is_produced_by_a_vibrating_body">
			<?php
			include 'ContentVariable.php';
			echo fread($myFile13302,filesize("Content_Details/E13302.html"));
			?>
		</div>
		<div class="Sound-The_Voice_Box">
			<?php
			include 'ContentVariable.php';
			echo fread($myFile13303,filesize("Content_Details/E13303.html"));
			?>
		</div>
		<div class="Sound-Sound_needs_a_medium_for_propagation">
			<?php
			include 'ContentVariable.php';
			echo fread($myFile13304,filesize("Content_Details/E13304.html"));
			?>
		</div>
		<div class="Sound-The_Human_Ear">
			<?php
			include 'ContentVariable.php';
			echo fread($myFile13305,filesize("Content_Details/E13305.html"));
			?>
		</div>
		<div class="Sound-Characteristics_of_Sound">
			<?php
			include 'ContentVariable.php';
			echo fread($myFile13306,filesize("Content_Details/E13306.html"));
			?>
		</div>
		<div class="Sound-Audible_and_Inaudible_sounds">
			<?php
			include 'ContentVariable.php';
			echo fread($myFile13307,filesize("Content_Details/E13307.html"));
			?>
		</div>
		<div class="Sound-Noise_and_Music">
			<?php
			include 'ContentVariable.php';
			echo fread($myFile13308,filesize("Content_Details/E13308.html"));
			?>
		</div>
		<div class="Sound-Noise_Pollution">
			<?php
			include 'ContentVariable.php';
			echo fread($myFile13309,filesize("Content_Details/E13309.html"));
			?>
		</div>
		<div class="Sound-Harms_of_Noise_Pollution">
			<?php
			include 'ContentVariable.php';
			echo fread($myFile13310,filesize("Content_Details/E13310.html"));
			?>
		</div>
		<div class="Sound-Measure_to_limit_Noise_Pollution">
			<?php
			include 'ContentVariable.php';
			echo fread($myFile13311,filesize("Content_Details/E13311.html"));
			?>
		</div>

		<div class="Chemical_Effects-Introduction">
			<?php
			include 'ContentVariable.php';
			echo fread($myFile1321,filesize("Content_Details/E1341.html"));
			?>
		</div>
		<div class="Chemical_Effects-Conductors_and_Insulators">
			<?php
			include 'ContentVariable.php';
			echo fread($myFile1322,filesize("Content_Details/E1342.html"));
			?>
		</div>
		<div class="Chemical_Effects-Conductors_of_Electricity">
			<?php
			include 'ContentVariable.php';
			echo fread($myFile1323,filesize("Content_Details/E1343.html"));
			?>
		</div>
		<div class="Chemical_Effects-Chemical_Effects_of_Electric_Current">
			<?php
			include 'ContentVariable.php';
			echo fread($myFile1324,filesize("Content_Details/E1344.html"));
			?>
		</div>
		<div class="Chemical_Effects-Electroplating">
			<?php
			include 'ContentVariable.php';
			echo fread($myFile1325,filesize("Content_Details/E1345.html"));
			?>
		</div>
		<div class="Chemical_Effects-Applications_of_Electroplating">
			<?php
			include 'ContentVariable.php';
			echo fread($myFile1326,filesize("Content_Details/E1346.html"));
			?>
		</div>
	</div>


	<div class="btns">
		<button class="btn btn-Frictionary" onclick="">NEXT</button>	
		<button class="btn btn-primary">PREV</button>	
	</div>

	<script src="maths8.js"></script>
</body>
</html>
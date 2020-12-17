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
	<h5 class="path"><a href="">Home</a> / <a href="">Class8</a> / <a href="">Physics</a></h5>
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
			<span>Linear_Equations_in_One_Variable</span><span class="fa fa-angle-down"></span>
			</span>
			<ul>
				<li>Introduction</li>
				<li>Algebraic_Equations_&_Solutions</li>
				<li>Solving_Equations</li>
				<li>Solving_Equations_having_variables_on_both_sides</li>
				<li>Reducing_equations_to_simpler_form</li>
			</ul>
		</li>
			<li><span class="d-flex justify-content-between">
			<span>Understanding_Quadrilaterals</span><span class="fa fa-angle-down"></span>
			</span>
			<ul>
				<li>Introduction</li>
				<li>Curves</li>
				<li>Polygons</li>
				<li>Diagonals</li>
				<li>Angle_sum_property</li>
				<li>Exterior_angles_sum_property</li>
				<li>Kinds_of_Quadrilaterals</li>
				<li>Types_of_Parallelograms</li>
			</ul>
		</li>
		<li><span class="d-flex justify-content-between">
			<span>Practical_Geometry</span><span class="fa fa-angle-down"></span>
			</span>
			<ul>
				<li>Introduction</li>
				<li>Constructing_Quadrilateral</li>
				<li>Special_Quadrilaterals</li>
			</ul>
		</li>
	</ul>

	<!-- topic detail div -->
	<div class="topic-detail">
		
		<div class="Force&Pressure-Introduction show">
			<?php
			include 'Contentvariable.php';
			echo fread($myFile51,filesize("Content_Details/E1311.html"));
			?>
		</div>
		<div class="Force&Pressure-ForceA_push_or_a_pull">
			<?php
			include 'Contentvariable.php';
			echo fread($myFile52,filesize("Content_Details/E1312.html"));
			?>
		</div>
		<div class="Force&Pressure-Forces_interaction">
			<?php
			include 'Contentvariable.php';
			echo fread($myFile53,filesize("Content_Details/E1313.html"));
			?>
		</div>
		<div class="Force&Pressure-Exploring_Forces">
			<?php
			include 'Contentvariable.php';
			echo fread($myFile54,filesize("Content_Details/E1314.html"));
			?>
		</div>
		<div class="Force&Pressure-Force_motion">
			<?php
			include 'Contentvariable.php';
			echo fread($myFile55,filesize("Content_Details/E1315.html"));
			?>
		</div>
		<div class="Force&Pressure-Force_object">
			<?php
			include 'Contentvariable.php';
			echo fread($myFile56,filesize("Content_Details/E1316.html"));
			?>
		</div>
		<div class="Force&Pressure-Effects_Forces">
			<?php
			include 'Contentvariable.php';
			echo fread($myFile57,filesize("Content_Details/E1317.html"));
			?>
		</div>
		<div class="Force&Pressure-Contact_forces_and_Non_contact_forces">
			<?php
			include 'Contentvariable.php';
			echo fread($myFile58,filesize("Content_Details/E1318.html"));
			?>
		</div>
		<div class="Force&Pressure-Pressure">
			<?php
			include 'Contentvariable.php';
			echo fread($myFile59,filesize("Content_Details/E1319.html"));
			?>
		</div>
		
		
		<div class="Linear_Equations_in_One_Variable-Introduction">
		<?php
			include 'Contentvariable.php';
			echo fread($myFile21,filesize("Content_Details/E0321.html"));
			?>	
		</div>
		<div class="Linear_Equations_in_One_Variable-Algebraic_Equations_&_Solutions">
		<?php
			include 'Contentvariable.php';
			echo fread($myFile22,filesize("Content_Details/E0322.html"));
			?>
		</div>
		<div class="Linear_Equations_in_One_Variable-Solving_Equations">
		<?php
			include 'Contentvariable.php';
			echo fread($myFile23,filesize("Content_Details/E0323.html"));
			?>
		</div>
		<div class="Linear_Equations_in_One_Variable-Solving_Equations_having_variables_on_both_sides">
		<?php
			include 'Contentvariable.php';
			echo fread($myFile24,filesize("Content_Details/E0324.html"));
			?>
		</div>
		<div class="Linear_Equations_in_One_Variable-Reducing_equations_to_simpler_form">
		<?php
			include 'Contentvariable.php';
			echo fread($myFile25,filesize("Content_Details/E0325.html"));
			?>
		</div>

		<div class="Understanding_Quadrilaterals-Introduction">
		<?php
			include 'Contentvariable.php';
			echo fread($myFile31,filesize("Content_Details/E0331.html"));
			?>
		</div>
		<div class="Understanding_Quadrilaterals-Curves">
		<?php
			include 'Contentvariable.php';
			echo fread($myFile32,filesize("Content_Details/E0332.html"));
			?>
		</div>
		<div class="Understanding_Quadrilaterals-Polygons">
		<?php
			include 'Contentvariable.php';
			echo fread($myFile33,filesize("Content_Details/E0333.html"));
			?>
		</div>
		<div class="Understanding_Quadrilaterals-Diagonals">
		<?php
			include 'Contentvariable.php';
			echo fread($myFile34,filesize("Content_Details/E0334.html"));
			?>
		</div>
		<div class="Understanding_Quadrilaterals-Angle_sum_property">
		<?php
			include 'Contentvariable.php';
			echo fread($myFile35,filesize("Content_Details/E0335.html"));
			?>
		</div>
		<div class="Understanding_Quadrilaterals-Exterior_angles_sum_property">
		<?php
			include 'Contentvariable.php';
			echo fread($myFile36,filesize("Content_Details/E0336.html"));
			?>
		</div>
		<div class="Understanding_Quadrilaterals-Kinds_of_Quadrilaterals">
		<?php
			include 'Contentvariable.php';
			echo fread($myFile37,filesize("Content_Details/E0337.html"));
			?>
		</div>
		<div class="Understanding_Quadrilaterals-Types_of_Parallelograms">
		<?php
			include 'Contentvariable.php';
			echo fread($myFile38,filesize("Content_Details/E0338.html"));
			?>
		</div>

		<div class="foPractical_Geometryurth-Introduction">
		<?php
			include 'Contentvariable.php';
			echo fread($myFile41,filesize("Content_Details/E0341.html"));
			?>
		</div>
		<div class="Practical_Geometry-Constructing_Quadrilateral">
		<?php
			include 'Contentvariable.php';
			echo fread($myFile42,filesize("Content_Details/E0342.html"));
			?>
		</div>
		<div class="Practical_Geometry-Special_Quadrilaterals">
		<?php
			include 'Contentvariable.php';
			echo fread($myFile43,filesize("Content_Details/E0343.html"));
			?>
		</div>
	</div>


	<div class="btns">
		<button class="btn btn-Linear_Equations_in_One_Variableary" onclick="">NEXT</button>	
		<button class="btn btn-primary">PREV</button>	
	</div>

	<script src="maths8.js"></script>
</body>
</html>
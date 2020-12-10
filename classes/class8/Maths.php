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
	<h5 class="path">Home / Class8 / Maths</h5>
	<!-- topic div -->
	<ul class="topics">
		<h4>Topics</h4>
		<li><span class="green d-flex justify-content-between">
			<span>Rational_Numbers</span><span class="fa fa-angle-down"></span>
			</span>
			<ul class="incHeight">
				<!-- previously, down list, there was no <a></a> -->
				<a><li class="red">Introduction</li></a>
				<a><li>Types_of_numbers</li></a>
				<a><li>Properties_Closure</li></a>
				<a><li>Properties_Associativity</li></a>
				<a><li>Additive_and_Multiplicative</li></a>
				<a><li>Distributive_property</li></a>
				<a><li>Representation_of_number</li></a>
				<a><li>Two_Rational_numbers</li></a>
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
		
		<div class="Rational_Numbers-Introduction show">
			<?php
			include 'Contentvariable.php';
			echo fread($myFile11,filesize("Content_Details/E0311.php"));
			?>
		</div>
		<div class="Rational_Numbers-Types_of_numbers">
			<?php
			include 'Contentvariable.php';
			echo fread($myFile12,filesize("Content_Details/E0312.php"));
			?>
		</div>
		<div class="Rational_Numbers-Properties_Closure">
			<?php
			include 'Contentvariable.php';
			echo fread($myFile13,filesize("Content_Details/E0313.php"));
			?>
		</div>
		<div class="Rational_Numbers-Properties_Associativity">
			<?php
			include 'Contentvariable.php';
			echo fread($myFile14,filesize("Content_Details/E0314.php"));
			?>
		</div>
		<div class="Rational_Numbers-Additive_and_Multiplicative">
			<?php
			include 'Contentvariable.php';
			echo fread($myFile15,filesize("Content_Details/E0315.php"));
			?>
		</div>
		<div class="Rational_Numbers-Distributive_property">
			<?php
			include 'Contentvariable.php';
			echo fread($myFile16,filesize("Content_Details/E0316.php"));
			?>
		</div>
		<div class="Rational_Numbers-Representation_of_number">
			<?php
			include 'Contentvariable.php';
			echo fread($myFile17,filesize("Content_Details/E0317.php"));
			?>
		</div>
		<div class="Rational_Numbers-Two_Rational_numbers">
			<?php
			include 'Contentvariable.php';
			echo fread($myFile18,filesize("Content_Details/E0318.php"));
			?>
		</div>
		
		
		<div class="Linear_Equations_in_One_Variable-Introduction">
		<?php
			include 'Contentvariable.php';
			echo fread($myFile21,filesize("Content_Details/E0321.php"));
			?>	
		</div>
		<div class="Linear_Equations_in_One_Variable-Algebraic_Equations_&_Solutions">
		<?php
			include 'Contentvariable.php';
			echo fread($myFile22,filesize("Content_Details/E0322.php"));
			?>
		</div>
		<div class="Linear_Equations_in_One_Variable-Solving_Equations">
		<?php
			include 'Contentvariable.php';
			echo fread($myFile23,filesize("Content_Details/E0323.php"));
			?>
		</div>
		<div class="Linear_Equations_in_One_Variable-Solving_Equations_having_variables_on_both_sides">
		<?php
			include 'Contentvariable.php';
			echo fread($myFile24,filesize("Content_Details/E0324.php"));
			?>
		</div>
		<div class="Linear_Equations_in_One_Variable-Reducing_equations_to_simpler_form">
		<?php
			include 'Contentvariable.php';
			echo fread($myFile25,filesize("Content_Details/E0325.php"));
			?>
		</div>

		<div class="Understanding_Quadrilaterals-Introduction">
		<?php
			include 'Contentvariable.php';
			echo fread($myFile31,filesize("Content_Details/E0331.php"));
			?>
		</div>
		<div class="Understanding_Quadrilaterals-Curves">
		<?php
			include 'Contentvariable.php';
			echo fread($myFile32,filesize("Content_Details/E0332.php"));
			?>
		</div>
		<div class="Understanding_Quadrilaterals-Polygons">
		<?php
			include 'Contentvariable.php';
			echo fread($myFile33,filesize("Content_Details/E0333.php"));
			?>
		</div>
		<div class="Understanding_Quadrilaterals-Diagonals">
		<?php
			include 'Contentvariable.php';
			echo fread($myFile34,filesize("Content_Details/E0334.php"));
			?>
		</div>
		<div class="Understanding_Quadrilaterals-Angle_sum_property">
		<?php
			include 'Contentvariable.php';
			echo fread($myFile35,filesize("Content_Details/E0335.php"));
			?>
		</div>
		<div class="Understanding_Quadrilaterals-Exterior_angles_sum_property">
		<?php
			include 'Contentvariable.php';
			echo fread($myFile36,filesize("Content_Details/E0336.php"));
			?>
		</div>
		<div class="Understanding_Quadrilaterals-Kinds_of_Quadrilaterals">
		<?php
			include 'Contentvariable.php';
			echo fread($myFile37,filesize("Content_Details/E0337.php"));
			?>
		</div>
		<div class="Understanding_Quadrilaterals-Types_of_Parallelograms">
		<?php
			include 'Contentvariable.php';
			echo fread($myFile38,filesize("Content_Details/E0338.php"));
			?>
		</div>

		<div class="foPractical_Geometryurth-Introduction">
		<?php
			include 'Contentvariable.php';
			echo fread($myFile41,filesize("Content_Details/E0341.php"));
			?>
		</div>
		<div class="Practical_Geometry-Constructing_Quadrilateral">
		<?php
			include 'Contentvariable.php';
			echo fread($myFile42,filesize("Content_Details/E0342.php"));
			?>
		</div>
		<div class="Practical_Geometry-Special_Quadrilaterals">
		<?php
			include 'Contentvariable.php';
			echo fread($myFile43,filesize("Content_Details/E0343.php"));
			?>
		</div>
	</div>


	<div class="btns">
		<button class="btn btn-Linear_Equations_in_One_Variableary">NEXT</button>	
		<button class="btn btn-primary">PREV</button>	
	</div>

	<script src="maths8.js"></script>
</body>
</html>
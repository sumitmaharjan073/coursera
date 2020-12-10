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
	<h5 class="path">Home / Class1 / Maths</h5>
	<!-- topic div -->
	<ul class="topics">
		<h4>Topics</h4>
		<li><span class="green d-flex justify-content-between">
			<span>first</span><span class="fa fa-angle-down"></span>
			</span>
			<ul class="incHeight">
				<!-- previously, down list, there was no <a></a> -->
				<li class="red"><a href="?link=1">Introduction to Rational Numbers</a></li>
				<li><a href="?link=2">Types of numbers</a></li>
				<li><a href="?link=3">Properties of the types of numbers - Closure</a></li>
				<li><a href="?link=4">Properties of the types of numbers - Associativity</a></li>
				<li><a href="?link=5">Additive and Multiplicative identity of Rational numbers</a></li>
				<li><a href="?link=6">Distributive property of multiplication over addition and subtraction for rational numbers</a></li>
				<li><a href="?link=7">Representation of number types on number line</a></li>
				<li><a href="?link=8">Rational numbers between two rational numbers</a></li>
			</ul>
		</li>
		<li><span class="d-flex justify-content-between">
			<span>second</span><span class="fa fa-angle-down"></span>
			</span>
			<ul>
				<li>subtopic1</li>
				<li>subtopic2</li>
				<li>subtopic3</li>
			</ul>
		</li>
			<li><span class="d-flex justify-content-between">
			<span>third</span><span class="fa fa-angle-down"></span>
			</span>
			<ul>
				<li>subtopic1</li>
				<li>subtopic2</li>
			</ul>
		</li>
		<li><span class="d-flex justify-content-between">
			<span>fourth</span><span class="fa fa-angle-down"></span>
			</span>
			<ul>
				<li>subtopic1</li>
				<li>subtopic2</li>
			</ul>
		</li>
	</ul>

	<!-- topic detail div -->
	<div class="topic-detail">
		<div class="first-subtopic1 show">
			Arjun Shrestha
			<?php
				$myFile = fopen("E0311.php","r") or die("unable to open file");
				echo fread($myFile,filesize("E0311.php"));
				fclose($myFile);
			
			?>
		</div>
		<div class="first-subtopic2">
			Arjun shrestha2
			<?php
			
				$myFile = fopen("E0312.php","r") or die("unable to open file");
					echo fread($myFile,filesize("E0312.php"));
                    fclose($myFile);
                    
			
			?>
		</div>
		<div class="first-subtopic3">
			Arjun shrestha3
			<?php
				$myFile = fopen("E0313.php","r") or die("unable to open file");
					echo fread($myFile,filesize("E0313.php"));
					fclose($myFile);
			
			?>
		</div>
		<div class="first-subtopic4">
			444
		<?php

            $myFile = fopen("E0314.php","r") or die("unable to open file");
				echo fread($myFile,filesize("E0314.php"));
				fclose($myFile);
		
		?>
		</div> 
		<div class="first-subtopic5">
			555
		<?php      

            $myFile = fopen("E0315.php","r") or die("unable to open file");
				echo fread($myFile,filesize("E0315.php"));
				fclose($myFile);
		
		?>
		</div>
		<div class="first-subtopic6">
			666
		<?php
        
            $myFile = fopen("E0316.php","r") or die("unable to open file");
				echo fread($myFile,filesize("E0316.php"));
				fclose($myFile);
		
		?>
		</div>
		<div class="first-subtopic7">
			7777
		<?php
        
            $myFile = fopen("E0317.php","r") or die("unable to open file");
				echo fread($myFile,filesize("E0317.php"));
				fclose($myFile);
		
		?>
		</div>
		<div class="first-subtopic8">
			888
		<?php
        
            $myFile = fopen("E0318.php","r") or die("unable to open file");
				echo fread($myFile,filesize("E0318.php"));
				fclose($myFile);
		
		?>
		</div>

		
		<div class="second-subtopic1">
			second topic1
		</div>
		<div class="second-subtopic2">
			second  topic2
		</div>
		<div class="second-subtopic3">
			second topic3
		</div>
		<div class="third-subtopic1">
			third topic1
		</div>
		<div class="third-subtopic2">
			third topic2
		</div>
		<div class="fourth-subtopic1">
			fourth  topic1
		</div>
		<div class="fourth-subtopic2">
			fourtt topic2
		</div>
	</div>

	<div class="btns">
		<button class="btn btn-secondary">NEXT</button>	
		<button class="btn btn-primary">PREV</button>	
	</div>

	<script src="maths8.js"></script>
</body>
</html>
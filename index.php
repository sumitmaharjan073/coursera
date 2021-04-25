<?php

$displayvar1 ='block';
$displayvar2 = 'none';
$usernameFromGameForShow = '';
if(isset($_POST['fromGame'])){
	$usernameFromGameForShow = $_POST['userNameFromGame'];
}
if($usernameFromGameForShow!=''){
	$displayvar1 = 'none';
	$displayvar2 = 'block';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<!-- <link rel="stylesheet" href="css/fontawesome.min.css"> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/coursera.css">
	<title>Learn By Web</title>
	<style>

	</style>
</head>
<body>
	<nav class="position-fixed z bg-white border-bottom border-secondary">
		<div class="container py-3">
			<div class="row">
				<h2 class="col-md-3  mb-0 text-primary">
					<a href="test.html">Learn By Web</a>
				</h2>
				
				<div class="col-md-5 d-flex align-items-start">
					<div class="explore position-relative">
					  <button class="btn btn-primary d-flex rounded-bottom" type="button">
						  <span>Explore</span>
						  <span class="fa fa-chevron-down ml-2 mt-1"></span>
				      </button>
				      <ul class="class-dropdown position-absolute list-unstyled">
				      	<h5>Classes</h5>
				      	<li class="d-flex justify-content-between">
				      		<span>Class 6</span>
				      		<span class="fa fa-angle-down"></span>
				      		<ul class="sublist bg-white ">
				      			<h5>Subjects</h5>
				      			<li>
				      				<a href="./classes/class1/Maths.html">Maths</a>
                    			</li>
								<li><a href="classes/class8/Maths.php">English</a></li>
								<li><a href="classes/class8/Maths.php">Scinece</a></li>
								<li><a href="classes/class8/Maths.php">Grammer</a></li>
				      		</ul>
				      	</li>
				      	<li class="d-flex justify-content-between">
				      		<span>Class 7</span>
				      		<span class="fa fa-angle-down"></span>
				      		<ul class="sublist bg-white ">
				      			<h5>Subjects</h5>
				      			<li><a href="classes/class8/Maths.php">Maths</a></li>
				      			<li><a href="classes/class8/Maths.php">English</a></li>
				      			<li><a href="classes/class8/Maths.php">Scinece</a></li>
				      			<li><a href="classes/class8/Maths.php">Grammer</a></li>
				      		</ul>
						  </li>
						  <!-- added class eight math course with function by Arjun shrestha-->
				      	<li class="d-flex justify-content-between">
				      		<span>Class 8</span>
				      		<span class="fa fa-angle-down"></span>
				      		<ul class="sublist bg-white ">
				      			<h5>Subjects</h5>
				      			<li>
									<a href="classes/class8/Maths.php">Maths</a>
								</li>
				      			<li>English</li>
				      			<li>
									<a href="classes/class8/Physics.php">Physics</a>
								</li>
				      			<li>Grammer</li>
				      		</ul>
				      	</li>
				      	<li class="d-flex justify-content-between">
				      		<span>Class 9</span>
				      		<span class="fa fa-angle-down"></span>
				      		<ul class="sublist bg-white">
				      			<h5>Subjects</h5>
				      			<li><a href="classes/class8/Maths.php">Maths</a></li>
				      			<li><a href="classes/class8/Maths.php">English</a></li>
				      			<li><a href="classes/class8/Maths.php">Scinece</a></li>
				      			<li><a href="classes/class8/Maths.php">Grammer</a></li>
				      		</ul>
				      	</li>
				      </ul>
					</div>

					<!--This sectio is not under work for some time-->
					<div class="ml-2 input-group">
						
						<input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
					    <button class="btn btn-primary" type="button">
					    	<span class="fa fa-search"></span>
						</button>
						
					</div>
				</div>

				<script>
					askLogin = () => {
						alert('Please Login');
					}
				</script>

				<div class="col-md-4 d-flex justify-content-end align-items-start">
					<span class="ml-4 mt-2"><a href="" onclick="askLogin()">Play Quizes</a></span>
					<span class="ml-4 mt-2">for students</span>
				</div>
		</div>
		</div>
	</nav>


	<!-- arjun heading start-->
	  <!--   heading Content  -->

	  <section id="head-part" class="hd-full">
		<div class=" container hd-cointainer">
		  <div class="row">
			<div class="col-md-6 head-write">
				<h1 class="pt-5 pb-3">
					Your courses to <span style="color: red; font-weight: 900" class="wow rollIn" data-wow-iteration="20" data-wow-duration="2s">Success</span>
				</h1>
				<h3>
					Build <span style="color: blue;">skills</span> with <span style="color: green;">courses</span>, <span style="color: green;">certificates</span>, and <span style="color: green;">degrees</span> online from class.
				</h3>
				<!--
					<a href="#" class="btn btn-info">Join for free</a
				-->
				<button class="btn btn-primary">
					<a href="./login/login.html" style="text-decoration: none; color: white;">Join for free</a>
				</button>
			</div>
	
	<!-- login form-->
	
			<div class="col-md-4 offset-md-2 ">
				<div id="login-page" style="display: <?php echo $displayvar1 ?>;">
					<div class="card">
						<div class="card-header">
						<h3>Sign In</h3>
						</div>
						<div class="card-body">
						<form id="loginFromHead" action="login/registration.php" method="POST">
							<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
							</div>
							<input type="email" class="form-control" name="email" placeholder="Email" value="">
							</div>
							<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></span>
							</div>
							<input type="password" class="form-control" name="pass" placeholder="Password" value="">
							</div>
							<div class="row align-items-center">
							<input type="checkbox" style="margin-left: 25px;">Remember Me
							</div>
							<div class="form-group">
							<input type="submit" value="Login" name="login" class="btn btn-success float-right">
							</div>
						</form>
						</div>
						<div class="card-footer">
						<p>Don't have an account?<a href="#">Sign Up</a>
						<br>
						<a href="#">Forgot Your Password?</a>
						</div>
					</div>
				</div>
				<!-- after login the showing -->
				<div id="login-approval" style="display: <?php echo $displayvar2 ?>">
					<div class="card">
						<div class="card-header">
						<h3>Welcome back, <br><?php echo $usernameFromGameForShow; ?></h3>
						</div>
						<div class="card-body">
							<a href="Play/game.php" target="_self">
							<button class="btn-success">
								<span style="color: gold; font-weight: 900" class="wow bounceIn" data-wow-iteration="50" data-wow-duration="5s">
									Play Quizes !!!
								</span>
							</button>
							</a>
							<br>
							<a href="Play/tictactoe.html" target="_blank">
							<button class="btn-success">
								<span style="color: gold; font-weight: 900" class="wow rollIn" data-wow-iteration="50" data-wow-duration="5s">
									Play TicTacToe !!!
								</span>
							</button>
							</a>
						</div>
					</div>
				</div>
			</div>
	<!-- login form ending -->
	
		  </div>
		</div>
	  </section>
	<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
	
	
	<!-- Optional JavaScript -->
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
	
	
</body>
</html>

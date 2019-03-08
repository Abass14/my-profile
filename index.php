<?php require_once "templates/header.php"?>



<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=depth-width initial-scale=1">
	<title>My_Profile</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	
</head> -->
<body>

	<?php
		require_once "templates/nav.php"
	?>

	
	<!-- Welcome -->
	<section>
		<div class="container-fluid welcome bg-light">
			<div class="row text-center py-4 welcome2">
				<div class="col">
					<h1 class="pt-3"><strong>Welcome to Adisa Abass Profile</strong></h1>
					<div class="row">
						<div class="col py-3">
							<img width="150" height="150" class="rounded-circle" src="images/Me18.jpg">
							<div class="row">
								<div class="col-xl-8 col-md-6 col-sm-12 para">
									<p class="pt-3">
										Meet Adisa Abass Richard, a mechanical engineering graduate from the University<br> of Ilorin. Adisa Abass is a recently trained full stack web developer<br> at Alabian solutions, Lagos.
									</p>
									<button class="btn btn-outline-primary"><a class="text-primary" href="http://localhost/My_Profile/summary.php">Continue to Summary</a></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Education/Skills -->
	<section>
		<div class="container-fluid pt-4 Education text-white">
			<div class="container">
				<div class="row text-center">
					<div class="col-xl-6">
						<h2 class="border-bottom pb-5"><strong>Eductaional Background</strong></h2>
						<div class="row text-center border-bottom py-3">
							<div class="col-xl-4 col-md-4 col-sm-4">
								<h3>School</h3>
							</div>
							<div class="col-xl-4 col-md-4 col-sm-4">
								<h3>Qualification</h3>
							</div>
							<div class="col-xl-4 col-md-4 col-sm-4">
								<h3>Year</h3>
							</div>
						</div>
						<div class="row text-center pt-3 border-bottom">
							<div class="col-xl-4 col-md-4 col-sm-4">
								<p>University of Ilorin</p>
							</div>
							<div class="col-xl-4 col-md-4 col-sm-4">
								<p>B.Eng. in Mechanical Engineering – Second class upper, 2017</p>
							</div>
							<div class="col-xl-4 col-md-4 col-sm-4">
								<p>2013-2017</p>
							</div>
						</div>
						<div class="row text-center py-3">
							<div class="col-xl-4 col-md-4 col-sm-4">
								<p>Kwara State Polytechnic</p>
							</div>
							<div class="col-xl-4 col-md-4 col-sm-4">
								<p>OND in Mechanical Engineering – Upper Class, 2012</p>
							</div>
							<div class="col-xl-4 col-md-4 col-sm-4">
								<p>2010-2012</p>
							</div>
						</div>
					</div>
					<div class="col-xl-6 pb-3">
						<h2 class="text-center pb-3"><strong>Languages</strong></h2>
						<div class="row skills-icon">
							<div class="col-xl-4 col-md-4 col-sm-6">
								<i class="fab fa-html5"></i>
								<p>HTML5</p>
							</div>
							<div class="col-xl-4 col-md-4 col-sm-6">
								<i class="fab fa-css3-alt"></i>
								<p>CSS3</p>
							</div>
							<div class="col-xl-4 col-md-4 col-sm-6">
								<i class="fab fa-js-square"></i>
								<p>Bootstrap</p>
							</div>
						</div>
						<div class="row skills-icon">
							<div class="col-xl-4 col-md-4 col-sm-6">
								<i class="fab fa-js-square"></i>
								<p>JS</p>
							</div>
							<div class="col-xl-4 col-md-4 col-sm-6">
								<i class="fab fa-node-js"></i>
								<p>Jquery</p>
							</div>
							<div class="col-xl-4 col-md-4 col-sm-6">
								<i class="fab fa-php"></i>
								<p>PHP</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Skills -->
<!-- 	<section>
		<div class="container-fluid bg-primary text-white py-5 skills-icon">
			<div class="row">
				<div class="col">
					<h2 class="text-center pb-3">Languages</h2>
					<div class="row">
						<div class="col-xl-2 col-md-2 col-sm-12">
							<i class="fab fa-html5"></i>
							<p>HTML5</p>
						</div>
						<div class="col-xl-2 col-md-2 col-sm-6">
							<i class="fab fa-css3-alt"></i>
							<p>CSS3</p>
						</div>
						<div class="col-xl-2 col-md-2 col-sm-6">
							<img class="img-fluid rounded-circle" src="images/bootsrap.jpg">
						</div>
						<div class="col-xl-2 col-md-2 col-sm-6">
							<i class="fab fa-js-square"></i>
							<p>JS</p>
						</div>
						<div class="col-xl-2 col-md-2 col-sm-6">
							<i class="fab fa-node-js"></i>
						</div>
						<div class="col-xl-2 col-md-2 col-sm-6">
							<i class="fab fa-php"></i>
							<p>PHP</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->

	<!-- Experience -->
	<section class="bg-light experience">
		<div class="container-fluid py-5">
			<div class="row">
				<div class="col">
					<h2 class="pb-3 text-center"><strong>Experience</strong></h2>
					<div class="row">
						<div class="col-xl-4 col-md-4 col-sm-12">
							<div class="pad bg-secondary text-white pb-3 pt-4 px-3">
								<h4>IT Trainee at R. Odubanjo Steel Work Ltd</h4>
								<span>
									Gained experience in electric arc welding and sheet metal fabrication.
									Learnt safety practices in both workshop and field sites.
									Constructed and fabricated a 5000ltr elevated steel tank.
									Worked on various petrol tankers ranging from 33,000 to 60,000ltrs
									(Construction and maintenance)
									Carried out machining operations on Guillotine and Bending machines<br>
									2015-2016
								</span>
							</div>
						</div>
						<div class="col-xl-4 col-md-4 col-sm-12">
							<div class="pad bg-primary text-white pb-3 pt-4 px-3">
								<h4>Trainee at Alabian solutions</h4>
								<span>
									Acquired front end and back end skills in web app development and design in an
									intense 2 months program; HTML5, CSS3, Photoshop (basics), Bootstrap, Javascript, Git and PHP.<br>
									Jan 2019 – Mar 2019
								</span>
							</div>
						</div>
						<div class="col-xl-4 col-md-4 col-sm-12">
							<div class="pad bg-danger text-white pb-3 pt-4 px-3">
								<h4>NYSC Lecturer at Kano State Polytechnic</h4>
								<span>
									Lectured ND1 Welding and Fabrication students the course; Welding Technology 1 which increased my level of confidence, organizational skills and ability to present projects.
									Handled all the student’s continuous assessments records and grading. Supervision of Quiz, Test, and Exams.<br>
									Jan 2018 – Oct 2018
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-dark">
		<div class="container Portfolio" id="Portfolio">
			<h3 class="py-5 text-center text-white"><strong>Gallery</strong></h3>
			<div class="row">
				<div class="col-xl-4 col-md-4 col-sm-12 mx-0 img-pad">
					<img class="rounded-circle" src="images/Me11.jpg">
				</div>
				<div class="col-xl-4 col-md-4 col-sm-12 mx-0">
					<img class="rounded-circle" src="images/Me9.jpg">
				</div>
				<div class="col-xl-4 col-md-4 col-sm-12 mx-0">
					<img class="rounded-circle" src="images/Me4.jpg">
				</div>
			</div>
			<div class="row pt-3 pb-5">
				<div class="col-xl-4 col-md-4 col-sm-12">
					<img class="rounded-circle" src="images/Me15.jpg">
				</div>
				<div class="col-xl-4 col-md-4 col-sm-12">
					<img class="rounded-circle" src="images/Me5.jpg">
				</div>
				<div class="col-xl-4 col-md-4 col-sm-12">
					<img class="rounded-circle" src="images/Me10.jpg">
				</div>
			</div>
		</div>
	</section>

	<!-- <section>
		<div class="container">
			<div class="row">
				
			</div>
		</div>
	</section> -->

	<footer>
		
	</footer>



</body>
	<script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</html>
<?php require_once "templates/header.php"?>

<body class="bg-primary">
	<?php
		require_once "templates/nav.php"
	?>


	<section>
		<div class="container div-color">
			<div class="row">
				<div class="col text-center text-white pt-5">
					<h2><strong>Got a message for Abass?</strong></h2>
					<p>Contact Abass by filling form below</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-6 col-md-6 col-sm-12 formz">
					<form class="form-group form-border pt-3">
						<label>Name:</label>
						<input type="text" name="userName" class="form-control" placeholder="Enter Full Name">
					</form>
					<form class="form-group form-border pt-3">
						<label>Email:</label>
						<input type="email" name="userMail" class="form-control" placeholder="Enter Email">
					</form>
					<form class="form-group form-border pt-3">
						<label>Phone Number:</label>
						<input type="text" name="userNumber" class="form-control" placeholder="Enter Your mobile number">
					</form>
					<form class="form-group form-border pt-3">
						<input type="radio" name="userRadio">Male &nbsp;
						<input type="radio" name="userRadio">Female
					</form>
					<form class="form-group form-border pt-3">
						<label>
							Comment: 
						</label>
						<textarea class="textarea form-control"></textarea>
					</form>
					<form class="form-group form-border pt-3 button1">
						<button type="submit" class="btn btn-outline-light"><a class="text-white" href="">Submit</a></button>
					</form>
				</div>
			</div>
		</div>
	</section>

</body>
<script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</html>
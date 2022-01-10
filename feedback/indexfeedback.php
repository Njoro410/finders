<!DOCTYPE html>
<html lang="en">
<head>
	<title>feedback</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/fixed.css">
	<link rel="stylesheet" href="css/modal.css">
	<link rel="stylesheet" href="css/main.css">

</head>
<body>

	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic" >
				<img src="images/WINGS1.png" alt="IMG">
			</div>

			<form action="indexfeedback.php" method="post">
				<span class="contact1-form-title">
					Get in touch
				</span>

				<div class="wrap-input1 validate-input">
					<input class="input1" type="text" name="name" placeholder="Name">
				</div>

				<div class="wrap-input1 validate-input">
					<input class="input1" type="text" name="email" placeholder="Email">
				</div>

				<div class="wrap-input1 validate-input">
					<input class="input1" type="text" name="subject" placeholder="Subject">
				</div>

				<div class="wrap-input1 validate-input">
					<textarea class="input1" name="message" placeholder="Message"></textarea>
				</div>
				<div>
					<button type="submit" name="submit" class="contact1-form-btn">
						<span>
							Send Email
							<i class="fa fa-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>

			
			</form>

<?php
	//conect to db
$con = mysqli_connect("localhost","root","","finders");
//if submit button is clicked
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$subject=$_POST['subject'];
		$message=$_POST['message'];
	

	$result = mysqli_query($con,"INSERT INTO feedback(name,email,subject,message) 
		VALUES ('$name','$email','$subject','$message')");
		
	
	if($result)
	{
		echo '<script type="text/javascript"> alert("Thank You For Your Feedback")</script>';
	}
	else
	{
		echo '<script type="text/javascript"> alert("An error occured, Please try again")</script>';
	}
		}
 ?> 


		</div>
	</div>
<!--- Script Source Files -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
<!--- End of Script Source Files -->

</body>
</html>

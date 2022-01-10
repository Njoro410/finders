<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VictimsAdults</title>
	<link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/v.css">
	<link rel="stylesheet" href="css/fixed.css">
</head>

<body data-spy="scroll" data-target="#navbarResponsive">

<!---start home section-->
<div id="home">

	<!--Navigation-->
	<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
		<div class="container-fluid">
		<a class="navbar-brand" href="start.php"><img src="">FINDERS</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon">
					<i class="fas fa-bars" style="color:#1ebba3; font-size: 28px;"></i>
				</span>
		</button>

		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item"> 
					<a class="nav-link" href="start.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#contacts" >Contacts</a>
				</li>
				
			</ul>
		</div>
	</div>
	</nav>
	<!--End navigation-->
<div id="about" class="offset">
<div class="jumbotron">
<div class="narrow text-center">

		<div class="col-12">
			<h3 class="heading">USER PROFILE</h3>
			<div class="heading-underline"></div>
	<p class="lead">view your user profile</p>
</div>
</div>	
</div>
 <!-- Cards-->
<div class="jumbotron">


 <!-- Cards-->
 <div class="container-fluid padding">
 	<div class="row padding">
 			 <?php
            $result = $con->query("Select * from users");
        ?>
            <?php
                    while ($row=$result->fetch_assoc()):
            ?>
 		<div class="col-md-4">
 			<div class="inner-card">
 			<div class="card" style="height: 650px" >
 				<img class="card-img-top" src="img/avatar.png">
 				<div class="card-body">
 					<h4 class="card-title"><b><?php echo $row['username']; ?></b></h4>
 					<p class="card-text"><?php echo $row['email']; ?></p>
 					<a href="vadults_xtra.php" class="btn btn-outline-secondary">See More</a>
 					<a href="feedback/indexfeedback.php" class="btn btn-outline-secondary">Send Feedback</a>
 				</div>
 				<div class="card-footer text-muted">
   					 RECONNECTIONS MADE POSSIBLE
  				</div>
 		</div>
 	</div>
 	</div> 
 	<?php endwhile;?>
 	<br>
 
<div class="heading-underline"></div>
 </div>

</div>
	
<!---end victims section-->
<hr>
<!---start contacts section-->
<div id="contacts">

<footer>
<div class="container-fluid padding">
	<div class="row text-center">
		<div class="col-md-4">
			<img src="img/FINDERSFADE2.png">
			<hr class="light">
			<p>+254-722-770-727</p>
			<p>briannjoroge420@gmail.com</p>
			<p>P.O. BOX 111-01100</p>
			<p>Kiambu, Ruiru, Kimbo, One-Four</p>
		</div>
		<div class="col-md-4">
			<hr class="light">
			<h5>Information</h5>
			<hr class="light">
			<p>Terms & Conditions</p>
			<p>Privacy Policy</p>
			<p>Advertise</p>
			<p>Donate</p>
		</div>
		<div class="col-md-4">
			<hr class="light">
			<h5>Connect With Us</h5>
			<hr class="light">
			<div class="col-12 social padding">
				 <a href="" target="_blank"><i class="fab fa-facebook"></i></a>
				 <a href="" target="_blank"><i class="fab fa-twitter"></i></a>
				 <a href="" target="_blank"><i class="fab fa-instagram"></i></a><br/>
				
			</div>
		</div>
		<div class="col-12">
			<hr class="socket">
			<h5>&copy; Finders</h5>
		</div>
	</div>
</div>
</footer>	
	
</div>
<!---end contacts section-->

<!--- Script Source Files -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
<!--- End of Script Source Files -->

</body>
</html>


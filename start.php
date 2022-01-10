<?php include 'vprofilecode.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Finders</title>
	<link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/fixed.css">
	<link rel="stylesheet" href="css/modal.css">
</head>

<body data-spy="scroll" data-target="#navbarResponsive">
<!---start home section-->
<div id="home">

	<!--Navigation-->
	<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
		<div class="container-fluid">
		<a class="navbar-brand" href="#"><img src="img\WINGS1.png"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon">
					<i class="fas fa-bars" style="color:#1ebba3; font-size: 28px;"></i>
				</span>
		</button>

		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"> 
					<a class="nav-link" href="#home">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#about">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#facilities">Facilities</a>
				</li> 
				<li class="nav-item">
					<a class="nav-link" href="#activities">Activities</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#victims">Victims</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#contacts">Contacts</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Account</a>
					<div class="dropdown-menu dropdown-menu-right">
           
                        <a href="logout.php?logout"class="dropdown-item">Logout</a>
                    </div>
				</li>
			</ul>
		</div>
	</div>
	</nav>
<!-- Modal view profile -->
<div id="my2factor" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">View Profile</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form method="post"  action="index.php" >
					<div class="form-group">
						<label>--ENTER YOUR 2-FACTOR CODE--</label>
						<i class="fa fa-key" aria-hidden="true"></i>
						<input type="password" class="form-control"  name="factor" >					
					</div>
					<div class="form-group">
						<button type="submit" name= "2factor" class="btn btn-primary btn-block btn-lg" >Submit</button>
			</div>
				</form>		
			</div>
			<div class="modal-footer">
				<p style="color: red">Contact admin if forgoten!!</p> 
			</div>
		</div>
	</div>
</div>   
<!--modal view profile-->

<!--------------------------------------------------------------------------------------------------------------------------->


<!--------------------------------------------------------------------------------------------------------------------------->

	<!--start landing page-->
	<!--indicators-->
	<div id="slides" class="carousel slide" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#slides" data-slide-to="0" class="active"></li> 
			<li data-target="#slides" data-slide-to="1"></li> 
			<li data-target="#slides" data-slide-to="2"></li> 
		</ul>

	<!--wrapper for slides-->
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="img/background1.png" class="carousel-img-width" alt="home slide 1">
				<div class="carousel-caption">
					<h1>WELCOME TO FINDERS</h1>
					<h3>RECCONECTIONS MADE POSSIBLE</h3>
				</div>
		</div>
		<div class="carousel-item">
				<img src="img/background2.png"  class="carousel-img-width" alt="home slide 2">
				<div class="carousel-caption">
					<h1>ONLY IN THE DARKNESS</h1>
					<h3>CAN YOU SEE STARS</h3>
				</div>
		</div>
		<div class="carousel-item">
				<img src="img/background3.png"  class="carousel-img-width" alt="home slide 3">
				<div class="carousel-caption">
					<h1>HOPE IS A WALKING DREAM</h1>
					<h3>NEVER LOSE IT</h3>
				</div>
		</div>
	</div>

	<!--end landing page-->
</div>
<!---end home section-->

<!---start about section-->
<div id="about" class="offset">

<div class="row dark">
<div class="narrow text-center">

		<div class="col-12">
			<h3 class="heading">About</h3>
			<div class="heading-underline"></div>
	<p class="lead">Finders is a website developed to help families and friends connect with lost loved ones, you can submit a finders request by clicking below</p>
	<a class="btn btn-secondary btn-md" href="submit.php" target="_blank">Submit</a>
	<br/>
	<br/>
</div>	
</div>	
</div>

<!---end about section-->

<!---start facilities section-->
<div id="facilities" class="offset">
	<!--start jumbotron-->
	<div class="jumbotron">
	<div class="narrow text-center">

		<div class="col-12">
			<h3 class="heading">Facilities</h3>
			<div class="heading-underline"></div>
		</div>

		<div class="row text-center">
			<div class="col-md-4">
				<div class="feature">
					<a href="hospital.php"><i class="fa fa-h-square fa-4x" data-fa-transform="
					shrink-3 up-5"></i></a>
					<a href="hospital.php"> <h3>Hospitals</h3></a>
					<p>In some cases a victim might be admitted to a hospital after an accident.</p>
				</div>
			</div>

		<div class="col-md-4">
				<div class="feature">
					<a href="rescue_centers.php"><i class="fa fa-child fa-4x" data-fa-transform="
					shrink-4.5 up-4.5"></i></a>
					<a href="rescue_centers.php"> <h3>Rescue Centers</h3></a>
					<p>In some cases a victims are often sent to rescue centers since they dont know where they are from.</p>
				</div>
			</div>

		<div class="col-md-4">
				<div class="feature">
					<a href="authorities.php"><i class="fa fa-building fa-4x" data-fa-transform="
					shrink-4 up-5"></i></a>
					<a href="authorities.php"> <h3>Authorities</h3></a>
					<p>In some cases a victim might be arrested without the knowledge of others.</p>
				</div>
			</div>
		</div><!--end row-->

	</div><!--End narrow-->
	</div><!--End jumbotron-->


</div>
<!---end facilities section-->

<!---start activities section-->
<div id="activities" class="offset">

<div class="fixed-background">
	<div class="row dark text-center">

		<div class="col-12">
			<h3 class="heading">ACTIVITIES</h3>
			<div class="heading-underline"></div>
		</div>

		<div class="col-md-4">
			<h3>P.I.</h3>
			<div class="feature">
				<a href="private investigators.php"><i class="fa fa-id-card fa-3x"></i></a>
			</div>
			<p class="lead">Talk to A Private Investigator</p>
		</div>

		<div class="col-md-4">
			
		</div>

		<div class="col-md-4">
			<h3>FEEDBACK</h3>
			<div class="feature">
				<a href="feedback/indexfeedback.php"><i class="fa fa-envelope fa-3x"></i></a>
			</div>
			<p class="lead">Send us feedback and tell us your thoughts</p>
		</div>

	</div><!--end row dark-->
	
		<div class="fixed-wrap">
			<div class="fixed">
			</div>
		</div>	
</div><!--end fixed background-->
</div>
<!---end activities section-->

<!---start victims section-->
<div id="victims" class="offset">
<!--start jumbotron-->
<div class="jumbotron">

	<div class="col-12 text-center">
		<h3 class="heading">Victims</h3>
		<div class="heading-underline"></div>
	</div>
 <!-- Cards-->
 <div class="container-fluid padding">
 	<div class="row padding">
 		<div class="col-md-4">
 			<div class="inner-card">
 			<div class="card" style="height: 500px">
 					<img class="card-img-top" src="img/doddle3.png">
  				<div class="card-body">
 					<h4 class="card-title"><b>Re-Union</b></h4>
 					<p class="card-text">Get to see your loved once once again after a long time.</p>
 				</div>
 				<div class="card-footer text-muted">
   					 <b>RECONNECTIONS MADE POSSIBLE</b>
  				</div>
 		</div>
 	</div>
 	</div>
 	<div class="col-md-4">
 		<div class="inner-card">
 			<div class="card" style="height: 500px">
 				<div class="inner">
 					<img class="card-img-top" src="img/doddle3.png">
 				</div>
 				<div class="card-body">
 					<h4 class="card-title"><b>Re-Connect</b></h4>
 					<p class="card-text">Interact with your lost loved one once again.</p>
 				</div>
 				<div class="card-footer text-muted">
   					 <b>RECONNECTIONS MADE POSSIBLE</b>
  				</div>
 		</div>
 	</div>
 	</div> 
 	<div class="col-md-4">
 		<div class="inner-card">
 			<div class="card" style="height: 500px" >
 				<div class="inner">
 					<img class="card-img-top" src="img/doddle3.png">
 				</div>
 				<div class="card-body">
 					<h4 class="card-title"><b>Re-Live</b></h4>
 					<p class="card-text">Enjoy moments again and relive them like never before</p>
 				</div>
 				<div class="card-footer text-muted">
   					 <b>RECONNECTIONS MADE POSSIBLE</b>
  				</div>
 		</div>
 	</div>
 	</div>  
 </div>
 <hr>
 <div class="col-12 narrow text-center">
		<p class="lead">Victims are in two categories, you can view children or adults</p>
		<a class="btn btn-secondary btn-md" href="v_children.php" target="_blank">Children</a>
		<a class="btn btn-secondary btn-md" href="v_adults.php" target="_blank">Adults</a>
	</div>
</div>
</div>
<!---end victims section-->

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
				 <a href="https://www.facebook.com/brian.nairb.5652" target="_blank"><i class="fab fa-facebook"></i></a>
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


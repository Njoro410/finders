<?php include 'login.php' ?>
<?php include 'signup.php'?>
<?php include 'adminlogin.php'?>
<?php include 'forgotpassword.php' ?>
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
					<a class="nav-link" href="#myModal3" data-toggle="modal">Admin</a>
				</li>
				
				
			</ul>
		</div>
	</div>
	</nav>
	<!--End navigation-->


	<!-- Modal login admin -->
<div id="myModal3" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">admin Login</h4>
				<?php if(!empty($m)): ?>
						<div class="alert <?php echo $c; ?>">
							<?php echo $m; ?>
						</div>
					<?php endif; ?>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form method="post"  action="index.php" >
					<div class="form-group">
						<label>Name</label>
						<i class="fa fa-user" aria-hidden="true"></i>
						<input type="text" class="form-control"  name="uname" required="required">
					</div>
					<div class="form-group">
						<label>Password</label>
						<i class="fa fa-key" aria-hidden="true"></i>
						<input type="password" class="form-control" name="pass"  required="required">					
					</div>
					<div class="form-group">
						<button type="submit" name= "submit2" class="btn btn-primary btn-block btn-lg" >Submit</button>
			</div>
				</form>	
			</div>
			
		</div>
	</div>
</div>     
<!--end modal login -->


<!-- Modal login -->
<div id="myModal1" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">Login</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form method="post"  action="index.php" >
					<div class="form-group">
						<label>Email</label>
						<i class="fa fa-envelope" aria-hidden="true"></i>
						<input type="email" class="form-control" name="mail" >
					</div>
					<div class="form-group">
						<label>Password</label>
						<i class="fa fa-key" aria-hidden="true"></i>
						<input type="password" class="form-control"  name="pass" >					
					</div>

					<div class="form-group">
						<button type="submit" name= "submit1" class="btn btn-primary btn-block btn-lg" >Submit</button>
			</div>
				</form>		
			</div>
			<div class="modal-footer">
				<a href="#myModal4" data-toggle="modal" style="color: red">Forgot Password?</a> 
			</div>
		</div>
	</div>
</div>   
<!--end modal login -->

<!-- Modal reset password -->
<div id="myModal4" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">Reset Password?</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form method="post"  action="index.php" >
					<div class="form-group">
						<label>Email</label>
						<i class="fa fa-envelope" aria-hidden="true"></i>
						<input type="email" class="form-control" name="mail" >
					</div>
					
					<div class="form-group">
						<label>New Password</label>
						<i class="fa fa-key" aria-hidden="true"></i>
						<input type="password" class="form-control"  name="npass" >					
					</div>
					<div class="form-group">
						<label>Confirm New Password</label>
						<i class="fa fa-key" aria-hidden="true"></i>
						<input type="password" class="form-control"  name="cnpass" >					
					</div>

					<div class="form-group">
						<button type="submit" name= "resetpass" class="btn btn-primary btn-block btn-lg" >Submit</button>
			</div>
				</form>		
			</div>
		</div>
	</div>
</div>   
<!--end reset password -->



<!-- Modal signup -->
<div id="myModal2" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">Sign Up</h4>
			
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="index.php" method="post">
				
			<div class="form-group">
						<input type="text" class="form-control" name="username" placeholder="Username" required="required">
			</div>
			<div class="form-group">
						<input type="email" class="form-control" name="email" placeholder="Email" required="required">			
			</div>
			<div class="form-group">
						<input type="password" class="form-control" name="pword" placeholder="Password" required="required" >
			</div>
			<div class="form-group">
						<input type="password" class="form-control" name="2factor" placeholder="2-Factor Authentification" required="required" >
			</div>
			<div class="form-group">
            			<input type="password" class="form-control" name="cpword"  placeholder="Confirm Password" required="required" >
       	 	</div>  
       	 	<div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
			<div class="form-group">
						<button type="submit" name= "submit" class="btn btn-primary btn-block btn-lg" >Register</button>
			</div>
				</form>								
			</div>
		</div>
	</div>			
</div>     
<!--end modal signup -->
	<!--start landing page-->
	<!--indicators-->
	<div id="slides" class="carousel slide" data-ride="carousel">
<!--wrapper for slides-->
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="img/166237.png" class="carousel-img-width" alt="home slide 1">
				<div class="carousel-caption">
					<h1>WELCOME TO FINDERS</h1>
					<h3>RECONECTIONS MADE POSSIBLE</h3>
											<!--------------------------------------------------------------->
														<?php if(!empty($ms)): ?>
																<div class="alert <?php echo $cl; ?>">
																	<?php echo $ms; ?>
																</div>
														<?php endif; ?>
											<!---------------------------------------------------------------->
														<?php if(!empty($perror)): ?>
																<div class="alert <?php echo $daro; ?>">
																	<?php echo $perror; ?>
																</div>
														<?php endif; ?>
											<!--------------------------------------------------------------->
														<?php if(!empty($msg)): ?>
																<div class="alert <?php echo $cls; ?>">
																	<?php echo $msg; ?>
																</div>
														<?php endif; ?>
											<!--------------------------------------------------------------->
														<?php if(!empty($error)): ?>
																<div class="alert <?php echo $cl; ?>">
																	<?php echo $error; ?>
																</div>
														<?php endif; ?>
											<!--------------------------------------------------------------->
														<?php if(!empty($me)): ?>
																<div class="alert <?php echo $cl; ?>">
																	<?php echo $me; ?>
																</div>
														<?php endif; ?>
											<!--------------------------------------------------------------->
					<a class="btn btn-secondary btn-md"href="#myModal1" data-toggle="modal" >Login</a>
					<a class="btn btn-secondary btn-md" href="#myModal2" data-toggle="modal" >Sign Up</a>
				</div>
		</div>
		
		
	</div>

	<!--end landing page-->
</div>
<!---end home section-->
<!--- Script Source Files -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
<!--- End of Script Source Files -->

</body>
</html>



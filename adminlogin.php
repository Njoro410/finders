<?php 
$m = "";
$c = "";
function SignIn() 
{ 

  
	if($_POST['uname']=='admin' && $_POST['pass']=='admin') 
	{ 
		$_SESSION['userName'] = 'admin'; 
		echo "Logging you in..";
		header( "location:users.php");
	} 
	else { 
				$m = "Incorrect Password or Username";
          		$c = "alert-danger";
		} 
	
	} 
	if(isset($_POST['submit2'])) 
	{ 
		SignIn(); 
	} 
?>
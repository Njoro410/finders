<?php
$msg = "";
$cls = "";
$perror = "";
$daro = "";
	//conect to db
$con = mysqli_connect("localhost","root","","finders");

//if submit button is clicked
	if(isset($_POST['submit']))
	{
		$username  = $_POST['username'];
		$email     = $_POST['email'];
		$factor    = $_POST['2factor'];
		$password_1= $_POST['pword'];
		$password_2= $_POST['cpword'];
		$factor	   = md5($factor);

	if($password_1==$password_2)
	{
		$query = "SELECT * from users WHERE email='$email'";
		$query_run = mysqli_query($con,$query);

		if(mysqli_num_rows($query_run)==1)
		{
		$perror = "❌ Email address already registered";
        $daro = "alert-danger";
    	}
    	else
    	{

		$password_1 = md5($password_1); //encrypt password
		$result = mysqli_query($con,"INSERT INTO users(username,email,factor,password_1) 
			VALUES ('$username','$email','$factor','$password_1')");
		
		$result_run = mysqli_query($con,$result);

		    if($result_run)
		    {
		        echo '<script type="text/javascript"> alert("Failed,Try Again")</script>';
		        
		    }
		    else
		    {
		    	$msg = "👍 Registered";
          		$cls = "alert-success";
		        header("Refresh:2; url=start.php");
		    }
	}
}
	else
	{
		$perror = "❌ Password and Confirm Password Do Not Match";
        $daro = "alert-danger";
	}


	}
 ?> 
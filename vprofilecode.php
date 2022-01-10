<?php
$ms = "";
$cl = "";
$error='';

session_start();
if (isset($_POST['2factor'])) 
{
    
        include 'connection.php';
        $factor2=$_POST['factor'];
        $new_password=md5($factor2);


        $query="Select * from users where factor = '$new_password'";
        $result= mysqli_query($con,$query);
        $num = mysqli_num_rows($result);
        if ($num == 1) {
            header("location:profile.php");
        }
        else{
            $ms = "❌ Incorrect Password Or Email";
            $cl = "alert-danger";

        }
        mysqli_close($con);
    }
?>
<?php
$ms = "";
$cl = "";
$error='';

session_start();
if (isset($_POST['submit1'])) {
    if (empty($_POST['mail']) || empty($_POST['pass'])) {
        $error = "❌ Please input password and email";
        $cl = "alert-danger";
    }
    else
    {
        include 'connection.php';
        $email=$_POST['mail'];
        $password=$_POST['pass'];
        $new_password=md5($password);


        $query="Select * from users where email = '$email' and password_1= '$new_password'";
        $result= mysqli_query($con,$query);
        $num = mysqli_num_rows($result);
        if ($num == 1) {
            header("location:start.php");
        }
        else{
            $ms = "❌ Incorrect Password Or Email";
            $cl = "alert-danger";

        }
        mysqli_close($con);
    }
}
?>

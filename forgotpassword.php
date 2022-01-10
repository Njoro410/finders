<?php
$me = "";
$cl = "";
$error='';
$perror='';
$daro='';

if (isset($_POST['resetpass'])) {
    if (empty($_POST['mail']) || empty($_POST['npass'])) {
        $error = "❌ Please input password and email to reset password";
        $cl = "alert-danger";
    }
    else
    {
        include 'connection.php';
        $email=$_POST['mail'];
        $new_password=$_POST['npass'];
        $cnew_password=$_POST['cnpass'];
        $encpassword=md5($new_password);

        if($new_password==$cnew_password)
            {


        $query="Select * from users where email = '$email'";
        $result= mysqli_query($con,$query);
        $num = mysqli_num_rows($result);
        if ($num == 1) {
            mysqli_query($con,"update users set password_1='$encpassword' WHERE email='$email' ");
            $msg = "Password Changed Successfully";
            $cls = "alert-success";
        }
        else{
            $me = "Invalid Email Adress, Please Try Again.";
            $cl = "alert-danger";

        }
        mysqli_close($con);
    }
    else
    {
            $perror = "❌ password do not match";
            $daro = "alert-danger";
    }
    }
}
?>

<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fixed.css">
    <link rel="stylesheet" href="css/submit.css">
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
                    <a class="nav-link" href="start.php">Home</a>
                </li>
                <li class="nav-item"> 
                    <a class="nav-link" href="logout.php?logout">Logout</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>

<div class="narrow text-center">

        <div class="col-12">
            <h3 class="heading">ADMIN PANEL</h3>
            <div class="heading-underline"></div>
        </div>
</div>  

<div class="container-fluid">
    <div class="row">
    <div class="narrow text-center">

        <div class="row text-center">
            <div class="col-md-2.5">
                <div class="feature">
                    <a href="users.php"><i class="fa fa-users fa-4x" data-fa-transform="
                    shrink-4 up-5"></i></a>
                    <h3>View Users</h3>
                </div>
            </div>

        <div class="col-md-2.5">
                <div class="feature">
                    <a href="children.php"><i class="fa fa-child fa-4x" data-fa-transform="
                    shrink-4 up-5"></i></a>
                    <h3>View Children</h3>
                   
                </div>
            </div>

        <div class="col-md-2.5">
                <div class="feature">
                    <a href="adults.php"><i class="fa fa-user-secret fa-4x" data-fa-transform="
                    shrink-4 up-5"></i></a>
                    <h3>View Adults</h3>
                </div>
            </div>
             <div class="col-md-2.5">
                <div class="feature">
                    <a href="feedback.php"><i class="fa fa-comments fa-4x" data-fa-transform="
                    shrink-4 up-5"></i></a>
                    <h3>View Feedback</h3>
                </div>
            </div>
            <div class="col-md-2.5">
                <div class="feature">
                    <a href="submit.php"><i class="fa fa-plus fa-4x" data-fa-transform="
                    shrink-4 up-5"></i></a>
                    <h3>Add a request </h3>
                </div>
            </div>
        </div><!--end row-->
    </div><!--End narrow-->


</div>
<div class="heading-underline"></div>
<div class="container-fluid">
<div class="narrow text-center">
<p class="lead">Users</p>
</div>

        <div class="col">
            <?php
            $result = $con->query("Select * from users");


            ?>
            <div class="container text-center">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Password_1</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($row=$result->fetch_assoc()):
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['password_1']; ?></td>
                        <td><a href="users.php?delete=<?php echo $row['id'];?>"
                   class="btn btn-danger">DELETE</a></td>

                   <?php

    if(isset($_GET['delete']))
    {
        $id=$_GET['delete'];
        $con->query("Delete from users where id=$id");
    }
?>
                    </tr>
                    </tbody>
                    <?php endwhile;?>
                </table>
            </div>
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
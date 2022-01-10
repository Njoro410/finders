<?php include 'php/childrensave.php' ?>
<?php include 'php/adultssave.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Submit</title>
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fixed.css">
    <link rel="stylesheet" href="css/submit.css">
</head>
<body data-spy="scroll" data-target="#navbarResponsive">

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
                    <a class="nav-link" href="#contacts">Contacts</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>

            <?php if(!empty($msg)): ?>
                <div class="alert <?php echo $cls; ?>">
                        <?php echo $msg; ?>
                </div>
            <?php endif; ?>
            <?php if(!empty($ms)): ?>
                <div class="alert <?php echo $daro; ?>">
                        <?php echo $ms; ?>
                </div>
            <?php endif; ?>
            <?php if(!empty($m)): ?>
                <div class="alert <?php echo $c; ?>">
                        <?php echo $m; ?>
                </div>
            <?php endif; ?>
            <?php if(!empty($mg)): ?>
                <div class="alert <?php echo $daroh; ?>">
                        <?php echo $mg; ?>
                </div>
            <?php endif; ?>


<div class="narrow text-center">

        <div class="col-12">
            <h3 class="heading">Submit</h3>
            <div class="heading-underline"></div>
    <p class="lead">Submit information about victims to help in finding them, there are two sections, CHILD and ADULT. </p>
    
</div>
</div>

    <div class="container register">
                <div class="row">
                     <div class="col-md-12 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Child</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Adult</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Child</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                            <form action="submit.php" method="post" enctype="multipart/form-data" >
                                        <div class="form-group">
                                            <label>Full name</label>
                                            <input type="text" class="form-control" name="fname" required="required" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nickname</label>
                                            <input type="text" class="form-control" name="nname" />
                                        </div>
                                        <div class="form-group">
                                            <label>D.O.B</label>
                                            <input type="date" class="form-control" name="dob" required="required" />
                                        </div>
                                        <div class="form-group">
                                            <label>Date of Disapperance</label>
                                            <input type="date" class="form-control" name="dod" required="required" />
                                        </div>
                                        <div class="form-group">
                                            <label>Height</label>
                                            <input type="number" class="form-control" name="height" />
                                        </div>
                                       <div class="form-group">
                                            <label>Gender</label>
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>School</label>
                                            <input type="text" class="form-control" name="school" />
                                        </div>
                                        <div class="form-group">
                                            <label>Phone number(if there is)</label>
                                            <input type="text" minlength="10" maxlength="10" name="phone" class="form-control"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Eyes color</label>
                                            <input type="text"  name="eyes" class="form-control"/>
                                        </div>
                                        <div class="form-group">
                                             <label>Hair Color</label>
                                            <input type="text" class="form-control" name="hair"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Any distinguishing marks</label>
                                            <textarea name="extra" class="form-control "></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Upload most recent image</label>
                                            <input type='file' name="image" id="image" required="required" />
                                        </div>
                                        <input type="submit" class="btnSubmit"  value="Submit" name="submit"/>
                                    </div>
                            </form>

                            </div>
                            </div>
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Adult</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                            <form action="submit.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Full name</label>
                                            <input type="text" class="form-control" name="fname" required="required" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nickname</label>
                                            <input type="text" class="form-control" name="nname"/>
                                        </div>
                                        <div class="form-group">
                                            <label>D.O.B</label>
                                            <input type="date" class="form-control" name="dob" required="required" />
                                        </div>
                                        <div class="form-group">
                                            <label>Date of Disapperance</label>
                                            <input type="date" class="form-control" name="dod" required="required" />
                                        </div>
                                        <div class="form-group">
                                            <label>Height</label>
                                            <input type="number" class="form-control" name="height" />
                                        </div>
                                       <div class="form-group">
                                            <label>Gender</label>
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>ID Number</label>
                                            <input type="text" class="form-control" name="idnum" />
                                        </div>
                                        <div class="form-group">
                                            <label>Phone number</label>
                                            <input type="tel" min="10" max="10" name="phone" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label>Eyes color</label>
                                            <input type="text" class="form-control" name="eyes"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Hair color</label>
                                            <input type="text" class="form-control" name="hair"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Any distinguishing marks</label>
                                            <textarea name="extra" class="form-control "></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Upload most recent image</label>
                                            <input type='file' name="image" id="image" required="required" />
                                        </div>
                                        <input type="submit" class="btnSubmit" value="Submit" name="submit1" />
                                    </div>
                                </div>
                            </div>
                        </form>



                        </div>
                            <div class="register-left" >
                                <img src="img/WINGS1.png" alt="finders"/>
                            </div>
                    </div>       
                </div>
            </div>
            <br/>

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
            <h5>&copy; Finders.com 2020</h5>
        </div>
    </div>
</div>
</footer>   
    
</div>


            <!--- Script Source Files -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
<!--- End of Script Source Files -->

</body>
</html>

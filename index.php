<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <?php include 'links.php'; ?>
</head>

<body>
<!-- for login  -->
 <?php
    include 'connection.php';
    if(isset($_POST['submit2'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $email_search = "select * from registration where
        email = '$email' ";
        $query = mysqli_query($con,$email_search);

        $email_count = mysqli_num_rows($query);

        if($email_count){
            $email_pass=mysqli_fetch_assoc($query);
            $_SESSION['username']=$email_pass['username'];

            $db_pass = $email_pass['password'];

            $pass_decode = password_verify($password,$db_pass);

            if($pass_decode){
                $_SESSION['username']=$email_pass['username'];
                if(isset($_POST['rememberme'])){
                  setcookie('emailcookie',$email,time()+86400);
                  setcookie('passwordcookie',$password,time()+86400);
                
                  header('location:home.php');
                }else{
                    
                  header('location:home.php');
                }
              }else{
                  echo "password incorrect";
              }

        }else{
            echo "invalid email";
        }
    }
?> 


    <!-- Navigation -->
    <?php require_once 'nav.php'; ?>

    <!-- carousel -->
    <br><br><br>
    <div class="container">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/image-3.jpg" alt="image-0" width="1100" height="500">
                    <div class="carousel-caption">
                        <h3>Welcome to Hotel Titanic Mr/Mrs
                        <?php 
                         if(isset($_SESSION['username']))
                         { echo $_SESSION['username'];} 
                         else{
                             echo "stranger";
                         } 
                         ?>
                        </h3>
                        <p>Come, stay and enjoy your day.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/image-1.jpeg" alt="image-1" width="1100" height="500">
                    <div class="carousel-caption">
                        <h3>Welcome to Hotel Titanic Mr/Mrs
                        <?php 
                         if(isset($_SESSION['username']))
                         { echo $_SESSION['username'];} 
                         else{
                             echo "stranger";
                         } 
                         ?></h3>
                        <p>The most memorable rest time starts here.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/image-0.jpeg" alt="images-2" width="1100" height="500">
                    <div class="carousel-caption">
                        <h3>Welcome to Hotel Titanic Mr/Mrs
                        <?php 
                         if(isset($_SESSION['username']))
                         { echo $_SESSION['username'];} 
                         else{
                             echo "stranger";
                         } 
                         ?></h3>
                        <p>We give you everything right here, where you need it.</p>
                    </div>
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>

    <br>
    <!-- form -->
    <div class="container">

        <div class="container">
            <div class="row ">
                <div class="col-sm-5 bcolor-or">
                    <form action="#">
                        <h3 class="bcolor-bl color-wh justify-content-center">Room Reservation</h3>
                        <div class="form-group">
                            <label for="date">Check In:</label>
                            <input type="date" class="form-control" placeholder="Enter date" id="date">
                        </div>
                        <div class="form-group">
                            <label for="date">Check Out:</label>
                            <input type="date" class="form-control" placeholder="Enter Date" id="date">
                        </div>
                        <a href="rr.php" class="btn btn-primary">Check Availability</a>
                        <!-- <button type="submit" class="btn btn-primary btn-lg" name="submit1">Check Availability</button> -->
                    </form>
                </div>
                <div class="col-sm-1"></div>
                <br>
            
                <div class="login-form col-sm-6 bcolor-or">
                <?php 
                         if(isset($_SESSION['username']))
                         { 
                             ?>
                             <h3>Hello Mr/Mrs <?php echo $_SESSION['username'] ?></h3>
                             <h4>You are now logged in</h4>

                             <?php
                         } 
                         else{
                            ?>
                    <form action="" method="POST">
                        <h3 class="bcolor-bl color-wh">Login</h3>
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="email" class="form-control" placeholder="Enter email" 
                            id="email" name="email" >
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" placeholder="Enter password" 
                            id="pwd" name="password">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="form-control btn btn-primary"
                             placeholder="Enter password" name="submit2">
                        </div>
                        <div class="form-group">New user
                            <a href="registration.php"> <b>Register here</b></a>
                        </div>
                    </form>
                    <?php
                  } 
                  ?>
                </div>
            </div>
        </div>
    </div>

    <br><br>
    <!-- information -->
    <div class="container">
        <div class="jumbotron">
            <h3>Company Mission</h3>
            <p>Provide our guest a unique experience through which they connect with the best
                in our company and to offer top quality service to our entire guest and provided comfort abundance.</p>
            <br>
            <h3>Company Vision</h3>
            <p>Titanic guest house is to provide best quality of services
                applying top quality guest house and conference facilities
                in order to fulfill the best way in the relevent need of every guest.</p>
            <br>
            <h3>About</h3>
            <p>On the year 2005 Akib and alkama have started a business of hotel for motive of providing
                ultramodern facilty in the mumbai city.From then this hotel is running doing best for satsifying the
                cutomers.
                It is renovated on several times to match modernity.
            </p>
        </div>
    </div>

    <!-- footer  -->
    <?php require_once 'footer.php'; ?>
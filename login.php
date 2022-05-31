<?php
session_start();
?>
  <!DOCTYPE html>
<html lang="en">

<head>
  <?php include('links.php'); ?>
  <?php include('nav.php');?>
  <title>Bootstrap 4 Example</title>
</head>

<body>
    <?php
    include 'connection.php';
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $email_search = "select * from registration where
        email = '$email' ";
        $query = mysqli_query($con,$email_search);

        $email_count = mysqli_num_rows($query);

        if($email_count){
            $email_pass=mysqli_fetch_assoc($query);

            $db_pass = $email_pass['password'];
           

            $pass_decode = password_verify($password,$db_pass);

            if($pass_decode){
              $_SESSION['username']=$email_pass['username'];
              if(isset($_POST['rememberme'])){
                setcookie('emailcookie',$email,time()+86400);
                setcookie('passwordcookie',$password,time()+86400);

                header('location:index.php');
              }else{
                header('location:index.php');
              }
            }else{
                echo "password incorrect";
            }

        }else{
            echo "invalid email";
        }
    }
   ?>
   
  <div class="container register">
    <h1>Login</h1>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
      <div class="form-group">
        <input type="email" class="form-control" 
        placeholder="Email ID" name="email" 
        value="<?php if(isset($_COOKIE['emailcookie']))
        {echo $_COOKIE['emailcookie'];}?>" required>
      </div>

      <div class="form-group">
        <input type="password" class="form-control" 
        placeholder="Enter password" name="password" 
        value="<?php if(isset($_COOKIE['passwordcookie']))
        {echo $_COOKIE['passwordcookie'];}?>" required>
      </div>

      <input type="submit" class="btnRegister btn btn-primary" 
      name="submit" value="login">
  
    </form>
    <!-- <p>Forgot password <a href="recover_email.php">Recover here</a></p> -->
    <p>Don't have account <a href="registration.php"><small>Register here</small></a></p>
 </div>

</body>

</html>
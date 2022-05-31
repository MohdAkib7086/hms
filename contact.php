<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <?php include 'links.php'; ?>
</head>

<body>
    <!-- Navigation -->
    <?php require_once 'nav.php'; ?>
    <br><br><br><br>
    <div class="container">

        <!-- Google Map Copied Code -->
        <div class="row">
            <div class="col-lg-12 ">
                <hr>
                <h2>Contact <strong>Hotel Titanic</strong></h2>
                <hr>
            </div>

            <div class="col-md-7">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241530.7085738006!2d72.68416561640628!3d18.935053400000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7d1e13241edff%3A0x2fb79e51725a1700!2sInterContinental!5e0!3m2!1sen!2sin!4v1632577965513!5m2!1sen!2sin"
                    width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0">
                </iframe>
            </div>
            <div class="col-md-4">
                <p>Phone:
                    <strong>123.456.7890</strong>
                </p>
                <p>Email:
                    <strong><a href="mailto:info@hotelTitanic.com">info@hotelTitanic.com</a></strong>
                </p>
                <p>Address:
                    <strong>Marine Drive IN Maharashtra Mumbai 135,
                        <br>Maharashtra 400020</strong>
                </p>
            </div>
        </div>
    </div>

    <br>
    <!-- contact form  -->
    <div class="container">
        <div class="row">
            <div class="bcolor-or">
                <div class="col-lg-12">
                    <hr>
                    <h2>Contact
                        <strong>form</strong>
                    </h2>
                    <hr>
                    <div"></div>
                    <form method="POST">
                        <div class="row">
                            <div class="form-group col-lg-5">
                                <label>Name</label>
                                <input type="text" id="fname" name="fname" maxlength="25" class="form-control">
                            </div>
                            <div class="form-group col-lg-5">
                                <label>Email Address</label>
                                <input type="email" id="email" name="email" maxlength="35" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea class="form-control" id="message" name="message" maxlength="100"
                                    rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" name='submit' class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 <br>
    <!-- footer  -->
    <?php require_once 'footer.php'; ?>
</body>

<?php 
  include 'connection.php';
  if(isset($_POST['submit'])){
     $username = $_POST['fname'];
     $email = $_POST['email'];
     $message=$_POST['message'];

     $insertquery = " insert into message(
        name,email,message) values('$name','$email',
        '$message') ";
        $res = mysqli_query($con,$insertquery);
    
        if($res){
          ?>
          <script>
            alert("data inserted properly");
          </script>
          <?php
        }else {
          ?>
          <script>
            alert("data not inserted properly");
          </script>
          <?php
        }
  }
  ?>
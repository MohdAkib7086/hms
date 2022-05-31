<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewort" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/nav-style.css">
    <link rel="stylesheet" href="css/caraousel.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/footer.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Navigation -->
    <?php require_once 'nav.php'; ?>
    <br><br><br>
    <!-- room and rates -->
    <div class="container bg-secondary">
        <hr>
        <h3>Room and Rates</h3>
        <hr>
    </div>
    <div class="container">
        <div class="row" style="background-color: lightgrey;">
            <div class="col-sm-6">
                <img src="images/single-room.jpg" alt="image-1" width="100%">
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-5" style="border: 5px solid rgb(168, 162, 162);">
                <h3>Single Bed Room</h3>
                <p><strong>Description:</strong>an attached bathroom, a small dressing table,
                     a small bedside table, and a small writing table.</p>
                <p>Rate: <strong>1000</strong></p>
 
                <?php 
                if(isset($_SESSION['username']))
                {
                   $href='view.php?rType=SBR' ;
                } 
                else if(!isset($_SESSION['username'])){
                    $href="login.php" ;
                } 
                ?>
                <a href='<?php echo $href ?>' class="btn btn-primary">Book Now</a>
            </div>
        </div>
        <br>
        <div class="row" style="background-color: lightgrey;">
            <div class="col-sm-6">
                <img src="images/double-room.jpg" alt="image-1" width="100%">
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-5" style="border: 5px solid rgb(168, 162, 162);">
                <h3>Double Bed Room</h3>
                <p><strong>Description:</strong> A room with the facility of double bed.
                    It is equipped with adequate furniture such as dressing table and a writing table, 
                    a TV, and a small fridge.</p>
                <p>Rate: <strong>2000</strong></p>

                <?php 
                if(isset($_SESSION['username']))
                {
                   $href='view.php?rType=DBR' ;
                } 
                else if(!isset($_SESSION['username'])){
                    $href="login.php" ;
                } 
                ?>
               <a href='<?php echo $href ?>' class="btn btn-primary">Book Now</a>
            </div>
        </div>
        <br>
        <div class="row" style="background-color: lightgrey;">
            <div class="col-sm-6">
                <img src="images/twin-bed-room.jpg" alt="image-1" width="100%">
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-5" style="border: 5px solid rgb(168, 162, 162);">
                <h3>Twin Bed Room</h3>
                <p><strong>Description:</strong>This room provides two single beds with separate headboards.
                           It is meant for two independent people.</p>
                <p>Rate: <strong>3000</strong></p>
                <?php 
                if(isset($_SESSION['username']))
                {
                   $href='view.php?rType=TBR' ;
                } 
                else if(!isset($_SESSION['username'])){
                    $href="login.php" ;
                } 
                ?>
                <a href='<?php echo $href ?>' class="btn btn-primary">Book Now</a>
            </div>
        </div>
        <br>
        <div class="row" style="background-color: lightgrey;">
            <div class="col-sm-6">
                <img src="images/duplex-room.jpg" alt="image-1" width="100%">
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-5" style="border: 5px solid rgb(168, 162, 162); border-radius: 10px;">
                <h3>Duplex Room</h3>
                <p><strong>Description:</strong>This is composed of two rooms located on two different floors, connected with internal stairs.</p>
                <p>Rate: <strong>4000</strong></p>
                <?php 
                if(isset($_SESSION['username']))
                {
                   $href='view.php?rType=DR' ;
                } 
                else if(!isset($_SESSION['username'])){
                    $href="login.php" ;
                } 
                ?>
                <a href='<?php echo $href ?>' class="btn btn-primary">Book Now</a>
            </div>
        </div>
        <br>
        <div class="row" style="background-color: lightgrey;">
            <div class="col-sm-6">
                <img src="images/beach-cabana-room.jpg" alt="image-1" width="100%">
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-5" style="border: 5px solid rgb(168, 162, 162);">
                <h3>Beach Cabana Room</h3>
                <p><strong>Description:</strong>This type of room faces water body, beaches. 
                    It also has a large balcony.</p>
                <p>Rate: <strong>5000</strong></p>
                <?php 
                if(isset($_SESSION['username']))
                {
                   $href='view.php?rType=BCR' ;
                } 
                else if(!isset($_SESSION['username'])){
                    $href="login.php" ;
                } 
                ?>
                <a href='<?php echo $href ?>' class="btn btn-primary">Book Now</a>
            </div>
        </div>
        <br>
        <div class="row" style="background-color: lightgrey;">
            <div class="col-sm-6">
                <img src="images/lanai-room.jpg" alt="image-1" width="100%">
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-5" style="border: 5px solid rgb(168, 162, 162);">
                <h3>Lanai Room</h3>
                <p><strong>Description:</strong>This room faces a landscape, a waterfall, or a garden which will refresh your mind.</p>
                <p>Rate: <strong>6000</strong></p>
                <?php 
                if(isset($_SESSION['username']))
                {
                   $href='view.php?rType=LR' ;
                } 
                else if(!isset($_SESSION['username'])){
                    $href="login.php" ;
                } 
                ?>
                <a href='<?php echo $href ?>' class="btn btn-primary">Book Now</a>
            </div>
        </div>
        <br>
      
       
    </div>

  <!-- footer  -->
  <?php require_once 'footer.php'; ?>
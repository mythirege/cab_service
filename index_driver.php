<?php
    session_start();

    if($_SESSION['usertype'] != 'driver' || !isset($_SESSION['username'])){
         header('Location:login.php');
    }
?>


<html>
    <head>
        <?php include 'includes/header_dashD.php'; ?>
        
       
        
        <title>Pinky Go - Driver</title>

        <link rel="stylesheet" type="text/css" href="css/style.css"/>
    </head>
    
    <body style="background-image: url('images/driver.jpg')">

        <div class="grid-box">

        	
        	 <b><h1><center>Now You Can view Booking Details!</center></h1></b>

            <center><a href="viewbookingD.php"><button class="but">VIEW BOOKING</button></a></center>
        </div>

    </body>

</html>
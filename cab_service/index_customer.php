<?php
    session_start();

    if($_SESSION['usertype'] != 'customer' || !isset($_SESSION['username'])){
         header('Location:login.php');
    }
?>

<html>
    <head>
        <?php include 'includes/header_dashC.php'; ?>
        
        <title>Pinky Go - Customer HomePage</title>

        <link rel="stylesheet" type="text/css" href="css/style.css"/>
    </head>
    
    <body class="cus_body">

        <div class="grid-box">

        	
        	 <b><h1><center>Welcome!</center></h1></b>
            <p style="font:20px; font-align:center;">Now you are logged into PINKY GO TAXI SERVICES! Please feel free to book your own ride by clicking on the link below. </p>

            <center><a href="booking-form.php"><button type="submit" name="submit" class="but">BOOK NOW</button></a></center>
            
        </div>

    </body>
    <?php include 'includes/footer.php';?>
</html>
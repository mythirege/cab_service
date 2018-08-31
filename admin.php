<?php
    session_start();

    if($_SESSION['usertype'] != 'admin' || $_SESSION['username'] != 'ucsc'  ){
         header('Location:login.php');
    }
?>

<html>
	<head>
		
        <title>Mega Cabs-Admin Page</title>
    
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
      
	</head>
    
	<body class="admin_body">  

        <div>
            <br><br>
            <center><h1><b>HELLO ADMIN!</b></h1></center>
            <div class="adlo">
                <img src="images/at.png" >
            </div><br>
                <center><h2><b>DASHBOARD</b></h2></center>



            <nav class="nav">
                <ul class="menu">
                        <li><a href="drivers.php">Drivers</a></li>
                        <li><a href="customers.php" >Customers</a></li>
                        <li><a href="adminbooking.php" >Booking</a></li>


                </ul>   

            </nav><br><br>

            <center><a href="logoutA.php" color="white"><button type="submit" name="submit" class="but">Logout</button></a></center><br><br>


             
        </div>
            
         
        
       
                       
    </body>
    
</html>

       
 
                                    
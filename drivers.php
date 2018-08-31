<?php
    session_start();

    if($_SESSION['usertype'] != 'admin' || $_SESSION['username'] != 'ucsc'  ){
         header('Location:login.php');
    }
?>


<html>
	<head>
		
        <title>Mega Cabs-Admin-Drivers</title>
            

            <link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
    
	<body class="admin_body">

            <div id="menu"><br><br><br>
        <center><h1><b>DRIVERS</b></h1></center>
        <div class="adlo">
            <img src="images/driver.png" >
        </div><br>
        
        


            <nav>
                    <ul class="menu">
                        
                        <li><a href="edit_driver.php"> Veiw and Edit Driver Details</a></li>
                        <li><a href="delete_driver.php" >Delete Drivers</a></li>
                        
                    </ul>   
                
             </nav> <br><br>
            
             <center><a href="admin.php"><button type="submit" name="submit" class="but">Back</button></a></center> <br><br>
                    

             
        </div>
            
               
    </body>
    
</html>

       
 
               
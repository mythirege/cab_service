<?php
    session_start();

    if($_SESSION['usertype'] != 'admin' || $_SESSION['username'] != 'ucsc'  ){
         header('Location:login.php');
    }
?>



<html>
    <head>
        
        <title>Pinky Go-Admin-Bookings</title>
            

            <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    
    <body class="admin_body">

            <div id="menu"><br><br><br>
        <center><h1><b>BOOKINGS</b></h1></center>
        <div class="adlo">
            <img src="images/book.png" >
        </div><br>
        
        


            <nav>
                    <ul class="menu">
                        
                        <li><a href="viewbookingA.php"> View Booking Details</a></li>
                        
                        
                    </ul>   
                
             </nav> <br><br>
            
              <center><a href="admin.php"><button type="submit" name="submit" class="but">Back</button></a></center>
                    

             
        </div>
            
               
    </body>
    
</html>
       

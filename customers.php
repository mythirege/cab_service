<?php
    session_start();

    if($_SESSION['usertype'] != 'admin' || $_SESSION['username'] != 'ucsc'  ){
         header('Location:login.php');
    }
?>

<html>
  <head>
    
        <title>Mega Cabs-Admin-Customers</title>
            

            <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
    
  <body class="admin_body">

        <div id="menu"><br><br><br>
           <center><h1><b>CUSTOMERS</b></h1></center>

        <div class="adlo">
            <img src="images/rr.png" >
        </div>
        <br>
        
        


            <nav>
                    <ul class="menu">
                        
                        <li><a href="edit_cus.php"> Veiw and Edit Customer Details</a></li>
                        <li><a href="delete_cus.php" >Delete Customer</a></li>
                        
                    </ul>   
                
             </nav> <br><br>
            
              <center><a href="admin.php"><button type="submit" name="submit" class="but">Back</button></a></center><br><br>
                    

             
        </div>
            
               
    </body>
    
</html>


          









              
        
        
        
        
    

       
 
<?php
	session_start();


    if(isset($_SESSION['usertype']) )
    {
        if($_SESSION['usertype'] == 'driver' && isset($_SESSION['username'])){
             header('Location:index_driver.php');
        }

        if($_SESSION['usertype'] == 'customer' && isset($_SESSION['username'])){
             header('Location:index_customer.php');
        }
        if($_SESSION['usertype'] == 'admin' && isset($_SESSION['username'])){
             header('Location:admin.php');
        }
    }
    
	require_once('config.php');
	//phpinfo();
?>


<html>
    <head>
    
        <?php include 'includes/header.php' ?>
        <title> Login Page </title>
        <link rel="stylesheet" href="css/style.css">


    </head>
   
    <body class="log_body">

        <div id="box_log">
            <center><h2>Login Form</h2>


                <form action="login_submit.php" method="post">
                <p>Username</p>
                <input name="username" type="text" class="inputvalues" placeholder="Type your username" required><br>
                <p>Password</p><br>
                <input name="password" type="password" class="inputvalues" placeholder="Type your password" required><br>
                <p>Select User Type</p>
                <input type="radio" name="usertype" value="customer" checked> Customer<br>
                <input type="radio" name="usertype" value="driver"> Driver<br>
                <input type="radio" name="usertype" value="admin"> Admin<br>
                <br>
                <input type="submit" name="login"  class="loginbtn" value="Login"><br>
                <a href="reg.php"><button type="button" class="regbtn">Register</button></a>

                </form>
            </center>
            
            </div>
        
    
 
       
  
    </body>
            
        
 

</html>
<?php
	session_start();
	require_once('config.php');
	//phpinfo();
?>


<html>
    <head>
    <?php include 'includes/header.php' ?>
    <title> Registration Page </title>
        
    <link rel="stylesheet" href="css/stylereg.css">
        
    </head>
   
    <body style= "background-color:#7f8c8d">

        <div id="box">
            <center><h2> Register Here !!  </h2>

            <form action="reg.php" method="post">
                <p>Customer Name</p><br>
                <input name="cname" type="text" class="inputvalues" placeholder="Type your name" required><br>
                <p>Email ID</p><br>
                <input name="email" type="text" class="inputvalues" placeholder="enter your email" required><br>
                <p>Contact Number</p><br>
                <input name="phone" type="text" class="inputvalues" placeholder="enter your phone number" required><br>
                <p>NIC/Passport Number</p><br>
                <input name="nic" type="text" class="inputvalues" placeholder="enter your nic number" required><br><br>
                <p>Username</p><br>
                <input name="username" type="text" class="inputvalues" placeholder="enter a suitable username" required><br><br>
                <label><b>Password</b></label><br>
                <input type="password" placeholder="Enter Password" name="password" required><br><br>
                <label><b>Confirm Password</b></label><br>
                <input type="password" placeholder="Enter Password" name="cpassword" required><br><br>

                <button name="register" class="signupbtn" type="submit">Register</button><br>
                <a href="login.php"><button type="button" class="backbtn">&lt; Back to Login</button></a>

            </form>
            </center>


	
	
	<?php
			if(isset($_POST['register']))
			{
				$cname=$_POST['cname'];
				$email=$_POST['email'];
				$phone=$_POST['phone'];
				$nic=$_POST['nic'];
                $username=$_POST['username'];
				$password=$_POST['password'];
				$cpassword=$_POST['cpassword'];
				
				if($password==$cpassword)
				{
				$query = "SELECT * from customer WHERE customer_name='$cname'";
					//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
					{
						if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!")</script>';
						}
						else
						{
                            
							$query = "INSERT INTO customer(customer_name, contact_number, nic, email, username, password) VALUES('$cname','$phone','$nic','$email','$username','$password')";
							$query_run = mysqli_query($con,$query);
							if($query_run)
							{
								$_SESSION['cname'] = $cname;
								$_SESSION['email'] = $mail;
								$_SESSION['phone'] = $phone;
								$_SESSION['nic'] = $nic;
                                $_SESSION['username'] = $username;
								$_SESSION['password'] = $password;
								header( "Location:reg.php");
							}
							else
							{
								echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try again later</p>';
							}
						}
					}
					else
					{
						echo '<script type="text/javascript">alert("DB error")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
				}
				
			}

		?>
	
	
	
	</div>
	

</body>
   
  

</html>
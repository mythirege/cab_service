

<html>

    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Pinky Go - Driver Registration </title>
        <?php include 'includes/header.php'; ?>
   
    </head>

    <body  class="reg_body">
      <div>
       <form class="box_reg" method="post" action="driver_reg_form.php">
           <center> <table align="center" width="100%">
               <tr>
                  <th><h2 style="color:white;"><b>Register now!</b></h2></th>
               </tr>

               <tr>
                  <td class="data5">Name</td>
               </tr>

               <tr>
                  <td><input type="text" name="driver_name"/></td>
                </tr>

                <tr>
                    <td class="data5" >Contact_no</td>
               </tr>

               <tr>
                   <td > <input type="text" name="contact_number"/></td>
                </tr>
                
                <tr>
                  <td class="data5" >NIC</td>
               </tr>

                <tr>
                  <td> <input type="text" name="nic"/></td>
              </tr>


                <tr>
                  <td class="data5" >License No.</td>
               </tr>

                <tr>
                  <td> <input type="text" name="license_no"/></td>
                </tr>

                <tr>
                  <td class="data5">Car Type</td>
               </tr>

                <tr>
                  <td class="data5">
                      <input type="radio" name="Pass" value="1">Tuk   <img src="images/tuk.png" width="50" height="50">
                      <input type="radio" name="Pass" value="2">Nano  <img src="images/nano.png" width="50" height="50"/>
                      <input type="radio" name="Pass" value="3">Car   <img src="images/car.png" width="50" height="50"/>
                      <input type="radio" name="Pass" value="4">Van   <img src="images/van.png" width="50" height="50"/>
                  </td>
                </tr>

                <tr>
                    <td class="data5">Username</td>
               </tr>

                       <tr>
                          <td><input type="text" name="user_name"></td>
                       </tr>

                       <tr>
                           <center><td class="data5">Password</td></center>
                       </tr>

                      <tr>
                          <center><td><input type="password" name="pwd"></td></center>
                      </tr>
               
                    <tr>
                         <center> <td class="data5">Confirm Password</td></center>
                       </tr>

                      <tr>
                         <center> <td><input type="password" name="cpwd"></td></center>
                      </tr><br><br>

                        <tr>
                            <td align=center>
                            <br><button type="submit" class="signupbtn" name="driver">REGISTER AS A DRIVER</button>
                            </td>
                        </tr>


            </table></center>
        
      </form>
  </div>
        <?php
			if(isset($_POST['driver']))
			{
				$dname=$_POST['driver_name'];
                $phone=$_POST['contact_number'];
                $nic=$_POST['nic'];
                $licno=$_POST['license_no'];
				$vehicle=$_POST['Pass'];
				$username=$_POST['user_name'];
				$password=$_POST['pwd'];
				$cpassword=$_POST['cpwd'];
				
				if($password==$cpassword)
				{
					$query = "SELECT * from driver WHERE driver_name='$dname'";
					//echo $query;
                    include 'config.php'; 
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
					{
					
                        $query = "INSERT INTO driver( driver_name, contact_number, nic, license_number, password, username, car_type) VALUES('$dname','$phone','$nic','$licno','$password','$username','$vehicle')";
                        $query_run = mysqli_query($con,$query);
                        if($query_run)
                        {
                            echo '<script type="text/javascript">alert("Driver Registered. Welcome!")</script>';
                            $_SESSION['dname'] = $dname;
                            /*$_SESSION['phone'] = $phone;
                            $_SESSION['nic'] = $nic;
                            $_SESSION['licno'] = $licno;
                            $_SESSION['car_type'] = $vehicle;
                            $_SESSION['username'] = $username;
                            $_SESSION['password'] = $password;
                            $_SESSION['cpassword'] = $cpassword;*/
                            //header( "Location: index_driver.php");
                            echo "<script> window.location.href = 'index_driver.php' </script>";
                        }
                        else
                        {
                            echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
                        }
						
					}
					else
					{
						echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
				}
				
			}
			else
			{
			}
		?>
	

</body>

</html> 
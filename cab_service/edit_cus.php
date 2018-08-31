<?php
    session_start();

    if($_SESSION['usertype'] != 'admin' || $_SESSION['username'] != 'ucsc'  ){
         header('Location:login.php');
    }
?>


<html>

  <head>
  		<link rel="stylesheet" type="text/css" href="css/style.css">
  	
 
		<style>
			.center {
				margin: auto ;
				margin-top: 15px;
				margin-bottom: 15px;
				width: 50%;
				padding: 10px;
				text-align: center;
				border: 2px solid grey;
				background-color: pink;
			}
		
				.view {
				margin: auto ;
				margin-top: 15px;
				margin-bottom: 15px;
				width: 50%;
				padding: 10px;
				text-align: center;
				border: 2px solid grey;
				background-color: pink;
		</style>
  </head>

  <body class="admin_body">
  		<div id="menu">
		
		

		<h1 style="text-align:center">View customer Details</h1>

		<div class ="center">

		  <form method="post" action="edit_cus.php">

			Enter username: <input type="text" name="uname"><br><br>

			<button type="submit" name="sub">Search Customer</button>
			
		   </form>
		</div>

		<?php

 $conn = mysqli_connect ("localhost", "root", "", "cab_service") or die ("cannot connect");

			if (null !==(filter_input(INPUT_POST, 'sub'))){

					$uname=mysqli_real_escape_string($conn,filter_input(INPUT_POST, 'uname'));

					$sql = "SELECT username,customer_id,customer_name,contact_number,email,nic,password FROM Customer WHERE username='$uname';";

					$result=mysqli_query($conn,$sql);

					$queryResult=mysqli_num_rows($result);

					if ($queryResult > 0){

						echo "<p style=\"font-size:18px;text-align:center\">customer is available</p>";
						echo "<div class=\"view\">";
						echo "<table border=1 style=\"width:100%\">";
						echo "<tr><th>Username</th><th>customer_id</th><th>customer_name</th><th>contact_number</th><th>email</th><th>nic</th><th>Password</th></tr>";

						while ($row=mysqli_fetch_assoc($result)){

							$uname = $row['username'];
							$cus_id=$row['customer_id'];
							$cus_name=$row['customer_name'];
							$contact_number = $row['contact_number'];
							$email = $row['email'];
							$nic = $row['nic'];
							$password=$row['password'];
							echo "<tr><td>".$uname."</td><td>".$cus_id."</td><td>".$cus_name."</td><td>".$contact_number."</td><td>".$email."</td><td>".$nic."</td><td>".$password."</td></tr>";    
							}
						    echo "</table>";
						    echo "</div>";

					}else {

						echo "<p style=\"text-align:center\">customer not available</p>";
					}
				}



			
		?>

		<hr>

		<h1 style="text-align:center">Change Customer Details</h1>	

		<form action="edit_cus.php" method="post">

			<div class="center" style="text-align:center">

				<h3 style="text-align:center;">Enter Details to change</h3>

				<table align="center">

				 <tr> <td>User Name:</td>           <td><input type="text" name="uname" style="margin-left:50px" required/></td> </tr>

				 <tr> <td>Customer Name:</td>       <td><input type="text" name="customer_name"  style="margin-left:50px" required/></td> </tr>

				 <tr> <td>NIC:</td>                 <td><input type="text" name="nic" style="margin-left:50px" required/></td> </tr>

				 <tr> <td>contact Number:</td>      <td><input type="text" name="contact_number" style="margin-left:50px" required/></td> </tr>

				
				 <tr> <td>Email:</td>              <td><input type="text" name="email" value="" style="margin-left:50px" required/></td> </tr>

				</table>
				
				
				<button type="submit" name="edit" style="width:210px">Change Customer Details</button>
				
				
			</div>

		</form>

	</div>
      
              <center><a href="customers.php"><button type="submit" name="submit" class="but">Back</button></a></center><br><br>
                    
	</body>
	 
</html>

<?php



	if(isset($_POST['edit'])){
		$uname = $_POST['uname'];
		$cus_name=$_POST['customer_name'];
		$nic =  $_POST['nic'];
		$contact_number =  $_POST['contact_number'];
		$email =  $_POST['email'];
		
		
		$sql = "UPDATE customer SET customer_name='$cus_name', nic='$nic',email='$email',contact_number='$contact_number' WHERE username='$uname';";

		if($mysqli_query = mysqli_query($conn, $sql) === TRUE){
			echo "<script>alert(\"Successfully updated!\");</script>";
		}
		else { 
			echo "<script>alert(\"Error\");</script>";
		}
	
	}
	

	$mysqli_close = mysqli_close($conn);
?>


		
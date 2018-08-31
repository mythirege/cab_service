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
		<h1 style="text-align:center">View Driver Details</h1>

		<div class ="center">

		<form method="post" action="edit_driver.php">

			Enter username: <input type="text" name="uname"><br><br>

			<button type="submit" name="sub">Search Driver</button>
			
		</form>


		</div>


		<?php

 $conn = mysqli_connect ("localhost", "root", "", "cab_service") or die ("cannot connect");

			if (null !==(filter_input(INPUT_POST, 'sub'))){

					$uname=mysqli_real_escape_string($conn,filter_input(INPUT_POST, 'uname'));

					$sql = "SELECT username,driver_name,contact_number,nic,license_number,password FROM driver WHERE username='$uname';";

					$result=mysqli_query($conn,$sql);

					$queryResult=mysqli_num_rows($result);

					if ($queryResult > 0){
						echo "<p style=\"font-size:18px;text-align:center\">Driver is available</p>";
						echo "<div class=\"view\">";
						echo "<table border=1 style=\"width:100%\">";
						echo "<tr><th>Username</th><th>driver_name </th><th>contact_number</th><th>nic</th><th>license_number</th><th>Password</th></tr>";

						while ($row=mysqli_fetch_assoc($result)){
							$uname = $row['username'];
							$driver_name = $row['driver_name'];
							$contact_number = $row['contact_number'];
							$nic = $row['nic'];
							$license_number = $row['license_number'];
							$password = $row['password'];

							echo "<tr><td>".$uname."</td><td>".$driver_name."</td><td>".$contact_number."</td><td>".$nic."</td><td>".$license_number."</td><td>".$password."</td></tr>";    
							}
						    echo "</table>";
						    echo "</div>";

					}else {
						echo "<p style=\"text-align:center\">Driver not available</p>";
					}
				}

		?>

		<hr>

		<h1 style="text-align:center">Change Driver Details</h1>

		<form action="edit_driver.php" method="post">

			<div class="center" style="text-align:center">

				<h3 style="text-align:center;">Enter Details to change</h3>

                <table align="center">
                	
				           <tr><td>User Name:</td>         <td> <input type="text" name="uname" style="margin-left:50px" required/></td> </tr>   
				           <tr><td>Driver Name:</td>       <td> <input type="text" name="driver_name" style="margin-left:50px" required/></td> </tr>   
				           <tr><td>contact Number:</td>    <td> <input type="text" name="contact_number" style="margin-left:50px" required/></td> </tr>   
				           <tr><td>NIC:</td>               <td> <input type="text" name="nic" style="margin-left:50px" required/></td> </tr>   
				           <tr><td>license Number</td>     <td>  <input type="text" name="license_number" style="margin-left:50px" required/></td> </tr>    
				    
				</table>
				
				
				<button type="submit" name="edit" style="width:210px">Change Driver Details</button>
			
				
			</div>
		</form>

		</div>
        	<center><a href="drivers.php"><button type="submit" name="back" class="but">Back</button></a></center> <br><br>
            
	</body>
</html>

<?php

 

	if(isset($_POST['edit'])){
		$uname = $_POST['uname'];
		$driver_name = $_POST['driver_name'];
		$contact_number = $_POST['contact_number'];
		$nic = $_POST['nic'];
		$license_number = $_POST['license_number'];
		
		$sql = "UPDATE driver SET driver_name='$driver_name',contact_number='$contact_number',nic='$nic',license_number='$license_number' WHERE username='$uname';";

		if($mysqli_query = mysqli_query($conn, $sql) === TRUE){
			echo "<script>alert(\"Successfully updated!\");</script>";
		}
		else { 
			echo "<script>alert(\"Error\");</script>";
		}
	
	}
	

	$mysqli_close = mysqli_close($conn);
?>

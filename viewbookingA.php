<?php
    session_start();

    if($_SESSION['usertype'] != 'admin' || $_SESSION['username'] != 'ucsc'  ){
         header('Location:login.php');
    }
?>


<html>
    <head>
        <title>Pinky Go-Admin-View Booking</title>
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
				width: 75%;
				padding: 10px;
				text-align: center;
				border: 2px solid grey;
				background-color: pink;
			}
             
		 </style>
    </head>
		
    <body class="admin_body">
        <div id="menu"><br><br><br>
			
		
        <h1 style="text-align:center">View Booking Details</h1>


          

<?php

include 'config.php';



    $retrieve = 'SELECT * FROM booking ORDER BY booking_id DESC';
	$result = mysqli_query($con, $retrieve);
	echo "<div class=\"view\">";
	echo "<table border=1 align=center>
		<tr>			
			<th>Booking ID</th>
            <th>Customer Name</th>
			<th>Pickup Location</th>
            <th>Drop Location</th>
            <th>Pickup Date</th>
            <th>Pickup Time</th>
			<th>Car Type</th>
            <th>Message</th>
		</tr>";
		
	while($row = mysqli_fetch_assoc($result)){
		
		echo "<tr>
			<td>".$row['booking_id']."</td>
			<td>".$row['customer_name']."</td>
			<td>".$row['pickup_loc']."</td>
            <td>".$row['drop_loc']."</td>
            <td>".$row['pickup_date']."</td>
            <td>".$row['pickup_time']."</td>
            <td>".$row['car_type']."</td>
            <td>".$row['message']."</td>
		</tr>";
				
	}	
	echo "</table>";
	echo "</div>";


		

$mysqli_close = mysqli_close($con);

?>
    <center><a href="adminbooking.php"><button type="submit" name="submit" class="but">Back</button></a></center>
</div>
</body>
</html>

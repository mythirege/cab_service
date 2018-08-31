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
			footer {
				background: #42A5F5;
				color: white;
				line-height: 60px;
				padding: 0 30px;
			}
			.center {
				
				padding: 10px 90px 10px 10px;
				text-align: center;
				border: 2px solid grey;
				background-color: pink;
				margin: auto ;
				margin-top: 20px;
				margin-bottom: 20px;
				width: 50%;
			}
		</style>

	</head>

	<body class="admin_body">
		       <div id="menu"><br><br><br>
		
		       <h1 style="text-align:center">Delete Driver Details</h1>

				<div class="center">

				<form action="delete_driver.php" method="post">

					<p style="font-size:18px;display: inline">Enter Driver name to delete: </p>

					<input type="text" name="del_dri_name"><br><br>

					<button type="submit" name="del2">Delete driver</button>
					
				</form>

				</div>

			
		
	</div>
			<center><button type="submit" name="back" class="but"><a href="drivers.php">Back</a></button></center> <br><br>
	</body>
</html>

<?php


$conn = mysqli_connect ("localhost", "root", "", "cab_service") or die ("cannot connect");

	if (null !==(filter_input(INPUT_POST, 'del2'))){

        $del_dri_name=mysqli_real_escape_string($conn,filter_input(INPUT_POST, 'del_dri_name'));

        $sql1 = "DELETE FROM driver WHERE username='$del_dri_name';";

        $result2 = mysqli_query($conn,$sql1);
        
        if (!$result2){
            echo "<script>alert(\"Error Occured!\");</script>";
        }else {
            echo "<script>alert(\"Successfully deleted!\");</script>";
        }
    }

    
	$mysqli_close = mysqli_close($conn);
?>

		

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
    			<div id="menu"><br><br>

				<h1 style="text-align:center">Delete customer Details</h1>

				<div class="center">

				 <form action="delete_cus.php" method="post">

					 <p style="font-size:18px;display: inline">Enter Customer name to delete: </p>

					 <input type="text" name="dname"><br><br>

					<button type="submit" name="del">Delete Customer</button>
					
				 </form>

				</div>

	</div>	
        
              <center><a href="customers.php"><button type="submit" name="submit" class="but">Back</button></a></center>
                    
	</body>

</html>

<?php


$conn = mysqli_connect ("localhost", "root", "", "cab_service") or die ("cannot connect");

	if (null !==(filter_input(INPUT_POST, 'del'))){

        $dname=mysqli_real_escape_string($conn,filter_input(INPUT_POST, 'dname'));

        $sql1 = "DELETE FROM customer WHERE username='$dname';";

        $result2 = mysqli_query($conn,$sql1);
        
        if (!$result2){
            echo "<script>alert(\"Error Occured!\");</script>";
        }else {
            echo "<script>alert(\"Successfully deleted!\");</script>";
        }
    }

    
	$mysqli_close = mysqli_close($conn);
?>

		

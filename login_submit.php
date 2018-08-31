<?php
            include('config.php');
            session_start();
			if(isset($_POST['login']))
			{
				$username=$_POST['username'];
				$password=$_POST['password'];
                $usertype =$_POST['usertype'];
                
                if ($usertype == "customer"){
				    $query = "SELECT * from customer WHERE username='$username' and password='$password' ";
                    //echo $query;
                    $query_run = mysqli_query($con,$query);
                    //echo mysql_num_rows($query_run);
                    if($query_run)
                    {
                        if(mysqli_num_rows($query_run)>0)
                        {
                        $row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
                            
                        //session_start();//
                        $_SESSION['usertype'] = $usertype;
                        $_SESSION['username'] = $username;
                        
                        header( "Location: index_customer.php");
                        }
                        else
                        {
                            echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
                        }
                    }
                    else
                    {
                        echo '<script type="text/javascript">alert("Database Error")</script>';
                    }
                
                }
                
                elseif($usertype == "driver"){
                    $query = "SELECT * from driver WHERE username='$username' and password='$password' ";
                    //echo $query;
                    $query_run = mysqli_query($con,$query);
                    //echo mysql_num_rows($query_run);
                    if($query_run)
                    {
                        if(mysqli_num_rows($query_run)>0)
                        {
                        $row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);

                        
                        $_SESSION['usertype'] = $usertype;
                        $_SESSION['username'] = $username;

                        header( "Location: index_driver.php");
                        }
                        else
                        {
                            echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
                        }
                    }
                    else
                    {
                        echo '<script type="text/javascript">alert("Database Error")</script>';
                    }
                }
                
                elseif($usertype == "admin"){
                    $query = "SELECT * from admin WHERE username='$username' and password='$password' ";
                    //echo $query;
                    $query_run = mysqli_query($con,$query);
                    //echo mysql_num_rows($query_run);
                    if($query_run)
                    {
                        if(mysqli_num_rows($query_run)>0)
                        {
                        $row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);

                        
                        $_SESSION['usertype'] = $usertype;
                        $_SESSION['username'] = $username;

                        header( "Location: admin.php");
                        }
                        else
                        {
                            echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
                        }
                    }
                    else
                    {
                        echo '<script type="text/javascript">alert("Database Error")</script>';
                    }
                }
                
                else
                {
                    echo '<script type="text/javascript">alert("Error connecting")</script>';
                }
			}

			
		?>

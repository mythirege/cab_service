<?php
    session_start();
    
    include 'config.php';

    if($_SESSION['usertype'] != 'customer' || !isset($_SESSION['username'])){
         header('Location:login.php');
    }
?>


<html>
    <head>
        <title> welcome to reservation</title>

           <link rel="stylesheet" type="text/css" href="css/style.css"/>
       

     

        <?php include 'includes/header_dashD.php' ?>


    </head>
    <body style="background-image: url(images/cusback.jpg)">
         <div class="grid-box"> 
                   <form name="book" action="booking-form.php" method="post">
                        <table align="center" >
                           <tr>
                              <th align="center"><h2>Book now!</h2></th>
                           </tr>

                           <tr>
                              <td class="data4" >Name</td>
                           </tr>

                           <tr>
                              <td> <input type="text" name="customer_name" required></td>
                          </tr>

                          <tr>
                              <td class="data4" >Email</td>
                           </tr>

                           <tr>
                              <td > <input type="email" name="email" size="100" required></td>
                          </tr>

                          <tr>
                              <td class="data4" >Phone Number</td>
                           </tr>

                           <tr>
                              <td> <input type="text" name="contact_no" size="100" required></td>
                          </tr>

                           <tr>
                              <td class="data4" >Enter Pickup Location</td>
                           </tr>

                           <tr>
                              <td> <input type="text" name="pickup_loc" size="100" required></td>
                          </tr>

                           <tr>
                              <td class="data4">Enter Drop Location</td>
                           </tr>

                           <tr>
                              <td><input type="text" name="drop_loc" size="100" required></td>
                           </tr>

                           <tr>
                              <td class="data4">Car Type
                                  <input type="radio" name="car_type" value=1 required>Tuk   <img src="images/tuk.png" width="50" height="50">
                                  <input type="radio" name="car_type" value=2 required>Nano  <img src="images/nano.png" width="50" height="50">
                                  <input type="radio" name="car_type" value=3 required>Car   <img src="images/car.png" width="50" height="50">
                                  <input type="radio" name="car_type" value=4 required>Van   <img src="images/van.png" width="50" height="50">
                              </td>
                           </tr><br><br>

                           <tr>
                              <td class="data4">Pick-up Date</td>
                           </tr>

                           <tr>
                              <td><input type="date" name="pickup_date" required></td>
                           </tr>

                           <tr>
                              <td class="data4">Pick-up Time</td>
                           </tr>

                          <tr>
                              <td><input type="time" name="pickup_time" size="100" required></td>
                          </tr>

                          <tr>
                              <td class="data4">Message</td>
                          </tr>

                           <tr>
                              <td>
                                <textarea name="message" rows=“5” cols=“60” ></textarea>
                              </td>
                           </tr>
                            
                            <tr>
                                <td align="center">
                                   <br><br><button type="submit" name="book" class="but" >BOOK YOUR VEHICLE</button>
                                </td>
                                <td align="center">
                                     <br><br><a href="index_customer.php" class="but">BACK</a>
                                </td>
                            </tr>


                       </table>

                    </form>
            </div>

    </body>



<?php
    if (isset($_POST["book"]))
    {
        
        $cn = $_POST["customer_name"];
        //$email = $_POST["email"];
        //$contact = $_POST["contact_no"];
        $pl = $_POST["pickup_loc"];
        $dl = $_POST["drop_loc"];
        $ct = $_POST["car_type"];
        $pd = $_POST["pickup_date"];
        $pt = $_POST["pickup_time"];
        $m = $_POST["message"];
        
        $sql = "INSERT INTO booking (customer_name, pickup_loc, drop_loc, pickup_date, pickup_time, car_type, message) VALUES ('$cn', '$pl', '$dl', '$pd', '$pt', '$ct', '$m')";
        mysqli_query($con, $sql);
        
         if (!$sql){
            echo "<script>alert(\"Error Occured!\");</script>";
        }else {
            echo "<script>alert(\"Booking Confirmed!\");</script>";
        }
    }
 
?>


</html>


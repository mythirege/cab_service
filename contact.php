<html>
    <head>
        <?php include 'includes/header.php' ?>

        <title>Pinky Go - Contact Us</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        
        
    </head>

        
    <body class="contact_body">
		<div class="form-box">
		
            <h1 align="center"><font color="#FF1493">Get in touch</font></h1>
                    <p>
                       <font color="#FF1493"> We would love to hear from you. Get in touch with us by email.</font>
                    </p>

                   <font color="#FF1493"> 
                       <form class="form" method="post" action="#">
                            Name:<br>
                            <input type="text" name="name"><br>
                            Email Address:<br>
                            <input type="email" name="email" required><br>
                            Leave a Message:<br>
                            <input type="text" name="message" required><br><br>
                            <input type="submit" name="submit" class="submit-button">
                        </form>
                    </font>
					
					<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1980.4511727339338!2d79.8595984841148!3d6.902280943055047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2596309dfdd3f%3A0x45a4b0e7834ac0d4!2sUniversity+Of+Colombo!5e0!3m2!1sen!2slk!4v1531456468219" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></center>
		
		
		
        </div>
    
        
    <?php 
        if(isset($_POST['submit'])){
            include ('config.php');

            $name =$_POST['name'];
            $email =$_POST['email'];
            $message =$_POST['message'];   



            $sql = "INSERT INTO contact (name,email,message)
            VALUES ('$name','$email','$message')";

            mysqli_query($con,$sql);
        }
    ?>
          
    <?php include 'includes/footer.php' ?>
      
    </body>

</html>


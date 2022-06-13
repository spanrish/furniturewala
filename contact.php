
<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
if(isset($_POST['submit'])){

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $feedback = mysqli_real_escape_string($conn, $_POST['feedback']);

 
    $insert = "INSERT INTO user_feedback(email , feedback) VALUES('$email','$feedback') ";
         mysqli_query($conn, $insert);
         header('location:home2.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <link rel="shortcut icon" type="image/png" href="all_image/title-logo2.jpeg" height="0.5">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <header>
        <nav>
            
            <div class="logo">
                <span2>F</span2><span>urniture</span>
                <span2>W</span2><span>ala</span>
            </div>
            <div class="menu">
                <ul>
                    <a href="home2.php"><i class="fa fa-home"></i></a>
                    <!-- ---------------------------------------------- -->
                <li><a href="#">Who we Are</a>
                    <ul>
                    <li>
                        <a href="about-us.php" target="_blank">About Us</a>
                    </li>
                    <li><a href="our-story.php">Our Story</a></li>
                </ul>
                </li>
                <!-- ------------------------------------------------------- -->
                <li><a href="#">Products</a>
                <ul>
                <li><a href="chair.php"> Chair</a></li>
                
                <li><a href="wardrobe.php">Wardrobe</a></li>
            
                <li><a href="bed.php">Bed</a></li>
                
                <li><a href="couch.php">Couch</a></li>
                
                <li><a href="table.php">Table</a></li>
                    <li><a href="more.php">More  <i class="fa fa-plus"></i></a></li>
                    </ul>
                    </li>
                <li><a href="#">Contact Us</a></li>
                <a href="logout.php"><i class="fa fa-user"></i> <span><?php echo $_SESSION['user_name'] ?></span></a>
                <a href="#"><i class="fa fa-shopping-bag"></i> </a>
                
                </ul>
            </div>
            <div class="icon">
                <!-- <i class="fa fa-search"></i> -->
            </div>
        </nav>
    </header>
    <section id="page_header" class="about-header">
        <h2>#Let's_talk</h2>
    </section>
 <section id="contact-details" class="section-p1">
     <div class="details">
     <span>GET IN TOUCH</span>
     <h2>Visit our office or contact us today</h2>
     <h3>Head Office</h3>
     <div>
         <li>
             <i class="fa fa-map"></i>
             <p>17,Acharya Jagadish Chandra Road,Kol-75</p>
         </li>
         <li>
            <i class="fa fa-envelope"></i>
            <p>furniturewala0315@gmail.com</p>
        </li>
        <li>
            <i class="fa fa-phone"></i>
            <p>033-24850687</p>
        </li>
        <li>
            <i class="fa fa-clock-o"></i>
            <p>Monday to Saturday 10am-18:00pm</p>
        </li>
     </div>
     </div>
     <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3685.067595663823!2d88.31517471479135!3d22.539140485199997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02791818d97365%3A0x144fd324e019e7b!2sKhidderpore%20Tram%20Depot!5e0!3m2!1sen!2sin!4v1654685380385!5m2!1sen!2sin" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
 </section>
 
    <footer>
        <div class="reviews">
            <div>
                <h2>Leave your feedback here</h2>
            </div>
            <div class="form-container">
            <form action="" method="post">
            <?php
   if(isset($error)){
      foreach($error as $error){
         echo '<span class="error-msg">'.$error.'</span>';
      };
   };
   ?>
   <input type="email" name="email" required placeholder="enter your email">
            <input type="text" name="feedback" required placeholder="enter your feedback">
            <input type="submit" name="submit" value="submit" class="form-btn">
            </form>
            </div>
        </div>
        <div class="f-contact">
            <div>
                <h2>Information</h2>
                <br>
                <p>Address: 17,Acharya Jagadish Chandra Road,Kol-75</p>
                <p>Phone:033-24850687</p>
                <p>Hours:10:00-18:00 Mon-Sat</p>
            </div>
            <div>
            </div>
            <div >
                <br> <br><br><br><br><br> <br><br> <br> <br><br> <br> <br><br> <br> <br><br> <br> <br>
                <i class="fa fa-whatsapp"></i>
                <i class="fa fa-youtube"></i>
                <i class="fa fa-facebook"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-twitter"></i>
            <h5><a href="home2.php">©Furniture Wala</a></h5> 
        </div>
        <div>
            <h2> Details</h2>
            <br>
            <a href="Gallery2.php">Gallery</a><br>
            <a href="about-us.php">About</a><br>
            <a href="more.php">Pricing Plans</a><br>
        </div>
        <div>
            <h2>Help and Support</h2>
            <br>
            <a href="#">Disclaimer</a><br>
            <a href="#">Privacy Policy</a><br>
            <a href="#">Terms and Conditions</a><br>
        </div>
</footer>

</body>
</html>
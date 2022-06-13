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
    <title>Our Story</title>
    <link rel="stylesheet" type="text/css" href="css/aboutus.css">
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
                    <li><a href="#hello">Our Story</a></li>
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
                <li><a href="contact.php">Contact Us</a></li>
                <a href="logout.php"><i class="fa fa-user"></i> <span><?php echo $_SESSION['user_name'] ?></span></a>
                <a href="#"><i class="fa fa-shopping-bag"></i> </a>
                
                </ul>
            </div>
            <div class="icon">
                <!-- <i class="fa fa-search"></i> -->
            </div>
        </nav>

    </header>


    <section id="hello">
        <div class="he">
       <h1>Our Journey.</h1>
        </div>
<div class="he1">
    <p>
        Furniture Wala is not a dream. But for us it was not at all easy to pursue our dream. For a long time we were deciding to make something for the people at a reliable cost. <br><br> We want every section of the society to get good quality of products. In India, economy is the main issue. Most of the people dream good products but they are not able to get that due to high price. Considering all these factors, we thought of furniture. Yes, Furniture. As it is one of the most demanding products in everyday life. But how could we deliver it to our customer at low price. This question stroke us everyday. Then we have decided to connect to every part of India where good quality of wood can be obtained. We have chosen over 100 talented carpenters  and over 50 good interior designer. And togetherly we worked as a team for 1 year. And finally we are here. Yes yours Furniture Wala is here. We want all of you to be a part of our journey. Don't waste any time grab your offer now.   As <br><br> OFFER CLOSES SOON.
    </p>
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
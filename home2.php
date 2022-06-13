
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
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FurnitureWala</title>
    <link rel="stylesheet" type="text/css" href="css/home2.css">
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
                <li><a href="#">Who we Are</a>
                <ul>
                    <li>
                        <a href=" about-us.php">About Us</a>
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
                <li><a href="contact.php">Contact Us</a></li>
                <a href="logout.php"><i class="fa fa-user"></i> <span><?php echo $_SESSION['user_name'] ?></span></a>
                <a href="cart.php" target="_blank" ><i class="fa fa-shopping-bag"></i> </a>
               
                
                </ul>
            </div>
            
        </nav>
         <!-- <br> <br> <br>  <br> <br> <br>  <br> <br> <br>  <br> <br> <br> -->
        <section >
        <div class="h-text">
            <h1> Where Dreams Meet Reality</h1>
            
            <div>
            </div>
                <div class="wrapper">
                    <div class="search-input">
                      <a href="" target="_blank" hidden></a>
                      <input type="text" placeholder="Type to search..">
                      <div class="autocom-box">
                        <!-- here list are inserted from javascript -->
                      </div>
                      <div class="icon"><i class="fa fa-search"></i></div>
                    </div>
                </div>          
                </div>
</section>
        <script src="js/search.js"></script>
    </header>
<!-- ---------------------------------------------------------------------------------------------------------------------------------- -->

<section class="member">
    <div class="member-info">
        <h1>What's <span>Trending </span>?</h1>


    </div>
    <div class="m-images">
      <img src="all_image/chair.jpg" height="200px" width="200px" >
        <img src="all_image/chair1.jpg" height="200px" width="200px">
        <img src="all_image/table.jpg" height="200px" width="200px">
        <!-- <img src="table2.jpg" height="200px" width="200px"> -->
        <img src="all_image/photo2.jfif" height="200px" width="200px">
        <img src="all_image/photo3.jfif" height="200px" width="200px">
        <img src="all_image/photo4.jfif" height="200px" width="200px">

    </div>
</section>


<section class="vision">

    
    
        <div class="m-left">
            <h1>Our <span>Vision</span></h1>
        </div>


    <div class="m-right" style="position: relative;">
        <br>
            <p>
            This is our small initiative to provide high quality furnitures at affordable prices. We hope we can provide you the best services at your doorstep. 
            The journey of furniture wala has been started since 2022 and it has been a amazing journey. We would like to thank all our team member for their immense work cooperation and constant support.
            We would like to offer you to become the member of our family. Let's start your journey with Furniture wala today. 
        </p>
        </div>
    

    

</section>
<br>

<section>
    <div class="Info">
        <h1>Our <span>Information</span></h1>
        </div>
        <br>
        <br>
    <div class="cover">
        <div class="box">
        <img src="ritish.jpeg" width="300" height="300">
        <h3>Ritish Biswas</h3>
        <br>
        <p>Founder of Furniture Wala. I welcome you all to be the part of our journey. </p>
        </div>
        <div class="box1">
        <img src="spandita.jpeg" width="300" height="300">
        <h3>Spandita Banerjee</h3>
        <br>
        <p>Co-founder of Furniture Wala. I would like to thank all of you to be with us so long and would hope to get your support in future also.</p>
    </div>
    </div>
</section> 
<br>
<br>





    <footer>
        <div class="reviews" action="" method="post">
            <div>
                <h2>Leave your feedback here &nbsp;&nbsp;:-</h2>
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
                <h1>Information</h1>
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
                <h1> Details</h1>
                <br>
                <a href="Gallery2.php">Gallery</a><br>
                <a href="about-us.php">About</a><br>
                <a href="more.php">Pricing Plans</a><br>
            </div>
            <div>
                <h1>Help and Support</h1>
                <br>
                <a href="#">Disclaimer</a><br>
                <a href="#">Privacy Policy</a><br>
                <a href="#">Terms and Conditions</a><br>
            </div>
    </footer>

</body>

</html>
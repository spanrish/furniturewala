

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
    <title>Offers</title>
    <link rel="stylesheet" type="text/css" href="css/more.css">
    <link rel="shortcut icon" type="image/png" href="all_image/title-logo2.jpeg" height="0.5">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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
                    <!-- ---------------------------------------------- -->
                    <li><a href="home2.php "><i class="fa fa-home"></i></a></li>
                <li><a href="#">Who we Are</a>
                <ul>
                    <li>
                        <a href="">About Us</a>
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
                <a href="#"><i class="fa fa-shopping-bag"></i> </a>
                </ul>
            </div>
            <div class="icon">
                <!-- <i class="fa fa-search"></i> -->
            </div>
        </nav>
        </header>
<!-- image sliderrrrrrrrrrrrr -->
<section id="slideshow">
<div class="slider">
    <div class="slides">
        <input type="radio" name="radio.btn" id="radio1">
        <input type="radio" name="radio.btn" id="radio2">
        <input type="radio" name="radio.btn" id="radio3">
        <input type="radio" name="radio.btn" id="radio4">
        <input type="radio" name="radio.btn" id="radio5">
        <div class="slide first">
            <img src="all_image/slider1.jpeg" alt="">
        </div>
        <div class="slide">
            <img src="all_image/slider2.jpeg" alt="">
        </div>
        <div class="slide">
            <img src="all_image/slider3.jpeg" alt="">
        </div>
        <div class="slide">
            <img src="all_image/slider4.jpeg" alt="">
        </div>
        <div class="slide">
            <img src="all_image/slider5.jpeg" alt="">
        </div>

        <div class="navigation-auto">
        
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
            <div class="auto-btn5"></div>
        </div>
    </div>
    <div class="navigation-manual">
        
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
        <label for="radio5" class="manual-btn"></label>
    </div>
</div>
</section>
<br><br><br><br>
<script type="text/javascript">
    var counter=1;
    setInterval(function(){
        document.getElementById('radio'+ counter).checked=true;
        counter++;
        if(counter > 5)
        {
            counter=1;
        }
    },4000)
</script>
<section id="sm-banner" class="section-p1">
    <div class="banner-box1" data-aos="fade-up-right">
        <h4>crazy deals</h4>
        <h1>buy 1 get 1 free</h1>
        <span>The best classic furniture is on sale at Furniture Wala</span>
        <button class="black"><a href="#buyfree"> Learn More</a></button>
    </div>
    <div class="banner-box2" data-aos="fade-up-left" >
        <h4>Latest collection</h4>
        <h1>upcoming season</h1>
        <span>The best classic furniture is on sale at Furniture Wala</span>
        <button class="white"><a href="#more">Collection</a></button>
    </div>
    
</section>
<br><br><br><br> <br><br>
<section id="more" data-aos="zoom-in">
    <h1>Special Offers<span>LIVE!!!</span></h1>
    <br><br><br><br>
</section>
<section id="banner3">
    <div class="ban3"> 
    <a href="chair.php">
    <div class="banner-box3" data-aos="fade-up-right" >
        <h2> SEASONAL SALE </h2>
        <h4>Chair collection -50% OFF</h4>
    </div>
</a>
</div>


<div class="ban4">
    <a href="couch.php">
    <div class="banner-box4" data-aos="zoom-in-up" >
        <h2>SEASONAL SALE</h2>
        <h3>Couch collection -50% OFF</h3>
    </div>
</a>
</div>


<div class="ban5">
<a href="table.php">
    <div class="banner-box5" data-aos="fade-up-left" >
        <h2>SEASONAL SALE</h2>
        <h3>Chair Table set collection -50% OFF</h3>
    </div>
</a>
</div>


<div class="ban6">
    <a href="table.php">
        <div class="banner-box6" data-aos="fade-up-right" >
            <h2>SEASONAL SALE</h2>
            <h3>Table collection -50% OFF</h3>
        </div>
    </a>
</div>

<div class="ban7">
    <a href="wardrobe.php">
        
        <div class="banner-box7" data-aos="zoom-in-up" >
            <h2>SEASONAL SALE</h2>
            <h3>Wardrobe collection -5% OFF</h3>
        </div>
    </a>
</div>


<div class="ban8">

    <a href="bed.php">
        
        <div class="banner-box8" data-aos="fade-up-left" >
            <h2>SEASONAL SALE</h2>
            <h3>Bed collection -10% OFF</h3>
        </div>
    </a>
</div>


</section>
<br><br><br><br><br>
 
<section id="buyfree" >
    <div data-aos="fade-up">
        <h1>
            Buy 1 Get 1 FREE
        </h1>
        </div>
        <div class="m-images" data-aos="fade-up">
            <img src="all_image/chair.jpg" height="200px" width="200px" >
              <img src="all_image/chair1.jpg" height="200px" width="200px">
              <img src="all_image/table.jpg" height="200px" width="200px">
              <!-- <img src="table2.jpg" height="200px" width="200px"> -->
              <img src="all_image/photo2.jfif" height="200px" width="200px">
              <img src="all_image/photo3.jfif" height="200px" width="200px">
              <img src="all_image/photo4.jfif" height="200px" width="200px">
      
          </div>
    
</section>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

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
                    <a href="">About</a><br>
                    <a href="#more">Pricing Plans</a><br>
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
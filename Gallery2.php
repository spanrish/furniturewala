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
    <title>Gallery</title>
    <link rel="stylesheet" type="text/css" href="css/gallery.css">
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
    <section id="page_header" class="about-header">
    </section>
    <section class="filter-gallery">
        <div class="portfolio-menu">
            <ul>
                <li class="active" data-filter="*">All</li>
                <li data-filter=".chair">Chair</li>
                <li data-filter=".table">Table</li>
                <li data-filter=".wardrobe">Wardrobe</li>
                <li data-filter=".couch">Couch</li>
                <li data-filter=".bed">Bed</li>
            </ul>
        </div>
        <div class="portfolio-item">
        <div class="item chair"  >
            <img src="all_image/p5.jpg" width="100" height="100">
         </div>
         <div class="item table" >
             <img src="all_image/t65.png" width="100" height="100">
          </div>
          <div class="item wardrobe"  >
             <img src="all_image/w10.jfif" width="100" height="100">
          </div>
          <div class="item couch"  >
             <img src="all_image/c8.webp" width="100" height="100">
          </div>
          <div class="item bed"  >
             <img src="all_image/b6.jpg" width="100" height="100">
          </div>
          <div class="item chair"  >
            <img src="all_image/p13.webp" width="100" height="100">
         </div>
         <div class="item table" >
             <img src="all_image/t20.webp" width="100" height="100">
          </div>
          <div class="item wardrobe" >
             <img src="all_image/w9.jfif" width="100" height="100">
          </div>
          <div class="item couch" >
             <img src="all_image/C1.jpg" width="100" height="100">
          </div>
          <div class="item bed"  >
             <img src="all_image/b1.jpeg" width="100" height="100">
          </div>


          <div class="item chair"  >
            <img src="all_image/p6.jpeg" width="100" height="100">
         </div>
         <div class="item table" >
             <img src="all_image/t9.webp" width="100" height="100">
          </div>
          <div class="item wardrobe"  >
             <img src="all_image/w15.jpg" width="100" height="100">
          </div>
          <div class="item couch"  >
             <img src="all_image/c2.webp" width="100" height="100">
          </div>
          <div class="item bed"  >
             <img src="all_image/b9.jpg" width="100" height="100">
          </div>


          <div class="item chair"  >
            <img src="all_image/p8.webp" width="100" height="100">
         </div>
         <div class="item table" >
             <img src="all_image/t50.jpg" width="100" height="100">
          </div>
          <div class="item wardrobe"  >
             <img src="all_image/w13.jpg" width="100" height="100">
          </div>
          <div class="item couch" >
             <img src="all_image/c9.jpg" width="100" height="100">
          </div>
          <div class="item bed" >
             <img src="all_image/b8.webp" width="100" height="100">
          </div>
          <div class="item chair">
            <img src="all_image/p4.jpg" width="100" height="100">
       </div>
       <div class="item table">
          <img src="all_image/t4.jpg" width="100" height="100">
       </div>
        <div class="item wardrobe">
          <img src="all_image/w4.jfif" width="100" height="100">
      </div>
    <div class="item couch">
        <img src="all_image/c4.webp" width="100" height="100">
     </div>
     <div class="item bed">
         <img src="all_image/b4.jpg" width="100" height="100">
     </div>

        <div class="item chair">
        <img src="all_image/p7.webp" width="100" height="100">
        </div>

         <div class="item table">
             <img src="all_image/t5.jpg" width="100" height="100">
          </div>
          <div class="item wardrobe" >
             <img src="all_image/w5.jfif" width="100" height="100">
          </div>
          <div class="item couch" data-aos="zoom-in" >
             <img src="all_image/c5.jpg" width="100" height="100">
          </div>
          <div class="item bed" data-aos="zoom-in" >
             <img src="all_image/b5.jpg" width="100" height="100">
          </div>


          <div class="item chair">
            <img src="all_image/P12.webp" width="100" height="100">
         </div>
         <div class="item table">
             <img src="all_image/t6.jpg" width="100" height="100">
          </div>
          <div class="item wardrobe">
             <img src="all_image/w6.jfif" width="100" height="100">
          </div>
          <div class="item couch">
             <img src="all_image/c7.jpg" width="100" height="100">
          </div>
          <div class="item bed">
             <img src="all_image/b7.jpg" width="100" height="100">
          </div>
          <div class="item chair"  >
            <img src="all_image/p3.jpg" width="100" height="100">
         </div>
         <div class="item table" >
             <img src="all_image/t3.jpg" width="100" height="100">
          </div>
          <div class="item wardrobe">
              <img src="all_image/w3.jfif" width="100" height="100">
         </div>
         <div class="item couch">
            <img src="all_image/c3.jpg" width="100" height="100">
         </div>
          <div class="item bed">
        <img src="all_image/b3.jpg" width="100" height="100">
        </div>
         
        <div class="item chair">
            <img src="all_image/p11.jpg" width="100" height="100">
       </div>
       <div class="item table">
          <img src="all_image/t8.jpg" width="100" height="100">
       </div>
        <div class="item wardrobe">
          <img src="all_image/w17.jpg" width="100" height="100">
      </div>
    <div class="item couch">
        <img src="all_image/c6.webp" width="100" height="100">
     </div>
     <div class="item bed">
         <img src="all_image/b2.jpg" width="100" height="100">
     </div>

       


        </div>
       </section>
       <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
   <script type="text/javascript">
   $('.portfolio-item').isotope({
  // options
  itemSelector: '.item',
  layoutMode: 'fitRows'
});
$('.portfolio-menu ul li').click(function(){
    $('.portfolio-menu ul li').removeClass('active');
    $(this).addClass('active');
    var selector=$(this).attr('data-filter');
    $('.portfolio-item').isotope({
        filter:selector
    });
    return false;
});
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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
            <a href="#page_header">Gallery</a><br>
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
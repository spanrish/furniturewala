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

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM cart WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'Product already added to cart';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO cart(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'Product added to cart succesfully';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>products</title>
   <link rel="shortcut icon" type="image/png" href="all_image/title-logo2.jpeg" height="0.5">
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/pro-style.css">
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
                    <li><a href="home2.php"><i class="fa fa-home"></i></a></li>
                <li><a href="#">Who we Are</a>
                <ul>
                    <li>
                        <a href="about-us.php">About Us</a>
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
                <a href="cart.php"><i class="fa fa-shopping-bag"></i> </a>
                </ul>
            </div>
            <div class="icon">
                <!-- <i class="fa fa-search"></i> -->
            </div>
        </nav>
        </header>
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fa fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>



<div class="container">

<section class="products">

   <h1 class="heading">Couch</h1>

   <div class="box-container">

      <?php
      
      $select_products = mysqli_query($conn, "SELECT * FROM couch");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>

      <form action="" method="post">
         <div class="box">
            <img src="all_image/<?php echo $fetch_product['image']; ?>" alt="" >
            <h3><?php echo $fetch_product['title']; ?></h3>
            <div class="price">₹<?php echo $fetch_product['price']; ?>/-</div>
            <input type="hidden" name="product_name" value="<?php echo $fetch_product['title']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <div class="star">
                         
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                       </div>
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            <input type="submit" class="btn" value="Add to cart" name="add_to_cart">
         </div>
      </form>

      <?php
         };
      };
      ?>

   </div>

</section>

</div>

<!-- custom js file link  -->
<script src="js/scriptadmin.js"></script>




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
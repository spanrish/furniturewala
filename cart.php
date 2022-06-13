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
if(isset($_POST['update_update_btn'])){
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($conn, "UPDATE cart SET quantity = '$update_value' WHERE id = '$update_id'");
   if($update_quantity_query){
      header('location:cart.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM cart WHERE id = '$remove_id'");
   header('location:cart.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM cart");
   header('location:cart.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shopping cart</title>
   <link rel="shortcut icon" type="image/png" href="all_image/title-logo2.jpeg" height="0.5">
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/adminstyle.css">

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

<div class="container">

<section class="shopping-cart">

   <h1 class="heading">Shopping Cart</h1>

   <table>

      <thead>
         <th>Image</th>
         <th>Name</th>
         <th>Price</th>
         <th>Quantity</th>
         <th>Total price</th>
         <th>Action</th>
      </thead>

      <tbody>

         <?php 
         
         $select_cart = mysqli_query($conn, "SELECT * FROM cart");
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
         ?>

         <tr>
            <td><img src="all_image/<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
            <td><?php echo $fetch_cart['name']; ?></td>
            <td>₹<?php echo number_format($fetch_cart['price']); ?>/-</td>
            <td>
               <form action="" method="post">
                  <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart['id']; ?>" >
                  <input type="number" name="update_quantity" min="1"  value="<?php echo $fetch_cart['quantity']; ?>" >
                  <input type="submit" value="update" name="update_update_btn">
               </form>   
            </td>
            <td>₹<?php echo $sub_total = $fetch_cart['price'] * $fetch_cart['quantity']; ?>/-</td>
            <td><a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('Remove item from cart?')" class="delete-btn"> <i class="fa fa-trash"></i> Remove</a></td>
         </tr>
         <?php
           $grand_total += $sub_total;  
            };
         };
         ?>
         <tr class="table-bottom">
            <td><a href="chair.php" class="option-btn" style="margin-top: 0;">Continue Shopping</a></td>
            <td colspan="3">Grand total</td>
            <td>₹<?php echo $grand_total; ?>/-</td>
            <td><a href="cart.php?delete_all" onclick="return confirm('Are you sure you want to delete all?');" class="delete-btn"> <i class="fa fa-trash"></i> Delete All </a></td>
         </tr>

      </tbody>

   </table>

   <div class="checkout-btn">
      <a href="checkout.php" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>">Buy Now</a>
   </div>

</section>

</div>
   
<!-- custom js file link  -->
<script src="script.js"></script>


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
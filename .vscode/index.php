<?php 

$host="localhost";
$user="root";
$password="";
$db="demo";

mysql_connect($host,$user,$password);
mysql_select_db($db);


if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from loginform where user='".$uname."'AND Pass='".$password."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();

        }
    }

?>    

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<header class="header">

   <section class="flex">

      <a href="Home.html" class="logo"> Zaynah Fashions </a>

      <nav class="navbar">
         <a href="home.html">Home</a>
         <a href="about.html">About</a>
         <a href="clothing.html">Clothing</a>
         <a href="orders.html">Orders</a>
         <a href="contact.html">Contact</a>
      </nav>

      <div class="icons">
         <a href="search.html"><i class="fas fa-search"></i></a>
         <a href="cart.html"><i class="fas fa-shopping-cart"></i><span></span></a>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="menu-btn" class="fas fa-bars"></div>
      </div>

      <div class="profile">
         <p class="name">Hansini Dhrijalal</p>
         <div class="flex">
            <a href="profile.html" class="btn">Profile</a>
            <a href="#" class="delete-btn">Logout</a>
         </div>
         <p class="account"><a href="login.html">Login</a> or <a href="register.html">Register</a></p>
      </div>

   </section>

</header>

<section class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <input type="Email" required maxlength="50" name="Email" placeholder="Enter your email" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="Password" required maxlength="20" name="Pass" placeholder="Enter your password" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="Submit" value="Login now" class="btn" name="Submit">
      <p>Don't have an account? <a href="register.html">Register now</a></p>
   </form>

</section>

</section>

<footer class="footer">

   <section class="box-container">

      <div class="box">
         <img src="images/image69.gif" alt="">
         <h3>Our Email Address</h3>
         <a href="mailto:hansinilala40@gmail.com ">hansinilala40@gmail.com</a>
         <a href="mailto:hansinilala40@gmail.com">yattind@gmail.com</a>
      </div>

      <div class="box">
         <img src="images/image70.gif" alt="">
         <h3>Opening Hours</h3>
         <p> 8h:00 to 17h:00</p>
      </div>

      <div class="box">
         <img src="images/image71.gif" alt="">
         <h3>Our Address</h3>
         <a href=https://www.google.com/maps/place/Kyalami+Corner+Shopping+Centre/@-25.9847554,28.0728917,17z/data=!3m1!4b1!4m5!3m4!1s0x1e9571a3483c247d:0xc840e5753c064911!8m2!3d-25.9847602!4d28.0750804>Midrand , South Africa - 2311</a>
      </div>

      <div class="box">
         <img src="images/image72.gif" alt="">
         <h3>Our Contact Number</h3>
         <a href="tel:1234567890">0725950207</a>
         <a href="tel:1112223333">0725950207</a>
      </div>

   </section>

   <div class="credit">Created by <span> Hansini Dhrijalal </span> </div>

</footer>


<div class="loader">
   <img src="images/original.gif" alt="">
</div>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor:true,
            spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
   },
   breakpoints: {
      550: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>














































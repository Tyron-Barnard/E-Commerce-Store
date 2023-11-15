<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>About Us</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>



<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/shop3.png" alt="">
         <h3>why choose us?</h3>
         <p>At Groco, we offer the perfect blend of quality, style, and exceptional service. With our carefully curated collection of clothes, fashion items, shoes, and electronics, you can trust that you're getting the best products. Our friendly team is here to assist you, ensuring a smooth and enjoyable shopping experience. We prioritize your security and convenience with secure transactions and user-friendly navigation. Join our community and discover the Groco difference today. Choose us for unmatched quality, style, and customer satisfaction.</p>
         <a href="contact.php" class="readbtn">contact us</a>
      </div>

      <div class="box">
         <img src="images/shop1.png" alt="">
         <h3>what we provide?</h3>
         <p>At Groco, we take pride in providing you with a comprehensive range of products and services to meet your needs. Our extensive selection includes a wide variety of clothes, fashion items, shoes, and electronics, ensuring that you can find exactly what you're looking for. We strive to offer top-quality products from trusted brands, guaranteeing durability and style. Our user-friendly website and seamless shopping experience make it convenient for you to explore our offerings and make secure purchases. Whether you're searching for the latest fashion trends or cutting-edge electronics, we've got you covered. Experience the convenience and satisfaction of shopping with Groco.</p>
         <a href="shop.php" class="proceed-btn">Our Shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reviews</h1>

   <div class="box-container">

      <div class="box">
         <p>Groco has become my ultimate fashion destination. With an incredible variety of stylish items, it never disappoints. Trendy clothes, fashionable shoes, and even electronic gadgets, they have it all. The user-friendly website makes browsing a breeze. The quality of their products exceeds expectations, and the customer service is top-notch. Groco is my trusted go-to for a seamless shopping experience</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>John S.</h3>
      </div>

      <div class="box">
         <p>Groco is my fashion paradise. It offers a remarkable range of items that cater to all my style needs. From trendy clothes to stylish shoes and electronics, they have everything. The website's simplicity makes shopping a delight. The quality of their products always exceeds expectations, and their excellent customer service ensures satisfaction. Groco is my reliable fashion haven.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mark R.</h3>
      </div>

      <div class="box">
         <p>Groco is my one-stop fashion destination. Their extensive collection of clothes, shoes, and electronics is unparalleled. Navigating their user-friendly website is effortless, and their products' exceptional quality leaves me impressed every time. The prompt delivery service and helpful customer support further enhance the experience. Groco is my trusted fashion companion.I am very exsited for my order.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Michael T.</h3>
      </div>

      <div class="box">
         <p>Groco is my go-to fashion store. They offer trendy clothes, stylish shoes, and quality electronics. User-friendly website, great customer service. Highly recommended!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sarah M.</h3>
      </div>

      <div class="box">
         <p>Groco transformed my fashion game. Diverse selection, intuitive website, high-quality products, prompt delivery. Groco is a must for fashion-forward women.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Olivia S.</h3>
      </div>

      <div class="box">
         <p>Groco, my fashion sanctuary. Extensive range, user-friendly, impeccable quality, efficient service. Groco, my trusted fashion companion for stylish and reliable options.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sophia M.</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>
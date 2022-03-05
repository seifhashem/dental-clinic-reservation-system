<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:account.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dental </title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">
    

</head>
<body>
 
<!-- header  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-tooth"></i> dentalcare. </a>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="index.php">services</a>
        <a href="index.php">about</a>
        <a href="index.php">doctors</a>
        <a href="index.php">book</a>
        <a href="index.php">review</a>
        <a href="logout.php">LOG OUT</a>

    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>


  <!-- contact1 -->
  <br>
  <section>
      <br><br><br><br>
    <div class="container">
        <div class="content">
          <div class="left-side">
            <div class="address details">
              <i class="fas fa-map-marker-alt"></i>
              <div class="topic">Address</div>
              <div class="text-one">26th of July Corridor, Sheikh Zayed City, Giza Governorate</div>
            </div>
            <div class="phone details">
              <i class="fas fa-phone-alt"></i>
              <div class="topic">Phone</div>
              <div class="text-one">19945</div>
              <div class="text-two">+201065454395</div>
            </div>
            <div class="email details">
              <i class="fas fa-envelope"></i>
              <div class="topic">Email</div>
              <div class="text-one">dentalcare347@gmail.com</div>
            </div>
          </div>
          <div class="right-side">
            <div class="topic-text">Send us a message</div>
          <form action="mail.php" method="POST"> 
            <div class="input-box">
              <input type="text" placeholder="Enter your name" name="name" required>
            </div>
            <div class="input-box">
              <input type="text" placeholder="Enter your email" name="mail" required>
            </div>
  
            <div class="input-box message-box">
              <textarea placeholder="Enter your message" name="message" required></textarea>
            </div>
              <input type="submit" value="Send Now" class="btn" >
           
          </form>
        </div>
        </div>
      </div>
    
  </section>





<!-- footer -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> doctors </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> book </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> review </a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> Cosmetic Dentistry
            </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> message therapyDental X-Rays
                cardioloty </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Root Canals
            </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Teeth Whitening
            </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> 19945 </a>
            <a href="#"> <i class="fas fa-phone"></i> +201065454395 </a>
            <a href="#"> <i class="fas fa-envelope"></i> dentalcare@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Egypt, Cairo </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
      
        </div>

    </div>

    <div class="credit">  <span>Dental Care</span> | all rights reserved </div>

</section>








<!-- custom js file link  -->
<script src="js/script.js"></script>
 <!--contact section end-->

 <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>

</body>
</html>
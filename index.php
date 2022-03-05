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
        <a href="#home">home</a>
        <a href="#services">services</a>
        <a href="#about">about</a>
        <a href="#doctors">doctors</a>
        <a href="#book">book</a>
        <a href="#review">review</a>
        <a href="logout.php">LOG OUT</a>

    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>



<!-- home -->

<section class="home" id="home">

    <div class="image">
        <img src="image/Online Doctor-amico.svg" alt="">
    </div>

    <div class="content">
        <h3>We care about your Smile!</h3>
        <p>If you are looking for a reliable dentist in town, we are here to help. We are known for the best, affordable, and painless dental treatments.

        </p>
        <a href="contactus.php" class="btn"> contact us <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>


<!-- icons -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <p>Expert doctors</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <p>satisfied patients</p>
    </div>

    <div class="icons">
        <i class="fas fa-syringe"></i>
        <p>advanced equipments</p>
    </div>

    <div class="icons">
        <i class="fas fa-clinic-medical"></i>

        <p>Modren clinics</p>
    </div>

</section>


<!-- services -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <h3>Cosmetic Dentistry</h3>
            <p>We offer affordable tooth bleaching and alignment treatments you may need..</p>
            </div>

        <div class="box">
            <h3>Dental X-Rays​</h3>
            <p>No treatment is started without an x-ray taken from our high-end x-ray machine.</p>
        </div>

        <div class="box">
            <h3>Root Canals​</h3>
            <p>With us you get the fastest and painless root canal treatments done quickly.</p>
        </div>

        <div class="box">
            <h3>Teeth Whitening
            </h3>
            <p>Whether it is just cleaning or polishing, get a brighter smile while you walk out.</p>
        </div>

        <div class="box">
            <h3>Dental Implants
            </h3>
            <p>We help you get a new set of teeth or a single tooth that matches your smile.</p>
        </div>

        <div class="box">
            <h3>Braces & Implants
            </h3>
            <p>We use and recommend Invisalign braces for better results of teeth alignment.</p>
        </div>

    </div>

</section>


<!-- about -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="image/Health professional team-rafiki.svg" alt="">
        </div>

        <div class="content">
            <h3>Committed to the Dental Excellence
            </h3>
            <p>We are known for the most affordable and painless dental
                treatments that our clients have been loving for years. Whether it is cosmetic dental treatments, root canals, tooth extraction, or more, we assure the best help in a comfortable and friendly environment. We’ve built relationships with thousands of clients for simple consultations and surgeries too.</p>
        </div>

    </div>

</section>


<!-- doctors -->

<section class="doctors" id="doctors">

    <h1 class="heading"> our <span>doctors</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/doc-6.jpg" alt="">
            <h3>Seif Hashem</h3>
            <span>expert doctor</span><br>
            <span>Braces & implants</span>
           
        </div>

        <div class="box">
            <img src="image/doc-2.jpg" alt="">
            <h3>Hussin Fekry</h3><br>
            <span>expert doctor</span><br>
            <span>surgery</span>
        
        </div>

        <div class="box">
            <img src="image/doc-3.jpg" alt="">
            <h3>deo brand</h3><br>
            <span>expert doctor</span><br>
            <span>implants</span>

       
        </div>

        <div class="box">
            <img src="image/doc-4.jpg" alt="">
            <h3>caesar anthonio</h3>
            <span>expert doctor</span><br>
         <span>Reconstruction</span>
        </div>

        <div class="box">
            <img src="image/doc-5.jpg" alt="">
            <h3>Mohamed Abdul</h3>
            <span>expert doctor</span><br>
           <span>Cosmetic</span>
        </div>

        <div class="box">
            <img src="image/doc-1.jpg" alt="">
            <h3>kujo jotaro</h3>
            <span>expert doctor</span><br>
            <span>cosmetic</span>
          
        </div>

    </div>

</section>


<!-- booking -->

<section class="book" id="book">

    <h1 class="heading"> <span>book</span> now </h1>    

    <div class="row">

        <div class="image">
            <img src="image/Date picker-rafiki.svg" alt="">
        </div>

        <form action="book.php" method="post">
            <h3>book appointment</h3>
            <input type="text" placeholder="your name" class="box" name="yourname" pattern="[a-zA-Z'-'\s]*" required>
            <input type="text" placeholder="your number" class="box" name="yournumber" pattern="^01[0-2,5]\d{8}$" required>
            <input type="email" placeholder="your email" class="box" name="youremail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  required>
            <input type="date" class="box" name="date" required>
            <input type="time" class="box" name="time" required>
            <div class="box-3" >
            <input list="doctor" placeholder="doctors" name="doctor" required>
            <datalist id="doctor">
                <option value="Dr. Seif Hashem"></option>
                <option value="Dr. Hussin fekry"></option>
                <option value="Dr. Deo Brand"></option>
                <option value="Dr. Caesar Anthonio"></option>
                <option value="Dr. Mohamed Abdul"></option>
                <option value="Dr. Kujo Jotaro"></option>

            </datalist>
            </div>

            <input type="submit" value="book now" class="btn" >
        </form>

    </div>

</section>


<!-- review -->

<section class="review" id="review">
    
    <h1 class="heading"> client's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/pic-1.png" alt="">
            <h3>john fillips</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">This is a great place to go take care of your teeth. The team was very professional examining and providing with solutions by priority.</p>
        </div>

        <div class="box">
            <img src="image/pic-2.png" alt="">
            <h3>sara clay</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text"> The best dental care I have ever experienced! Professional, courteous, and friendly staff made me feel like family… would highly recommend to anyone!!!</p>
        </div>

        <div class="box">
            <img src="image/pic-3.png" alt="">
            <h3>john deo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">The staff was great. Very welcoming and friendly. The dentist was very nice and informative. </p>
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
            <a href="#"> <i class="fas fa-chevron-right"></i> message therapyDental X-Rays​
                cardioloty </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Root Canals​
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
<script src="https://js.stripe.com/v3/"></script>
<script src="checkout.js" ></script>

</body>
</html>
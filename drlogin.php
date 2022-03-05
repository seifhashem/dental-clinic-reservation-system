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

<a href="#" class="logo"> <i class="fas fa-tooth"></i> dentalcare.</a>



<div id="menu-btn" class="fas fa-bars"></div>

</header>
    
<br><br><br><br><br>
<!----login form------>
<br><br><br><br><br>
<div class="container">
    <div class="imag">
        <img src="image/Login-amico.svg">
    </div>
    <div class="login-content">
        <form action="drvalidation.php" method="post">
            <img src="image/avatar.svg">
            <h2 class="title">Dental care <BR>dOCTORS</h2>

               <div class="input-div one">
                  <div class="i">
                          <i class="fas fa-user"></i>
                  </div>
                  <div class="div">
                          <h5>Username</h5>
                          <input type="text" class="input" name="drname">
                  </div>
               </div>
               <div class="input-div pass">
                  <div class="i"> 
                       <i class="fas fa-lock"></i>
                  </div>
                  <div class="div">
                       <h5>Password</h5>
                       <input type="password" class="input" name="drpassword">
               </div>
            </div>
           
            <input type="submit" class="btn" value="Login" ><br><br>


        </form>
    </div>
</div>





<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
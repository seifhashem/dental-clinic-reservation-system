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

<style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');

:root{
    --blue:#179db4;
    --black:#444;
    --light-color:#777;
    --box-shadow:.5rem .5rem 0 rgba(22, 160, 133, .2);
    --text-shadow:.4rem .4rem 0 rgba(0, 0, 0, .2);
    --border:.2rem solid var(--blue);
}

*{
    font-family: 'Poppins', sans-serif;
    margin:0; padding: 0;
    box-sizing: border-box;
    outline: none; border: none;
    text-transform: capitalize;
    transition: all .2s ease-out;
    text-decoration: none;
    background: ;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-padding-top: 7rem;
    scroll-behavior: smooth;
}

p{
    font-size: 17px;
}
.border{
margin: auto;
border: 3px solid #179db4;
padding: 60px;
text-align: center;
position: fixed; /* or absolute */
  top: 50%;
  left: 50%;
  /* bring your own prefixes */
  transform: translate(-50%, -50%);
}

.btn{
    display: inline-block;
    margin-top: 1rem;
    padding: .5rem;
    padding-left: 1rem;
    border:var(--border);
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    color:var(--blue);
    cursor: pointer;
    font-size: 1.4rem;
    background: #fff;
}
.btn span{
    padding:.7rem 1rem;
    border-radius: .5rem;
    background: var(--blue);
    color:#fff;
    margin-left: .5rem;
}

.btn:hover{
    background: var(--blue);
    color:#fff;
}

.btn:hover span{
    color: var(--blue);
    background:#fff;
    margin-left: 1rem;
}
</style>

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

<div class="border">
<p> Do you want to Pay Online?</p><br>
  <button type="submit" class="btn" id="pbtn" onclick="document.location='checkout.php'">Pay Online</button> &nbsp; &nbsp;
  <script>src="http://js.stripe.com/v3/"</script>
  <script>src="script.js"</script>
  <button type="submit" class="btn" onclick="document.location='index.php'">Cancel</button>
</div>

</body>
</html>
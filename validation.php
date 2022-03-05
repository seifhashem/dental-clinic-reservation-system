<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con, 'server');

$username= $_POST['username'];
$password= $_POST['password'];

$s="select * from server where username = '$username' && password ='$password'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1){
    $_SESSION['username'] = $username;
    header('location: index.php');

}else{
    echo '<script type="text/javascript">'; 
    echo 'alert("Wrong username or password! Try again");'; 
    echo 'window.location.href = "account.php";';
    echo '</script>';
}


?>

<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con, 'server');

$drname= $_POST['drname'];
$drpassword= $_POST['drpassword'];

$s="select * from drreg where drname = '$drname' && drpassword ='$drpassword'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1){
    $_SESSION['drname'] = $drname;
    header('location: buttons.php');

}else{
    echo '<script type="text/javascript">'; 
    echo 'alert("Wrong username or password! Try again");'; 
    echo 'window.location.href = "drlogin.php";';
    echo '</script>';
}


?>

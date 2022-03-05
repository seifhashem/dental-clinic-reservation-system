<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con, 'server');

$drname= $_POST['drname'];
$drpassword= $_POST['drpassword'];


$s="select * from drreg where drname = '$drname'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num==1){
    echo '<script type="text/javascript">'; 
    echo 'alert("This name has already been used! please choose another name");'; 
    echo 'window.location.href = "drreg.php";';
    echo '</script>';

}else{
    $stmt = $con-> prepare("insert into drreg(drname,drpassword) values(?, ?)");
    $stmt->bind_param("si", $drname,$drpassword);
    $stmt->execute();
    echo '<script type="text/javascript">'; 
    echo 'alert("Registered successfuly");'; 
    echo 'window.location.href = "drlogin.php";';
    echo '</script>';
}


?>
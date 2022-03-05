<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con, 'server');

$username= $_POST['username'];
$yourage= $_POST['yourage'];
$yournumber= $_POST['yournumber'];
$email= $_POST['email'];
$password= $_POST['password'];
$natid= $_POST['natid'];
$gender= $_POST['gender'];
$file= $_POST['file'];

$s="select * from server where username = '$username'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num==1){
    echo '<script type="text/javascript">'; 
    echo 'alert("This name has already been used! please choose another name");'; 
    echo 'window.location.href = "registration.php";';
    echo '</script>';

}else{
    $stmt = $con-> prepare("insert into server(username, yourage, yournumber, email, password, natid, gender,file) values(?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("siisssss", $username, $yourage, $yournumber, $email, $password, $natid, $gender, $file);
    $stmt->execute();
    echo '<script type="text/javascript">'; 
    echo 'alert("Registered successfuly");'; 
    echo 'window.location.href = "account.php";';
    echo '</script>';
}


?>
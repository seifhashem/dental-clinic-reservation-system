<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$message = $_POST['message'];

//database connection
$conn = new mysqli('localhost','root','','book');
if($conn->connect_error){
    die('connection failed :' .$conn->connect_error);
}
else
{
    $stmt = $conn-> prepare("insert into mail(name,mail,message) values(?, ?, ?)");
    $stmt->bind_param("sss", $name,$mail,$message);
    $stmt->execute();
echo '<script type="text/javascript">'; 
echo 'alert("message stored.");'; 
echo 'window.location.href = "contactus.php";';
echo '</script>';

}

?>
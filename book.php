<?php
$yourname = $_POST['yourname'];
$yournumber = $_POST['yournumber'];
$youremail = $_POST['youremail'];
$date = $_POST['date'];
$time = $_POST['time'];
$doctor = $_POST['doctor'];

//database connection
$conn = new mysqli('localhost','root','','book');
$s="select * from book where time = '$time' && date='$date' && doctor='$doctor'";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);
if($conn->connect_error){
    die('connection failed :' .$conn->connect_error);
}
else
{
    if($num==1){
        echo '<script type="text/javascript">'; 
        echo 'alert("sorry! this date and time has already been booked, try again ");'; 
        echo 'window.location.href = "index.php";';
        echo '</script>';
    }
    else{
    $stmt = $conn-> prepare("insert into book(yourname, yournumber, youremail, date, time, doctor) values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sissss", $yourname, $yournumber, $youremail, $date, $time, $doctor);
    $stmt->execute();
echo '<script type="text/javascript">'; 
echo 'alert("Booking successful");'; 
echo 'window.location.href = "paybutt.php";';
echo '</script>';
    }


}

?>



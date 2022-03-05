<html>
<head>
<title>Doctor view</title>
<style type="text/css">
table {
    border:2px solid red;
    background-color: #ffc;
}
th {
    border-bottom: 5px solid #000;
}
td{
    border-bottom: 2px solid #666;
}
</style>
</head>
<body>
<h1>display data</h1>
<?php
include('connect-db.php');
$sqlget="SELECT * from book where doctor = 'Dr. Mohamed'";
$sqldata=mysqli_query($dbcon,$sqlget) or die('error');
echo "<table>";
echo "<tr><th>Name</th><th>number</th><th>time</th><th>date</th></tr>";
while($row= mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
    echo "<tr><td>";
    echo$row['yourname'];
    echo"</td><td>";
    
    echo$row['yournumber'];
    echo"</td><td>";
    echo$row['date'];
    echo"</td><td>";
    echo$row['time'];
    echo"</td><td>";
}
echo"</table>";

?>
</body>

</html>
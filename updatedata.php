<?php
           $stu_id = $_POST['sid'];
 $stu_name = $_POST['sname'];
 $stu_address = $_POST['saddress'];
 $stu_class = $_POST['sclass'];
 $stu_phone = $_POST['sphone'];


$conn = mysqli_connect("localhost","root","","crud") or die("Connection is Faild!");
$sql = "UPDATE student SET sname = '{$stu_name}', saddress = '{$stu_address}', sclass = '{$stu_class}', sphone = '{$stu_phone}' WHERE sid = '{$stu_id}'";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessfull!");

header("Location: http://localhost/crud/index.php");
mysqli_close($conn);
 

?>
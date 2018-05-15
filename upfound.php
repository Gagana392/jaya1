<?php
include("config.php");
session_start();


$name=$_POST['personname'];

$phone=$_POST['contactnumber'];
$item=$_POST['item'];

$lost=$_POST['lost'];
$description=$_POST['description'];
//$owner=$_POST['owner'];



$pic=$_FILES['pic']['name'];
$pictmp= $_FILES['pic']['tmp_name'];
$pic1='found/' . basename($_FILES['pic']["name"]);
move_uploaded_file($pictmp,$pic1);


$sql="INSERT INTO found VALUES ('$name','$phone','$item','$lost','$description','$pic1')";
$result=mysqli_query($con,$sql);

if($result)
{
    header("Location:foundlist.php");
}
else
{
    echo "sorry";
}

?>

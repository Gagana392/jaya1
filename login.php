<?php
include("config.php");


$name=$_POST["userid"];
$password=$_POST["pwd"];
$qry="SELECT * from logintab where username='$name' AND password='$password' ";
$result=mysqli_query($con,$qry) or die("Error querying database");
$row= mysqli_fetch_array($result);

if($row['username']==$name && $row['password']==$password)
{
    header('location: admin.php');
}
else
{
    echo"Invalid username or password";
}
?>

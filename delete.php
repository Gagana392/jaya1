<?php
include("config.php");
session_start();

if($_GET['item_lost'])
{
    $item1=$_GET['item_lost'];
    $sql="DELETE FROM lost WHERE item_name='$item1'";
    $result=mysqli_query($con,$sql);

        if($result)
        {
            header("Location:lostlist_del.php");
        }
        else
        {
            echo "sorry";
        }
}

if($_GET['item_found'])
{
    $item2=$_GET['item_found'];
    $sql1="DELETE FROM found WHERE item_name='$item2'";
    $result1=mysqli_query($con,$sql1);

        if($result1)
        {
            header("Location:foundlist_del.php");
        }
        else
        {
            echo "sorry";
        }
}


?>

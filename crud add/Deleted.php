<?php
include('connect.php');

$id=$_GET['id'];
$query="DELETE from `audio` where `id`='$id'";

$result=mysqli_query($conn,$query);
if($result)
{
    header('location:Add Audio.php');
}
    else{
        echo "<script>alert('Error : ".mysqli_error($conn)."');</script>";
    }

?>
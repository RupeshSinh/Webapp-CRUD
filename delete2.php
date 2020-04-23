<?php 

$con=mysqli_connect("localhost","root","","crud");
$id=$_REQUEST["d"];
$rs=mysqli_query($con,"DELETE FROM `designers` WHERE ID=$id");
if($rs=1)
{
    header("location:home.php");
}
else
{
    echo"Not deleted";
}


?>
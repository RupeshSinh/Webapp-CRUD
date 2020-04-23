<?php 
$id=$_POST["id"];
$fn=$_POST["fn"];
$ln=$_POST["ln"];
$e=$_POST["e"];
$m=$_POST["m"];
$a=$_POST["a"];
$img=$_FILES["p"]["name"];
$con=mysqli_connect("localhost","root","","crud");
$sql="INSERT INTO `designers`(`ID`, `First_name`, `Last_name`, `Email`, `Phone_number`, `Address`, `Image`) VALUES ($id,'$fn','$ln','$e',$m,'$a','$img')";
    
$query=mysqli_query($con,$sql);
if($query=1)
{
    move_uploaded_file($_FILES["p"]["tmp_name"],"images/".$img);
    header("location:home.php");
}
else
{
    echo"Not Connected";
}

?>
<?php 
$id=$_POST["id"];
$fn=$_POST["fn"];
$ln=$_POST["ln"];
$e=$_POST["e"];
$m=$_POST["m"];
$a=$_POST["a"];
$img=$_FILES["p"]["name"];
$con=mysqli_connect("localhost","root","","crud");
$sql="UPDATE `designers` SET `First_name`='$fn',`Last_name`='$ln',`Email`='$e',`Phone_number`=$m,`Address`='$a',`Image`='$img' WHERE ID=$id";
    
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
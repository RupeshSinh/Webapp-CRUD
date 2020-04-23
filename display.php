<html><head>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head></html>

<?php 
$con=mysqli_connect("localhost","root","","crud");
$rs=mysqli_query($con,"SELECT * FROM designers");
echo"<h1 align='center'>---***Profiles***---</h1>";
echo"<table border='3' align='center' cellpadding='15px'>";
echo"<tr><td>ID</td>";
echo"<td>First Name</td>";
echo"<td>Last Name</td>";
echo"<td>Email Id</td>";
echo"<td>Phone Number</td>";
echo"<td>Address</td>";
echo"<td>Profile Photo</td></tr>";
while($row=mysqli_fetch_array($rs))
{
    echo"<tr><td>".$row["ID"];
    echo"<td>".$row["First_name"];
    echo"<td>".$row["Last_name"];
    echo"<td>".$row["Email"];
    echo"<td>".$row["Phone_number"];
    echo"<td>".$row["Address"];
    echo"<td><img src=' images/".$row["Image"]."' height='100px' width='100px'></tr>";
    
    
}
?>
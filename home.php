<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
    <body>
        <b><h1 align="center">Welcome</h1></b>
        <table border="3" align="center" cellpadding="30px">       <tr><td><a href="register.php">CREATE</a>
            <td><a href="display.php">READ</a>
            <td><a href="update.php">UPDATE</a>
            <td><a href="delete.php">DELETE</a></tr></table>
    </body>
</html>

<?php 
    echo"<h1 align='center'>Profiles</h1>";
    $con=mysqli_connect("localhost","root","","crud");
$rs=mysqli_query($con,"SELECT * FROM designers");
    echo"<table border='3' align='center' cellpadding='30px'>";
    echo"<tr><td>ID</td>";
    echo"<td>First Name</td>";
    echo"<td>Last Name</td>";
    echo"<td>Email Id</td>";
    echo"<td>Phone Number</td>";
    echo"<td>Address</td>";
    echo"<td>Profile Photo</td>";
    echo"<td>Delete</td>";
    echo"<td>Update</td></tr>";
while($row=mysqli_fetch_array($rs))
{
    echo"<tr><td>".$row["ID"];
    echo"<td>".$row["First_name"];
    echo"<td>".$row["Last_name"];
    echo"<td>".$row["Email"];
    echo"<td>".$row["Phone_number"];
    echo"<td>".$row["Address"];
    echo"<td><img src=' images/".$row["Image"]."' height='100px' width='100px'>";
    echo"<td><a href=delete2.php?d=".$row["ID"].">DELETE</a>";
    echo"<td><a href=update2.php?u=".$row["ID"].">UPDATE</a></tr>";
    
   
}


?>
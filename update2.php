<?php 
$con=mysqli_connect("localhost","root","","crud");
$id=$_REQUEST["u"];
$rs=mysqli_query($con,"select * from designers where ID=$id ");
if(mysqli_num_rows($rs)==0)
    return;
else
    $ar=mysqli_fetch_array($rs);
?>
<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1 align="center">---***Update Details***---</h1>
    <table border='3' align='center' cellpadding='15px'>    <form action="update3.php" method="post" enctype="multipart/form-data">
          
        <tr>
            <td>Enter Your ID</td>
            <td><input type="text" name="id" value="<?php echo $ar["ID"]; ?>" placeholder="Designer ID" required></td>
        </tr>
        <tr>
            <td>Enter Your First Name</td>
            <td><input type="text" name="fn" value="<?php echo $ar["First_name"]; ?>" placeholder="First name" required></td>
        </tr>
        <tr>
            <td>Enter Your Last Name</td>
            <td><input type="text" name="ln" value="<?php echo $ar["Last_name"]; ?>" placeholder="Last Name" required></td>
        </tr>
        <tr>
            <td>Enter Your Email Address</td>
            <td><input type="text" name="e" value="<?php echo $ar["Email"]; ?>" placeholder="Email ID" required></td>
        </tr>
        <tr>
            <td>Enter Your Phone Number</td>
            <td><input type="text" maxlength="10" name="m" value="<?php echo $ar["Phone_number"]; ?>" placeholder="Phone Number" required></td>
        </tr>
        <tr>
            <td>Enter Your Address</td>
            <td><textarea cols="20" rows="3" name="a" value="<?php echo $ar["Address"]; ?>" placeholder="Address" required></textarea></td>
        </tr>
        <tr>
            <td>Select Profile Photo</td>
            <td><input type="file" name="p" required></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="create"> </td>
            <td><input type="submit" name="submit" value="reset"> </td>

        </tr>
      
    </form>
    </table>
</body>
</html>
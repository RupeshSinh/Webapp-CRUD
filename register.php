<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1 align="center">---***Create Profile***---</h1>
    <table border='3' align='center' cellpadding='15px'>
    <form action="register2.php" method="post" enctype="multipart/form-data">
        
        <tr>
            <td>Enter Your ID</td>
            <td><input type="text" name="id" placeholder="Designer ID" required></td>
        </tr>
        <tr>
            <td>Enter Your First Name</td>
            <td><input type="text" name="fn" placeholder="First name" required></td>
        </tr>
        <tr>
            <td>Enter Your Last Name</td>
            <td><input type="text" name="ln" placeholder="Last Name" required></td>
        </tr>
        <tr>
            <td>Enter Your Email Address</td>
            <td><input type="text" name="e" placeholder="Email ID" required></td>
        </tr>
        <tr>
            <td>Enter Your Phone Number</td>
            <td><input type="text" maxlength="10" name="m" placeholder="Phone Number" required></td>
        </tr>
        <tr>
            <td>Enter Your Address</td>
            <td><textarea cols="20" rows="4" name="a" placeholder="Address" required></textarea></td>
        </tr>
        <tr>
            <td>Select Profile Photo</td>
            <td><input type="file" name="p" required></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Create"> </td>
            <td><input type="submit" name="submit" value="Reset"> </td>

        </tr>
        
    </form>
    </table>
</body>
</html>
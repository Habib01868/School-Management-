<?php
require_once('../Models/alldb.php');
session_start();
if(empty($_SESSION['id']))
{
   header("location:login.php");
}
    $res = data();
    $editData = $_SESSION['editData'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit</title>
</head>
<body>
  <h1>Update data Page</h1>
   Data updating for ID: <?php echo $editData['UserName'];?>
<br><br><br>


    <form action="../Controllers/loginController.php" method="post">
        <input type="hidden" name="id" value="<?php echo $editData['UserName']; ?>">
        <table >
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" value="<?php echo $editData['Name']; ?>"></td>
            </tr>
            <tr>
                <td>Pass:</td>
                <td><input type="text" name="pass" value="<?php echo $editData['Pass']; ?>"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" value="<?php echo $editData['Email']; ?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button type="submit" name="update">Update</button>
                </td>
            </tr>
        </table>
    </form>
    
  <form method="post" action="../Controllers/loginController.php">
    <button name="logout">Logout</button>
  </form>
   
</body>
</html>
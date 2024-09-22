<?php
require_once('../Models/alldb.php');
session_start();
if(empty($_SESSION['id']))
{
   header("location:log.php");
}
    $res=data();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Data</title>
</head>
<body>
<h3 align="center">Insert New Data</h3>
  <form action="../Controllers/loginController.php" method="post">
    <table align="center">
        <tr>
            <td>ID:</td>
            <td><input type="text" name="id"></td>
        </tr>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Pass:</td>
            <td><input type="text" name="pass"></td>
        </tr>
        
        <tr>
            <td colspan="2" align="center">
                <button type="submit" name="insert">Insert</button>
            </td>
        </tr>
    </table>
</form>


</body>
</html>
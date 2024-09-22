<?php
require_once('../Models/alldb.php');
session_start();
if(empty($_SESSION['id']))
{
   header("location:login.php");
}
    $res=data();
    $editData = $_SESSION['editData'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Panel</title>
	<style>
		* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
    line-height: 1.6;
    color: #333;
    background-color: #f4f4f4;
    overflow-x: hidden; 
}
/* Navigation Bar */
.navbar {
    width: 100%;
    background-color: rgba(0, 0, 0, 0);
    position: fixed;
    top: -2%;
    left: 0;
    bottom: 85%;
    z-index: 1000;
    padding: 0px 50px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-bottom: 2px solid #000;
}

.logo a {
    color: #ff6f61;
    font-size: 24px;
    text-decoration: none;
    font-weight: 700;
    text-transform: uppercase;
}

.nav-menu {
    list-style: none;
    display: flex;
    align-items: center;
}

.nav-menu li {
    margin: 0 20px;
}

.nav-menu li a {
    color: #000;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease;
    font-size: 16px;
    text-transform: uppercase;
}

.nav-menu li a:hover {
    color: #ff6f61;
    border-bottom: 2px solid #ff6f61;
}

	</style>
</head>
<body>
	<h1 align="center" style="margin-top: 30px;">Employee Panel</h1>
	<section class="header">
    <!--<a href="#" class="logo">Website</a>
    <a href="#" class="btn">Login</a>--->
</section><br><br><br><br>


<?php while ($r=$res->fetch_assoc()) { ?>
<form style="align-items: center;">
        Name: <input type="text" name="name" value="<?php echo $editData['Name']; ?>"><br>

        Pass: <input type="text" name="pass" value="<?php echo $editData['Pass']; ?>"><br>

        Email: <input type="text" name="email" value="<?php echo $editData['Email']; ?>">
 <?php } ?>
 </form>
</body>
</html>
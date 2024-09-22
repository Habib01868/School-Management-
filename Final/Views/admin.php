<?php
require_once('../Models/alldb.php');
session_start();
if(empty($_SESSION['id']))
{
   header("location:login.php");
}
    $res=data();
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
	<h1 align="center" style="margin-top: 30px;">Admin Panel</h1>
	<section class="header">
    <!--<a href="#" class="logo">Website</a>
    <a href="#" class="btn">Login</a>--->
</section><br><br><br><br>
<section>
	<nav class="navbar" style="margin-top: 100px; align-items: center;">
        <div class="logo">
            <!--<a href="#"><img src="img/petty (3).png" height="125px" width="125px"></a>-->
        </div>
        <ul class="nav-menu">
            <form action="../Controllers/homeController.php" method="post">
            <li><a href="insert.php">Add Employee</a></li>
        </form>
            <li><a href="#">Delete Employee</a></li>
            <li><a href="#">Update Details</a></li>
        </ul>
    </nav>
</section>
<table border="1">
      <tr>
        <th>UserName</th>
         <th>Name</th>
         <th>Email</th>
         <th>Password</th>
          <th>Option</th>
      </tr>
<?php while ($r=$res->fetch_assoc()) { ?>
      <tr>
        <td><?php echo $r['UserName']; ?></td>
        <td><?php echo $r['Name']; ?></td>
        <td><?php echo $r['Email']; ?></td>
        <td><?php echo $r['Pass']; ?></td>
        <form action="../Controllers/loginController.php" method="get">
            <td><button name="delete" value="<?php echo $r['UserName']; ?>">Delete</button></td>
        </form>
        <form action="../Controllers/loginController.php" method="get">
            <td><button name="edit" value="<?php echo $r['UserName']; ?>">Edit</button></td>
        </form>
        <!--<form action="../Controllers/loginController.php" method="post">
            <td><button type="submit" name="add">Add</button></td>
        </form>-->

      </tr>
 <?php } ?>
    </table>
</body>
</html>
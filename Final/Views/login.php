<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<title>Login</title>
</head>
<body>
	 <div class="form-box">
        <div class="login-container" id="login">
        <h1>Login Form</h1>
        <form action="../Controllers/loginController.php" method="post"> 
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Username or Email" name="username">
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Password" name="pass">
                <i class="bx bx-lock-alt"></i>
            </div>
            <?php
   		 if(isset($_SESSION['Error']))
   		 {
              echo $_SESSION['Error'];
   		    unset($_SESSION['Error']);
   		 }
   		  
   		 ?>
            <div class="input-box">
                <input type="submit" class="submit" value="Sign In" name="signin">
            </div>
        </form>
        Don't have any account??<a href="register.php">Register</a>
    	</div>
    </div>
</body>
</html>
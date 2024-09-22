<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<title>Registration</title>
	<style>
		
	</style>
</head>
<body>
<div class="form-box">
	<div class="register-container" id="register">
            <form action="../Controllers/registrationController.php" method="post">
            <h1>Sign Up</h1>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Username" name="username">
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                    <input type="text" class="input-field" placeholder="Name" name="name">
                    <i class="bx bx-user"></i>
                </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Email[xyz@gmail.com]" name="email">
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Password" name="pass">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Register" name="signup">
            </div>
            Have an account?<a href="login.php">Login</a>
        </form>
    </div>
</div>
</body>
</html>
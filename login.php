<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <?php
    include("nav.php");
    ?>
    <div class="login-container">
        <h2>Login</h2>
        <form id="loginForm">
            <label for="username">Email</label>
            <input type="text" id="username" name="username" placeholder="Email" required>
            <div id="usernameError" class="error"></div>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <div id="passwordError" class="error"></div>
            
            <div class="remember-me">
                <input type="checkbox" id="remember-me" name="remember-me">
                <label for="remember-me">Remember me</label>
            </div>
            
            <div class="forgot-password">
                <a href="#">Forgot Password?</a>
            </div>
            
            <button type="submit" class="login-button">LOG IN</button>
        </form>
        <div class="signup">
            Don't have an account? <a href="signup">Sign up</a>
        </div>
    </div>


  
</body>
</html>

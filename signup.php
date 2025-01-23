<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Signup</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <?php
    include("nav.php");
    ?>
    <div class="login-container">
        <h2>Signup</h2>
        <form id="loginForm">
            <label for="username">Email</label>
            <input type="text" id="username" name="username" placeholder="Email" required>
            <div id="usernameError" class="error"></div>

            <label for="username">username</label>
            <input type="text" id="username" name="username" placeholder="username" required>
            <div id="usernameError" class="error"></div>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <div id="passwordError" class="error"></div>
            
            
            <button type="submit" class="login-button">SIGN UP</button>
        </form>
        <div class="signup">
            Have An account? <a href="login">Login</a>
        </div>
    </div>




<script src="signup.js"></script>
  
</body>
</html>

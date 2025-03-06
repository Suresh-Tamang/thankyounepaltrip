<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <?php include("nav.php"); ?>

    <?php
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    // Basic validation
    if (empty($name) || empty($email) || empty($password)) {
        echo "All fields are required!";
        exit();
    }

    // Check if email already exists
    $checkQuery = "SELECT * FROM signup WHERE email = ?";
    $stmt = $conn->prepare($checkQuery);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        echo "Email already registered!";
        exit();
    }
    
    $stmt->close();

    // Hash the password for security
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert user into database
    $insertQuery = "INSERT INTO signup (name, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($insertQuery);
    $stmt->bind_param("sss", $name, $email, $hashedPassword);

    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>


    <div class="login-container">
        <h2>Signup</h2>
        <form id="signupForm" action="signup.php" method="POST">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Full Name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Password" required>

            <button type="submit" class="login-button">SIGN UP</button>
        </form>
        <div class="signup">
            Have an account? <a href="login.php">Login</a>
        </div>
    </div>

    <script src="signup.js"></script>
</body>
</html>

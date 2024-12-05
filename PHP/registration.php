<?php
// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirm-password'] ?? '';

    $errorMessage = '';
    $successMessage = '';

    // Validate input
    if (empty($username) || empty($password) || empty($confirmPassword)) {
        $errorMessage = "All fields are required.";
    } elseif ($password !== $confirmPassword) {
        $errorMessage = "Passwords do not match.";
    } else {
        // Simulate saving to a database
        $successMessage = "Registration successful. You can now log in.";
        // In a real application, insert user data into the database here
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/TASK_1.css">
    <link rel="stylesheet" href="../CSS/mystyle.css">
    <title>Registration</title>
</head>
<body>

<div class="registration-container">
    <h2>Register</h2>

    <?php if (!empty($errorMessage)): ?>
        <div class="error-message" style="color: red;">
            <?php echo $errorMessage; ?>
        </div>
    <?php elseif (!empty($successMessage)): ?>
        <div class="success-message" style="color: green;">
            <?php echo $successMessage; ?>
        </div>
    <?php endif; ?>

    <form action="registration.php" method="POST">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username ?? ''); ?>" required>
        </div>
        
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div class="form-group">
            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" name="confirm-password" required>
        </div>

        <div class="buttons">
            <button type="button" onclick="window.location.href='login.php'">Cancel</button>
            <button type="submit">Register</button>
        </div>
    </form>
</div>

<script src="../JavaScript/JS_task_1_register.js"></script>
<script src="../JavaScript/script.js"></script>
</body>
</html>

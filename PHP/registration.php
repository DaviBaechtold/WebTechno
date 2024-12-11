<?php
$errorMessage = '';  
$successMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirm-password'] ?? '';

    if (!empty($username) || !empty($password) || !empty($confirmPassword)) 
    {
        $successMessage = "Registration successful. You can now log in.";
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

    <?php if (!empty($successMessage)): ?>
        <div class="success-message" style="color: green;">
            <?php echo $successMessage; ?>
        </div>
    <?php endif; ?>

    <form action="registration.php" method="POST">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
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

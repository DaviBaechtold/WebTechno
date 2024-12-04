<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/TASK_1.css">
    <link rel="stylesheet" href="../CSS/mystyle.css">
    <title>Login</title>
</head>
<body>
<div class="login-container">
    <h2>Login</h2>
    <form action="customer.php" method="POST">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="buttons">
            <button type="button" onclick="window.location.href='registration.php'">Register</button>
            <button type="submit">Login</button>
        </div>
    </form>
</div>
<script src="../JavaScript/JS_task_1_login.js"></script>
<script src="../JavaScript/script.js"></script>
</body>
</html>

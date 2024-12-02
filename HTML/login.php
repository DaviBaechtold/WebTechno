<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/TASK_1.css">
    <link rel="stylesheet" href="../CSS/mystyle.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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


    <table>
        <td>
        <a href='index.php' target='_blank' id="home">
            Home
        </a>
        <a href='customer.php' target='_blank' id="Back">
            Current Customer
        </a>
        </td>
    </table>
    <script src="../JavaScript/JS_task_1_login.js"></script>
    <script src="../JavaScript/script.js"></script>
</body>
</html>

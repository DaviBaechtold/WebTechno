<?php
// Example: End the session
session_start();
session_unset();
session_destroy();

// Dynamic logout message
$logoutMessage = "You have been logged out successfully.";
$redirectMessage = "Thank you for visiting. You can log back in or return to the homepage.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/TASK_1.css">
    <link rel="stylesheet" href="../CSS/mystyle.css">
    <title>Logout</title>
</head>
<body>
<div class="logout-container">
    <h2><?php echo $logoutMessage; ?></h2>
    <p><?php echo $redirectMessage; ?></p>

    <!-- Optional image -->
    <img id="logoutimg" src="logout_icon.png" alt="Logout Icon">

    <table align="center">
        <td>
            <a href="index.php" id="home">Home</a>
            <a href="login.php" id="Back">Login</a>
        </td>
    </table>
</div>
</body>
<script src="../JavaScript/script.js"></script>
</html>
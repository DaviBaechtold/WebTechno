<?php
// Example dynamic data (Replace this with actual data from a database in the future)
$currentUsername = "Antonio Miranda";
$currentPassword = "644uno2"; // Use hashed passwords in real applications!
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/TASK_1.css">
    <link rel="stylesheet" href="../CSS/mystyle.css">
    <title>Customer Info</title>
</head>
<body class="customer">
    <h1>Personal User Information</h1>
    <fieldset>
        <legend>Update your data</legend>
        <form action='personalInfo.php' method='GET'>
            <label for='username'>Username:</label><br>
            <input type='text' id='username' name='Username' value='<?php echo $currentUsername; ?>' required><br><br>
            <input type='submit' value="Submit"><br><br><br><br>
            <label for='password'>Password:</label><br>
            <input type='text' id='password' name='Password' value='<?php echo $currentPassword; ?>' required><br><br>
            <input type='submit' value="Submit">
        </form>
    </fieldset>
    <h3>Current Data</h3>
    <fieldset>
        <legend>Your Data</legend>
        <table>
            <tr><td><strong>Username:</strong></td><td><?php echo $currentUsername; ?></td></tr>
            <tr><td><strong>Password:</strong></td><td><?php echo $currentPassword; ?></td></tr>
        </table>
    </fieldset>

    <table>
        <tr>
            <td>
                <a href='index.php' id="home">Home</a>
                <a href='logout.php' id="Back">Logout</a>
            </td>
        </tr>
    </table>
    <script src="../JavaScript/JS_task_1_customer.js"></script>
    <script src="../JavaScript/script.js"></script>
</body>
</html>

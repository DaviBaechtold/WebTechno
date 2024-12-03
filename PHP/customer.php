<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="../CSS/style.css">
		<link rel="stylesheet" href="../CSS/TASK_1.css">
		<link rel="stylesheet" href="../CSS/mystyle.css">
		
	</head>
	<body class="customer">
		<h1>Personal user information</h1>
		<fieldset>
			<legend>Update your data</legend>
			<form action='personalInfo.php' method='GET'>
				<label for='username'>Username:</label><br>
				<input type='text' id='username' name='Username' value='Enter new username' required><br><br>
				<input type='submit' value=Submit><br><br><br><br>
				<label for='password'>Password:</label><br>
				<input type='text' id='password' name='Password' value='Enter new password' required><br><br>
				<input type='submit' value=Submit>
			</form>
		</fieldset>
		<h3>Current data</h3>
		<fieldset>
			<legend>Your data</legend>
			<table>
				<tr><td><strong>Username:</strong></td><td>Antonio Miranda</td></tr>
				<tr><td><strong>Pasword:</strong></td><td>644uno2</td></tr>
			</table>
		</fieldset>

	<table>
        <td>
        <a href='index.html'  id="home">
            Home
        </a>
        <a href='logout.html'  id="Back">
            Logout
        </a>
    </td>
    </table>
	<script src="../JavaScript/JS_task_1_customer.js"></script>
	<script src="../JavaScript/script.js"></script>
</body>
</html>
<?php
$aboutUs = "We are a team of students that want to help improve the usage of books in the modern era by creating a webpage to sell books.";
$whatWeSell = "We sell every kind of book, from police novels to thrillers. Some of our most popular books are books for kids.";
$teamMembers = ["Davi Baechtold Campos", "Cristina Menéndez Rodríguez", "Óscar Martínez Bernedo"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/TASK_1.css">
    <link rel="stylesheet" href="../CSS/mystyle.css">
</head>
<header>
    <h1>About us</h1>
</header>
<body>
    <table>
        <a href='index.php' target='_blank' id="home">Home</a>
    </table>
    <fieldset>
        <legend>Who are we?</legend>
        <div align="center">
            <h2>About us</h2>
            <p><?php echo $aboutUs; ?></p>
        </div>
    </fieldset>
    <fieldset>
        <legend>What do we sell?</legend>
        <div align="center">
            <h2>Our books</h2>
            <p><?php echo $whatWeSell; ?></p>
        </div>
    </fieldset>
    <fieldset>
        <legend>Our Team</legend>
        <div align="center">
            <?php foreach ($teamMembers as $member): ?>
                <h5><?php echo $member; ?></h5>
            <?php endforeach; ?>
        </div>
    </fieldset>
</body>
<script src="../JavaScript/script.js"></script>
</html>

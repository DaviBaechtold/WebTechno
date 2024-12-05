<?php
$productTitle = "Math Summer Exercises";
$productDescription = "This book is an exercise book for kids from 3rd-4th grade. It helps kids practice basic math operations during summer.";
$productPrice = "49.99€";
$productImage = "summer2.jpg";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/TASK_1.css">
    <link rel="stylesheet" href="../CSS/mystyle.css">
</head>
<body>
    <table cellspacing="20">
        <tr>
            <td>
                <a href='index.php' id="home">Home</a>
                <a href='Exercise books.php' id="Back">Back</a>
            </td>
        </tr>
        <tr>
            <td>
                <img src='<?php echo $productImage; ?>' alt='<?php echo $productTitle; ?>' width='450' height='450'>
            </td>
            <td>
                <h2 align="center"><?php echo $productTitle; ?></h2>
                <p><?php echo $productDescription; ?></p>
                <h1><?php echo $productPrice; ?></h1>
                <form action="cart.php" method="get">
                    <input type="submit" value="Add to cart">
                </form>
            </td>
        </tr>
    </table>
</body>
<script src="../JavaScript/script.js"></script>
</html>

<?php
// Book details
$bookTitle = "Math Summer Exercise";
$bookDescription = "This book is an exercise book for the kids from 3rd-4th grade. Math Summer Workbook helps kids practice better basic math operations during summer so they are prepared for the next school year.";
$bookPrice = "49.99€";
$bookImage = "summer2.jpg";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/TASK_1.css">
    <link rel="stylesheet" href="../CSS/mystyle.css">
    <title><?php echo $bookTitle; ?></title>
</head>
<body>
    <table cellspacing="20">
        <tr>
            <td>
                <a href="index.php" id="home">Home</a>
                <a href="Exercise books.php" id="Back">Back</a>
            </td>
        </tr>
        <tr>
            <td>
                <img src="<?php echo $bookImage; ?>" alt="Book Image" width="450" height="450">
            </td>
            <td>
                <h2 align="center"><?php echo $bookTitle; ?></h2>
                <p><?php echo nl2br($bookDescription); ?></p>
                <h1><?php echo $bookPrice; ?></h1>
                <form action="cart.php" method="get">
                    <input type="submit" value="Add to cart">
                </form>
            </td>
        </tr>
    </table>
</body>
<script src="../JavaScript/script.js"></script>
</html>

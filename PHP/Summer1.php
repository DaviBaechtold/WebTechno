<?php
// Book details
$bookTitle = "Summer Big Fun Book";
$bookDescription = "This book is an exercise book for the kids in pre-school. Highlights Summer Big Fun Workbook helps with the studies of pre-schoolers during summer so they are prepared for the next course.";
$bookPrice = "79.99€";
$bookImage = "summer1.jpg";
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
    <table>
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
    <script src="../JavaScript/script.js"></script>
</body>
</html>

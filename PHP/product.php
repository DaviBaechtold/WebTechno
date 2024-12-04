<?php
$jsonFile = '../JSON/products.json';

if (!file_exists($jsonFile)) 
{
    echo "Product data file not found!";
}

$jsonData = file_get_contents($jsonFile);
$data = json_decode($jsonData, true);

if ($data === null) 
{
    echo "Error parsing product data!";
}

$products = $data['products'] ?? [];

$product = null;

if (isset($_GET['pid']) && !empty($_GET['pid'])) 
{
    $pid = (int) $_GET['pid'];

    foreach ($products as $item) 
    {
        if ($item['pid'] === $pid) 
        {
            $product = $item;
            break;
        }
    }

    if (!$product) 
    {
        echo "Product not found!";
    }
} 
else 
{
    echo "Parameter 'pid' is missing or invalid!";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/TASK_1.css">
    <link rel="stylesheet" href="../CSS/mystyle.css">
</head>
<body>
    <table>
        <tr>
            <td>
                <a href='index.php' target='_blank' id="home">Home</a>
                <a href='Exercise books.php' target='_blank' id="Back">Back</a>
            </td>
        </tr>
        <tr>
            <td>
                <img src='<?php echo htmlspecialchars($product["imagePath"]); ?>' alt='Product Image' width='450' height='450'>
            </td>
            <td>
                <h2 align="center"><?php echo htmlspecialchars($product["name"]); ?></h2>
                <p><?php echo $product["description"]; ?></p>
                <h1><?php echo htmlspecialchars($product["price"]); ?>€</h1>
                <form action="cart.php" method="get">
                    <input type="submit" value="Add to cart">
                </form>
            </td>
        </tr>
    </table>
    <script src="../JavaScript/script.js"></script>
</body>
</html>
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

$product1 = null;
$product2 = null;

// Fetch product 1 if pid1 or pid is set
if (isset($_GET['pid1']) && !empty($_GET['pid1'])) {
    $pid1 = (int)$_GET['pid1'];
    foreach ($products as $item) {
        if ($item['pid'] === $pid1) {
            $product1 = $item;
            break;
        }
    }
}

// Fetch product 2 if pid2 is set
if (isset($_GET['pid2']) && !empty($_GET['pid2'])) {
    $pid2 = (int)$_GET['pid2'];
    foreach ($products as $item) {
        if ($item['pid'] === $pid2) {
            $product2 = $item;
            break;
        }
    }
}

if (!$product2 && !$product1 && !$product)
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
                <a href='index.php'  id="home">Home</a>
                <a href='Exercise books.php'  id="Back">Back</a>
            </td>
        </tr>
        <tr>
            <?php if ($product): ?>
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
            <?php endif; ?>

            <?php if ($product1): ?>
            <td style="width: 50%; text-align: center;">
                <table>
                    <td>
                        <img src='<?php echo htmlspecialchars($product1["imagePath"]); ?>' alt='Product Image 1' width='250' height='250'>
                    </td>
                    <td>
                        <h2 align="center"><?php echo htmlspecialchars($product1["name"]); ?></h2>
                        <p><?php echo $product1["description"]; ?></p>
                        <h1><?php echo htmlspecialchars($product1["price"]); ?>€</h1>
                        <form action="cart.php" method="get">
                            <input type="submit" value="Add to cart">
                        </form>
                    </td>
                </table>
            </td>
            <?php endif; ?>

            <?php if ($product2): ?>
            <td style="width: 50%; text-align: center;">
                <table>
                    <td>
                        <img src='<?php echo htmlspecialchars($product2["imagePath"]); ?>' alt='Product Image 1' width='250' height='250'>
                    </td>
                    <td>
                        <h2 align="center"><?php echo htmlspecialchars($product2["name"]); ?></h2>
                        <p><?php echo $product2["description"]; ?></p>
                        <h1><?php echo htmlspecialchars($product2["price"]); ?>€</h1>
                        <form action="cart.php" method="get">
                            <input type="submit" value="Add to cart">
                        </form>
                    </td>
                </table>
            </td>
            <?php endif; ?>
        </tr>
    </table>
    <script src="../JavaScript/script.js"></script>
</body>
</html>
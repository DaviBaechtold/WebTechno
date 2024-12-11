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
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/mystyle.css">
</head>
<header>
	<h1>Book Collection</h1>
</header>
<body>
    <table>
        <tr>
            <td>
                <a href='index.php'  id="home">Home</a>
            </td>
        </tr>
        <tr>
            <?php foreach ($products as $product): ?>
                <td>
                    <a href='product.php?pid=<?php echo $product["pid"]; ?>' >
                        <img src='<?php echo $product["imagePath"]; ?>' alt='logo' width="250px" height="250px">
                        <h2><?php echo $product["name"]; ?></h2>
                    </a>
                    <label>
                        <?php echo $product["description"]; ?>
                        <h2 id="Promo<?php echo $product["pid"]; ?>">
                            <?php echo $product["price"]; ?>€
                        </h2>
                    </label>
                    <form action="cart.php" method="get">
                        <input type="submit" value="Add to cart">
                        <input type="number" id="Q<?php echo $product["pid"]; ?>" min="1" value="1">
                        <button type="button" onclick="addToCollection('<?php echo htmlspecialchars($product["name"]); ?>', 'Q<?php echo $product["pid"]; ?>')">
                            Add to Collection
                        </button>
                        <input type="text" id="P<?php echo $product["pid"]; ?>" value="10%Off">
                        <button type="button" onclick="promoCode('<?php echo htmlspecialchars($product["name"]); ?>', 'Promo<?php echo $product["pid"]; ?>', 'P<?php echo $product["pid"]; ?>')">
                            Add PromoCode
                        </button>
                    </form>
                </td>
            <?php endforeach; ?>
        </tr>
        <tr id="Collection">
            <td>
                <h3>Your Collection</h3>
                <button type="button" onclick="document.getElementById('BookList').style.display='none'">
                    Hide Collection
                </button>
                <p>Here are the books you've added to your collection:</p>
                <ul id="BookList">
                </ul>
            </td>
        </tr>
    </table>
    <script src="../JavaScript/script.js"></script>
    <script src="../JavaScript/bookCollection.js"></script>
</body>

</html>

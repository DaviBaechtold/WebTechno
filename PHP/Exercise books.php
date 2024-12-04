<?php
// Book data (replace with database integration in the future)
$books = [
    [
        "title" => "Staying Healthy",
        "description" => "This book is an exercise book for the kids in pre-school. Highlights Summer Big Fun...",
        "price" => "79.99€",
        "image" => "../Image/book2.jpg",
        "promo" => "10%Off",
        "promoId" => "Promo1",
        "quantityId" => "Q1",
        "codeId" => "P1",
        "addCollectionFn" => "addToCollection('Staying Healthy', 'Q1')",
        "promoCodeFn" => "promoCode('Staying Healthy', 'Promo1', 'P1')",
        "link" => "Book2.php"
    ],
    [
        "title" => "Summer Exercise",
        "description" => "This book is an exercise book for the kids in pre-school. Highlights Summer Big Fun...",
        "price" => "49.99€",
        "image" => "../Image/summer1.jpg",
        "promo" => "20%Off",
        "promoId" => "Promo2",
        "quantityId" => "Q2",
        "codeId" => "P2",
        "addCollectionFn" => "addToCollection('Summer Exercises', 'Q2')",
        "promoCodeFn" => "promoCode('Summer Exercises', 'Promo2','P2')",
        "link" => "Summer1.php"
    ],
    [
        "title" => "Math Exercise 3-4",
        "description" => "This book is an exercise book for the kids in pre-school. Highlights Summer Big Fun...",
        "price" => "59.99€",
        "image" => "../Image/summer2.jpg",
        "promo" => "30%Off",
        "promoId" => "Promo3",
        "quantityId" => "Q3",
        "codeId" => "P3",
        "addCollectionFn" => "addToCollection('Math Exercises', 'Q3')",
        "promoCodeFn" => "promoCode('Math Exercises', 'Promo3', 'P3')",
        "link" => "Summer2.php"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/mystyle.css">
    <title>Book Collection</title>
</head>

<header>
    <h1>Book Collection</h1>
</header>

<body>
    <table>
        <tr>
            <td>
                <a href="index.php" id="home">Home</a>
            </td>
        </tr>
        <tr>
            <?php foreach ($books as $book): ?>
            <td>
                <a href="<?php echo $book['link']; ?>">
                    <img src="<?php echo $book['image']; ?>" alt="Book Image" width="250px" height="250px">
                    <h2><?php echo $book['title']; ?></h2>
                </a>
                <label>
                    <?php echo nl2br($book['description']); ?><br>
                    <h2 id="<?php echo $book['promoId']; ?>"><?php echo $book['price']; ?></h2>
                </label>
                <form action="cart.php" method="get">
                    <input type="submit" value="Add to cart">
                    <input type="number" id="<?php echo $book['quantityId']; ?>" min="1" value="1">
                    <button type="button" onclick="<?php echo $book['addCollectionFn']; ?>">Add to Collection</button>
                    <input type="text" id="<?php echo $book['codeId']; ?>" value="<?php echo $book['promo']; ?>">
                    <button type="button" onclick="<?php echo $book['promoCodeFn']; ?>">Add PromoCode</button>
                </form>
            </td>
            <?php endforeach; ?>
        </tr>
        <tr id="Collection">
            <td>
                <h3>Your Collection</h3>
                <button type="button" onclick="document.getElementById('BookList').style.display='none'">Hide Collection</button>
                <p>Here are the books you've added to your collection:</p>
                <ul id="BookList"></ul>
            </td>
        </tr>
    </table>
</body>
<script src="../JavaScript/script.js"></script>
<script src="../JavaScript/bookCollection.js"></script>
</html>

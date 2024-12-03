<?php
// Start the session to track the cart
session_start();

// Initialize the cart if it doesn't exist
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Function to calculate the total price of the cart
function calculateTotal() {
    $total = 0;
    foreach ($_SESSION['cart'] as $item) {
        $total += $item['price'] * $item['quantity'];
    }
    return $total;
}

// If items are added to the cart via the form, update the session
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    $id = $_POST['id'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $name = $_POST['name'];

    if ($_POST['action'] === 'add') {
        // Add item to the cart
        $_SESSION['cart'][] = ['id' => $id, 'name' => $name, 'price' => $price, 'quantity' => $quantity];
    } elseif ($_POST['action'] === 'remove') {
        // Remove item from the cart
        foreach ($_SESSION['cart'] as $key => $item) {
            if ($item['id'] === $id) {
                unset($_SESSION['cart'][$key]);
                break;
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Shopping Cart</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Your Shopping Cart</h1>

    <table id="cartTable">
        <thead>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($_SESSION['cart'] as $item): ?>
                <tr>
                    <td><?php echo $item['name']; ?></td>
                    <td><?php echo number_format($item['price'], 2); ?> €</td>
                    <td><input type="number" value="<?php echo $item['quantity']; ?>" min="1" data-id="<?php echo $item['id']; ?>" class="quantity-input"></td>
                    <td><?php echo number_format($item['price'] * $item['quantity'], 2); ?> €</td>
                    <td><button class="remove-button" data-id="<?php echo $item['id']; ?>">Remove</button></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div id="cartSummary">
        <p>Total: <span id="totalPrice"><?php echo number_format(calculateTotal(), 2); ?> €</span></p>
        <form action="checkout.php" method="POST">
            <button type="submit">Checkout</button>
        </form>
    </div>

    <script src="cart.js"></script>
</body>
</html>

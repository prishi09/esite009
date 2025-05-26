<?php
session_start();
include 'db.php';

if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];

if ($_GET['action'] == 'add' && isset($_GET['id'])) {
    $_SESSION['cart'][] = $_GET['id'];
}

echo "<h1>Cart</h1>";

$total = 0;
foreach ($_SESSION['cart'] as $product_id) {
    $result = $conn->query("SELECT * FROM products WHERE id=$product_id");
    if ($row = $result->fetch_assoc()) {
        echo "<p>{$row['name']} - {$row['price']}</p>";
        $total += $row['price'];
    }
}
echo "<h3>Total: $total</h3>";
?>
<a href="products.php">Continue Shopping</a> | <a href="checkout.php">Checkout</a>

<?php
session_start();
echo "<h1>Checkout</h1>";
echo "<p>Thank you for your purchase!</p>";
$_SESSION['cart'] = [];
?>
<a href="index.php">Back to Home</a>

<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Products</title></head>
<body>
    <h1>Products</h1>
    <?php
    $result = $conn->query("SELECT * FROM products");
    while($row = $result->fetch_assoc()) {
        echo "<div>
            <h3>{$row['name']}</h3>
            <p>Price: {$row['price']}</p>
            <a href='cart.php?action=add&id={$row['id']}'>Add to Cart</a>
        </div><hr>";
    }
    ?>
    <a href="index.php">Home</a> | <a href="cart.php">View Cart</a>
</body>
</html>

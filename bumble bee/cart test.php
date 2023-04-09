<?php
session_start();

// Empty the cart if the 'empty_cart' query string is present in the URL
if (isset($_GET['empty_cart'])) {
    $_SESSION['cart'] = array();
}

// Display the products in the cart
if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
    echo "<h2>Shopping Cart</h2>";
    echo "<table>";
    echo "<tr><th>Product Name</th><th>Quantity</th><th>Price</th><th>Total</th></tr>";
    $total = 0;
    foreach ($_SESSION['cart'] as $item) {
        $product_total = $item['quantity'] * $item['price'];
        $total += $product_total;
        echo "<tr><td>" . $item['name'] . "</td><td>" . $item['quantity'] . "</td><td>LKR " . $item['price'] . "</td><td>LKR " . $product_total . "</td></tr>";
    }
    echo "<tr><td colspan='3' align='right'><strong>Total:</strong></td><td>LKR " . $total . "</td></tr>";
    echo "</table>";
} else {
    echo "<h2>Your cart is empty</h2>";
}

// Display the checkout button
if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
    echo "<form action='checkout.php' method='get'><input type='submit' name='checkout' value='Checkout'></form>";
}

// Display the empty cart button
if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
    echo "<form action='cart.php' method='get'><input type='submit' name='empty_cart' value='Empty Cart'></form>";
}

<!DOCTYPE html>
<html>

<head>
    <title>Product Page</title>
    <style>
        /* Add your styles here */
    </style>
</head>

<body>
    <div class="product-container">
        <h2>Product Details</h2>
        <h3>Product 1</h3>
        <p>Price: $10.00</p>
        <button onclick="addToCart('Product 1', 10.00)">Add to Cart</button>

        <h3>Product 2</h3>
        <p>Price: $20.00</p>
        <button onclick="addToCart('Product 2', 20.00)">Add to Cart</button>
    </div>

    <script>
        function addToCart(productName, price) {
            var cartItems = JSON.parse(localStorage.getItem("cartItems")) || [];

            // Check if product already exists in cart
            var found = false;
            for (var i = 0; i < cartItems.length; i++) {
                if (cartItems[i].name === productName) {
                    cartItems[i].quantity++;
                    found = true;
                    break;
                }
            }

            // If product not found, add it to cart
            if (!found) {
                cartItems.push({
                    name: productName,
                    price: price,
                    quantity: 1
                });
            }

            // Update cart items in local storage
            localStorage.setItem("cartItems", JSON.stringify(cartItems));


        }
        var checkoutButton = document.getElementById("checkout-button");
        checkoutButton.addEventListener("click", function() {
            // Redirect to the cart page
            window.location.href = "Cart.php";
        });
    </script>

    <!-- Add a checkout button in your HTML code -->
    <button id="checkout-btn">Checkout</button>

    <!-- Add a script that redirects to the cart page when the checkout button is clicked -->
    <script>
        // Get a reference to the checkout button
        const checkoutBtn = document.querySelector('#checkout-btn');

        // Add an event listener to the checkout button
        checkoutBtn.addEventListener('click', () => {
            // Redirect to the cart page
            window.location.href = 'Cart.php';
        });
    </script>
</body>

</html>
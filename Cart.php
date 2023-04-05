<!DOCTYPE html>
<html>

<head>
  <title>Shopping Cart</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* Styles for the cart page */
    .cart-item {
      display: flex;
      justify-content: space-between;
      margin-bottom: 10px;
    }

    .cart-item-name {
      font-weight: bold;
      margin-right: 10px;
    }

    .cart-item-price {
      color: green;
      margin-right: 10px;
    }

    .cart-item-remove {
      background-color: red;
      color: white;
      border: none;
      padding: 5px;
      border-radius: 5px;
      cursor: pointer;
    }

    #total {
      font-weight: bold;
      margin-top: 10px;
    }

    #installment {
      margin-top: 10px;
      font-weight: bold;
    }

    #pay-now {
      background-color: green;
      color: white;
      border: none;
      padding: 5px;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <h1>Shopping Cart</h1>

  <ul id="cart"></ul>

  <p id="total"></p>

  <p id="installment"></p>

  <button id="pay-now">Pay Now</button>

  <script>
    // Get cart items from local storage
    var cartItems = JSON.parse(localStorage.getItem("cartItems")) || [];

    // Get cart element
    var cart = document.getElementById("cart");

    // Update the cart with cart items
    function updateCart() {
      // Clear the cart
      cart.innerHTML = "";

      // Add each cart item to the cart
      var total = 0;
      for (var i = 0; i < cartItems.length; i++) {
        var item = cartItems[i];

        // Create cart item elements
        var nameSpan = document.createElement("span");
        nameSpan.classList.add("cart-item-name");
        nameSpan.textContent = item.name;

        var priceSpan = document.createElement("span");
        priceSpan.classList.add("cart-item-price");
        priceSpan.textContent = "$" + item.price.toFixed(2);

        var removeButton = document.createElement("button");
        removeButton.classList.add("cart-item-remove");
        removeButton.textContent = "Remove";

        // Add event listener for remove button
        removeButton.addEventListener("click", function() {
          // Get the name of the item to remove
          var itemName = this.parentElement.querySelector(".cart-item-name").textContent;

          // Find the index of the cart item to remove
          var index = -1;
          for (var j = 0; j < cartItems.length; j++) {
            if (cartItems[j].name === itemName) {
              index = j;
              break;
            }
          }

          // Remove the cart item from the cart items array
          if (index !== -1) {
            cartItems.splice(index, 1);
          }

          // Update cart items in local storage
          localStorage.setItem("cartItems", JSON.stringify(cartItems));

          // Reload the page to update the cart
          window.location.reload();
        });

        // Add cart item details to a list item
        var listItem = document.createElement("li");
        listItem.classList.add("cart-item");
        listItem.appendChild(nameSpan);
        listItem.appendChild(priceSpan);
        listItem.appendChild(removeButton);

        // Add the

        // Add the list item to the cart element
        cart.appendChild(listItem);

        // Update the total cost
        total += item.price;
      }

      // Update the total cost in
      // the HTML
      document.getElementById("total").textContent = "Total: $" + total.toFixed(2);
    }

    // Update the cart when the page loads
    updateCart();
  </script>
  <script>
    // Get the total cost element
    var totalElement = document.getElementById("total");

    // Get the total cost value as a number
    var total = parseFloat(totalElement.textContent.split("$")[1]);

    // Check if total is less than or equal to 15,000
    if (total <= 15000) {
      // Divide the total by 3
      var installment = (total / 3).toFixed(2);

      // Display the installment amount
      console.log("The installment is $" + installment);
    }
  </script>
</body>

</html>
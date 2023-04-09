<!DOCTYPE html>
<html>

<head>
  <title>Bumble Bee/Shopping Cart</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="../bumble bee/css/headerstyle.css">
  <link rel="stylesheet" href="../bumble bee/css/footerstyle.css">
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
  <div class="pc-version">
    <nav class="navbar">
      <!-- LOGO -->
      <div class="pc-header" style="width:40%; padding:0px 20px;">
        <h1>The Bumble Bee Technologies</h1>
      </div>
      <!-- NAVIGATION MENU -->
      <ul class="nav-links" style="width:60%;">
        <!-- NAVIGATION MENUS -->
        <table>
          <colgroup>
            <col width="auto">
            <col width="auto">
            <col width="auto">
            <col width="auto">
            <col width="auto">
            <col width="auto">
          </colgroup>
          <tr>
            <td> <a href="../bumble bee/Home.php">Home </a> </td>
            <td> <a href="../bumble bee/About.php">About </a> </td>
            <td> <a href="../bumble bee/Electronics.php">Electronics</a> </td>
            <td> <a href="../bumble bee/Furniture.php">Furnitures</a> </td>
            <td> <a href="../bumble bee/Login.php">Login</a> </td>
            <td style="border-right: 0px;"> <a href="../bumble bee/Cart.php">Cart</a> </td>
          </tr>
        </table>
      </ul>
    </nav>
  </div>

  <div class="mobile-version">
    <div class="menu-container">

      <input type="checkbox" id="openmenu" class="men-check">
      <div class="menu-icon">
        <label for="openmenu" id="hamburger-label">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </label>
      </div>

      <div class="menu-pane">
        <nav>
          <ul class="menu-links">
            <li><a href="../bumble bee/Home.php">Home </a></li>
            <li><a href="../bumble bee/About.php">About </a></li>
            <li><a href="../bumble bee/Electronics.php">Electronics</a></li>
            <li><a href="../bumble bee/Furniture.php">Furnitures</a></li>
            <li><a href="../bumble bee/Login.php">Login</a></li>
            <li><a href="../bumble bee/Cart.php">Cart</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>


  <ul id="cart"></ul>

  <p id="total"></p>

  <p id="installment"></p>

  <button id="pay-now">
    <a href="https://www.payeasy.lk/SPEClientWeb/ActionController">Pay Now</a></button><br><br><br>

  <button id="pay-now" onclick="openPopup()">installments</button><br><br>

  <script>
    function openPopup() {
      // Create a modal dialog box
      var popup = window.open("", "Pop-up Window", "width=400,height=200,scrollbars=no");

      // Add content to the pop-up window
      popup.document.write("<h1>Are you 18+?</h1>");
      popup.document.write("<button onclick='redirectYes()'>Yes</button>");
      popup.document.write("<button onclick='redirectNo()'>No</button>");

      // Show the modal dialog box
      popup.focus();
    }

    /// Function to redirect to the page for adults
    function redirectYes() {
      window.location.href = "https://www.payeasy.lk/SPEClientWeb/ActionController";
    }

    // Function to redirect to the page for minors
    function redirectNo() {
      window.location.href = "../bumble bee/Home.php";
    }
  </script>

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
        priceSpan.textContent = "lkr " + item.price.toFixed(2);

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
      document.getElementById("total").textContent = "Total: LKR " + total.toFixed(2);
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
  <footer class="footer">
    <table>
      <tr>
        <td style="vertical-align:middle">
          <h2>The Bumble Bee Technologies</h2>
        </td>
        <td>
          <h2><u>Contact Us</u></h2>
          <br />
          No 14 De Fonseka Place<br>
          Colombo 05<br>
          Sri Lanka<br><br><br>

          Phone: (03) 9568 1486<br><br>

          <a class="footer__btn" href="mailto:thegardenrest@web.com">Email Us</a>
        </td>
        <td>
          <h2><u>We are Accepting</u></h2>
          <br>
          <img style="height: 50px;" src="../bumble bee/images/visa.png" alt="Visa" />
          <img style="height: 50px;" src="../bumble bee/images/master.png" alt="Master" />
          <img style="height: 50px;" src="../bumble bee/images/ae.png" alt="American Express" />
        </td>
        <td>
          <h2><u>Follow Us On</u></h2>
          <br>
          <a href="https://www.facebook.com/"></i>Facebook</a> <br>
          <a href="https://twitter.com/"></i>Twitter</a> <br>
          <a href="https://www.whatsapp.com/"></i>Whats App</a><br><br><br>
        </td>
      </tr>
    </table>

  </footer>
</body>

</html>
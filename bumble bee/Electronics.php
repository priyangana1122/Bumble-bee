<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>

  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="../bumble bee/css/headerstyle.css">
  <link rel="stylesheet" href="../bumble bee/css/footerstyle.css">
  <style>

  </style>
  <title>Bumble Bee/Electronics</title>

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

  <div class="content menu-page" style="display:block;">
    <div class="menu">


      <div class="sub-heading">
        <h3>&mdash; Refrigerators &mdash; </h3>
      </div>

      <style>
        .product-grid {
          display: flex;
          flex-wrap: wrap;
        }

        .product-row {
          display: flex;
          justify-content: space-between;
          width: 100%;
          margin-bottom: 20px;
        }

        .product {
          flex-basis: calc(33.33% - 20px);
          box-sizing: border-box;
          padding: 10px;
          text-align: center;
        }

        .product img {
          display: block;
          margin: 0 auto;
          max-width: 100%;
          height: auto;
          margin-bottom: 10px;
        }
      </style>

      <?php
      // Connect to the database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "bumblebee";

      $conn = mysqli_connect($servername, $username, $password, $dbname);

      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      // Query the database to retrieve products
      $sql = "SELECT * FROM product WHERE category='FR'";
      $result = mysqli_query($conn, $sql);




      // Display the products on the webpage
      echo "<div class='product-grid'>";
      $count = 0;
      while ($row = mysqli_fetch_assoc($result)) {
        if ($count % 3 == 0) {
          echo "<div class='product-row'>";
        }
        echo "<div class='product'>";
        echo "<img src='" . $row["image"] . "' alt='" . $row["name"] . "' width='200' height='200'><br>";
        echo "<h3>" . $row["name"] . "</h3>";
        echo "<p>" . $row["description"] . "</p>";
        echo "<p><strong>Price:</strong> LKR " . $row["price"] . "</p>";
        echo "<form action='' method='post'><input type='hidden' name='product_name' value='" . $row["name"] . "'><input type='number' name='quantity' value='1' min='1'><input type='hidden' name='price' value='" . $row["price"] . "'><input type='submit' value='Add to Cart'></form>";

        echo "</div>";
        $count++;
        if ($count % 3 == 0) {
          echo "</div>";
        }
      }
      if ($count % 3 != 0) {
        echo "</div>";
      }
      echo "</div>";



      // Close the database connection
      mysqli_close($conn);
      ?>











      <div class="sub-heading">
        <h3>&mdash; Washine Machines &mdash; </h3>
      </div>

      <style>
        .product-grid {
          display: flex;
          flex-wrap: wrap;
        }

        .product-row {
          display: flex;
          justify-content: space-between;
          width: 100%;
          margin-bottom: 20px;
        }

        .product {
          flex-basis: calc(33.33% - 20px);
          box-sizing: border-box;
          padding: 10px;
          text-align: center;
        }

        .product img {
          display: block;
          margin: 0 auto;
          max-width: 100%;
          height: auto;
          margin-bottom: 10px;
        }
      </style>

      <?php
      // Connect to the database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "bumblebee";

      $conn = mysqli_connect($servername, $username, $password, $dbname);

      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      // Query the database to retrieve products
      $sql = "SELECT * FROM product WHERE category='WM'";
      $result = mysqli_query($conn, $sql);




      // Display the products on the webpage
      echo "<div class='product-grid'>";
      $count = 0;
      while ($row = mysqli_fetch_assoc($result)) {
        if ($count % 3 == 0) {
          echo "<div class='product-row'>";
        }
        echo "<div class='product'>";
        echo "<img src='" . $row["image"] . "' alt='" . $row["name"] . "' width='200' height='200'><br>";
        echo "<h3>" . $row["name"] . "</h3>";
        echo "<p>" . $row["description"] . "</p>";
        echo "<p><strong>Price:</strong> LKR " . $row["price"] . "</p>";
        echo "<form action='' method='post'><input type='hidden' name='product_name' value='" . $row["name"] . "'><input type='number' name='quantity' value='1' min='1'><input type='hidden' name='price' value='" . $row["price"] . "'><input type='submit' value='Add to Cart'></form>";

        echo "</div>";
        $count++;
        if ($count % 3 == 0) {
          echo "</div>";
        }
      }
      if ($count % 3 != 0) {
        echo "</div>";
      }
      echo "</div>";



      // Close the database connection
      mysqli_close($conn);
      ?>


      <div class="sub-heading">
        <h3>&mdash; Laptops &mdash; </h3>
      </div>
      <style>
        .product-grid {
          display: flex;
          flex-wrap: wrap;
        }

        .product-row {
          display: flex;
          justify-content: space-between;
          width: 100%;
          margin-bottom: 20px;
        }

        .product {
          flex-basis: calc(33.33% - 20px);
          box-sizing: border-box;
          padding: 10px;
          text-align: center;
        }

        .product img {
          display: block;
          margin: 0 auto;
          max-width: 100%;
          height: auto;
          margin-bottom: 10px;
        }
      </style>


      <?php
      // Connect to the database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "bumblebee";

      $conn = mysqli_connect($servername, $username, $password, $dbname);

      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      // Query the database to retrieve products
      $sql = "SELECT * FROM product WHERE category='LP'";
      $result = mysqli_query($conn, $sql);




      // Display the products on the webpage
      echo "<div class='product-grid'>";
      $count = 0;
      while ($row = mysqli_fetch_assoc($result)) {
        if ($count % 3 == 0) {
          echo "<div class='product-row'>";
        }
        echo "<div class='product'>";
        echo "<img src='" . $row["image"] . "' alt='" . $row["name"] . "' width='200' height='200'><br>";
        echo "<h3>" . $row["name"] . "</h3>";
        echo "<p>" . $row["description"] . "</p>";
        echo "<p><strong>Price:</strong> LKR " . $row["price"] . "</p>";
        echo "<form action='' method='post'><input type='hidden' name='product_name' value='" . $row["name"] . "'><input type='number' name='quantity' value='1' min='1'><input type='hidden' name='price' value='" . $row["price"] . "'><input type='submit' value='Add to Cart'></form>";

        echo "</div>";
        $count++;
        if ($count % 3 == 0) {
          echo "</div>";
        }
      }
      if ($count % 3 != 0) {
        echo "</div>";
      }
      echo "</div>";



      // Close the database connection
      mysqli_close($conn);
      ?>

      <div class="sub-heading">
        <h3>&mdash; Mobile Phones &mdash; </h3>
      </div>

      <style>
        .product-grid {
          display: flex;
          flex-wrap: wrap;
        }

        .product-row {
          display: flex;
          justify-content: space-between;
          width: 100%;
          margin-bottom: 20px;
        }

        .product {
          flex-basis: calc(33.33% - 20px);
          box-sizing: border-box;
          padding: 10px;
          text-align: center;
        }

        .product img {
          display: block;
          margin: 0 auto;
          max-width: 100%;
          height: auto;
          margin-bottom: 10px;
        }
      </style>

      <?php
      // Connect to the database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "bumblebee";

      $conn = mysqli_connect($servername, $username, $password, $dbname);

      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      // Query the database to retrieve products
      $sql = "SELECT * FROM product WHERE category='MP'";
      $result = mysqli_query($conn, $sql);




      // Display the products on the webpage
      echo "<div class='product-grid'>";
      $count = 0;
      while ($row = mysqli_fetch_assoc($result)) {
        if ($count % 3 == 0) {
          echo "<div class='product-row'>";
        }
        echo "<div class='product'>";
        echo "<img src='" . $row["image"] . "' alt='" . $row["name"] . "' width='200' height='200'><br>";
        echo "<h3>" . $row["name"] . "</h3>";
        echo "<p>" . $row["description"] . "</p>";
        echo "<p><strong>Price:</strong> LKR " . $row["price"] . "</p>";
        echo "<form action='' method='post'><input type='hidden' name='product_name' value='" . $row["name"] . "'><input type='number' name='quantity' value='1' min='1'><input type='hidden' name='price' value='" . $row["price"] . "'><input type='submit' value='Add to Cart'></form>";

        echo "</div>";
        $count++;
        if ($count % 3 == 0) {
          echo "</div>";
        }
      }
      if ($count % 3 != 0) {
        echo "</div>";
      }
      echo "</div>";



      // Close the database connection
      mysqli_close($conn);
      ?>






    </div>

    <!-- This footer is added inside the div. Otherwise it will come in the middle of the page -->
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
  </div>

</body>

</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>

  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="../bumble bee/css/headerstyle.css">
  <link rel="stylesheet" href="../bumble bee/css/footerstyle.css">
  <link rel="stylesheet" href="../bumble bee/css/cook.css">

  <style>
    .left-side {
      transition: 10s;

      animation: animate 20s infinite ease-in-out;
    }

    @keyframes animate {
      0% {
        background-image: url('images/bn1.png');
      }

      20% {
        background-image: url('images/bn1.png');
      }

      40% {
        background-image: url('images/bn2.png');
      }

      60% {
        background-image: url('images/bn2.png');
      }

      80% {
        background-image: url('images/bn3.png');
      }

      100% {
        background-image: url('images/bn3.png');
      }

    }
  </style>
  <title>Bumble Bee/Home</title>
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

  <div class="content home-page">
    <div class="left-side">
      <!-- <img src="images/home-image.jpg" width="100%"> -->
    </div>

    <div class="right-side home-right-side" style="background-color: #241d1d;">
      <h1 align="center">
        <span style="color:#FF9933;">We</span><span style="color:white;">lco</span><span style="color:#13dd00;">me</span>
      </h1>

      <div class="content-text-home">
        <p style="color: white;">
          Welcome to our premier The Bumble Bee Technologies company!
          We are dedicated to providing our customers with the latest and greatest in electronics,
          from smartphones and laptops to gaming consoles and smart home devices.


        </p>

        <p style="color: white;">
          Our website offers an easy and secure shopping experience, with a wide selection of products at
          competitive prices. We also pride ourselves on our exceptional customer service, with a team of knowledgeable and
          friendly representatives ready to assist you with any questions or concerns.<br>
          Whether you're a tech enthusiast or simply looking for the perfect gift,
          we have something for everyone. Shop with us today and discover the power of technology at your fingertips!
        </p>

      </div>

    </div>
  </div>
  <div class="cookie-container">
    <p>
      We use cookies in this website to give the best experience on our site and show you relavant ads.
      To more, read our privacy policy and cookie policy.
    </p>
    <button class="cookie-btn">
      Okay
    </button>
  </div>
  <script src="../bumble bee/js/cookie.js"></script>

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
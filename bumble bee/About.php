<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>

  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="../bumble bee/css/headerstyle.css">
  <link rel="stylesheet" href="../bumble bee/css/footerstyle.css">

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
  <title>Bumble Bee/About Us</title>
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
            <td style="border-right: 0px;"> <a href="../bumble bee/Testingcart.php">Cart</a> </td>
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

  <div class="content scroll-lock-page">
    <div class="left-side">
      <!-- <img src="images/home-image.jpg" width="100%"> -->
    </div>

    <div class="right-side" style="background-color: #241d1d; overflow-y: scroll;">
      <h1 align="center">
        About
      </h1>

      <div class="content-text-home">
        <p style="color: white;">
          At our electronic item e-commerce company, we are passionate about technology and dedicated to bringing
          the latest and greatest electronics to our customers.
          We believe that technology has the power to make our lives easier and more enjoyable,
          and we are committed to providing exceptional products and service to help you stay
          connected and entertained. Our team of experts is constantly searching for new and innovative products
          to add to our inventory, and we are always here to answer any questions or provide assistance to ensure your
          shopping experience is seamless and stress-free. Thank you for choosing us as your trusted source for all things tech,
          and we look forward to serving you for many years to come.

        <p style="color: white;">
          we offer a convenient installment option to help make your purchases more manageable.
          With our flexible payment plans, you can enjoy the latest gadgets and electronics without breaking the bank.
          We believe that everyone should have access to the latest technology,
          and our installment plans make it possible for you to enjoy the latest electronics with ease.
          So why wait? Shop now and take advantage of our convenient installment option to bring home the
          latest technology today!


        <h3 align="center">Opening Hours</h3>

        <table align="center">
          <tr>
            <td>Monday</td>
            <td></td>
            <td>10:00 am - 6:30 pm</td>
          </tr>
          <tr>
            <td>Tuesday</td>
            <td></td>
            <td>10:00 am - 6:30 pm</td>

          </tr>
          <tr>
            <td>Wednesday</td>
            <td></td>
            <td>10:00 am - 6:30 pm</td>

          </tr>
          <tr>
            <td>Thursday</td>
            <td></td>
            <td>10:00 am - 6:30 pm</td>

          </tr>
          <tr>
            <td>Friday</td>
            <td></td>
            <td>10:00 am - 6:30 pm</td>

          </tr>
          <tr>
            <td>Saturday</td>
            <td></td>
            <td>10:00 am - 6:30 pm</td>

          </tr>
          <tr>
            <td>Sunday</td>
            <td></td>
            <td>10:00 am - 6:30 pm</td>

          </tr>
        </table>

        <h3 align="center">Address</h3>

        <center>
          <p align="center" style="width: fit-content; margin-bottom:10px;">

            </td>
            <td>
              <h2><u>Contact Us</u></h2>



              The Bumble Bee Technologies<br>
              No 14 De Fonseka Place<br>
              Colombo 05<br>
              Sri Lanka<br><br>
              Phone: (03) 9568 1486 <br><br>
              eMail: <kbd>thebumblebee@gmail.com</kbd>
          </p>
        </center>

      </div>

    </div>
  </div>
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
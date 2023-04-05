<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>

  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="../bumble bee/css/headerstyle.css">
  <link rel="stylesheet" href="../bumble bee/css/footerstyle.css">
  <link rel="stylesheet" href="../bumble bee/css/login.css">
  <title>Bumble Bee/Login</title>
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

  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <form class="login100-form validate-form">

          <span class="login100-form-title p-b-43">
            Login to continue</span>
          <form action="/action_page.php" method="post">


            <div class="container">
              <label for="uname"><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="uname" required>

              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>

              <button type="submit">Login</button>
              <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
              <button type="button" class="cancelbtn">Cancel</button>
              <span class="psw"><a href="#">Forgot password?</a></span><br>
              <a href="../bumble bee/Sign.php">Create an Account</a>
            </div>
          </form>
        </form>

        <div class="login100-more" style="background-image: url('../images/17.png');">
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <table>
      <tr>
        <td style="vertical-align:middle">
          <h2>The Garden Indian Restaurant</h2>
        </td>
        <td>
          <h2><u>Contact Us</u></h2>
          <br />
          Chadstone Shopping Centre<br>
          1341 Dandenong Rd., Malvern East Vic., 3148<br>
          Phone: (03) 9568 1486<br><br>

          <a class="footer__btn" href="mailto:thegardenrest@web.com">Email Us</a>
        </td>
        <td>
          <h2><u>We are Accepting</u></h2>
          <br>
          <img style="height: 50px;" src="../Restaurant/images/visa.png" alt="Visa" />
          <img style="height: 50px;" src="../Restaurant/images/master.png" alt="Master" />
          <img style="height: 50px;" src="../Restaurant/images/ae.png" alt="American Express" />
        </td>
        <td>
          <h2><u>Follow Us On</u></h2>
          <br>
          <a href="https://www.facebook.com/"></i>Facebook</a> <br>
          <a href="https://twitter.com/"></i>Twitter</a> <br>
          <a href="https://www.whatsapp.com/"></i>Whats App</a><br><br><br>
          <a href="../Restaurant/Report.html"></i>Report</a>
          <br><br><br>
          <p>Upeksha Saparamadu - U1134218</p>
        </td>
      </tr>
    </table>

  </footer>

</body>

</html>
<html>

<head>
    <title>Bumble Bee/Sign Up</title>


    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="../bumble bee/css/headerstyle.css">
    <link rel="stylesheet" href="../bumble bee/css/footerstyle.css">
    <link rel="stylesheet" href="../bumble bee/css/Sign.css">

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
        <div class="wrap-login100">
            <form class="login100-form" action="../php/register.php" method="post">

                <label> First name </label>
                <input type="text" name="firstname" placeholder="First name" size="15" required />
                <label> Last name: </label>
                <input type="text" name="lastname" placeholder="Last name" size="15" required />
                <div>
                    <label>
                        Gender :
                    </label><br>
                    <input type="radio" value="Male" name="gender" checked> Male
                    <input type="radio" value="Female" name="gender"> Female

                </div>
                <label>
                    Phone :
                </label>
                <input type="text" name="contact" placeholder="contact" value="+94" size="5" />
                Address :
                <textarea cols="80" rows="3" name="address" placeholder="Current Address" value="address" required>
						  </textarea>
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
                <button type="submit" class="registerbtn" id="submitBtn">Submit</button>
                <p><a href="../bumble bee/Login.php">Already have an Account?</a></p>
            </form>

            <div class="login100-more" style="background-image: url('../images/21.png');"></div>
        </div>

    </div>



    <div class="legal">
        <p>&copy; 2022 All rights reserved</p>
    </div>
    </footer>
</body>

</html>
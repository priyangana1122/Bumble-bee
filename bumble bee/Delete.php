<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../bumble bee/css/headerstyle.css">
    <title>Delete Data</title>
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
                        <td> <a href="../bumble bee/Admin.php">Dashbord</a> </td>
                    </tr>
                </table>
            </ul>
        </nav>
    </div>

    <h1>Delete Data</h1>
    <form method="post" action="../bumble bee/php/del.php">
        <label for="id">ID:</label>
        <input type="text" id="id" name="id" required><br><br>
        <input type="submit" value="Submit">
    </form>



</body>

</html>
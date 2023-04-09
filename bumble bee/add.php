<!DOCTYPE html>
<html>

<head>
    <title>Insert Data</title>
    <link rel="stylesheet" href="../bumble bee/css/headerstyle.css">
</head>
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

<body>
    <h1>Insert Data</h1>
    <form method="post" action="../bumble bee/php/insert.php">
        <label for="category">Category Code:</label>
        <input type="text" id="category" name="category" required><br><br>
        <label for="image">Image URL:</label>
        <input type="text" id="image" name="image" required><br><br>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="description">Description:</label>
        <input type="text" id="description" name="description" required><br><br>
        <label for="price">Price:</label>
        <input type="text" id="price" name="price" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>PHP: 03 --- Navigation Bar</title>
        <style>
.selected {
    font-weight: bold;
    color: red;
}
        </style>
    </head>
    <body>
        <nav>
            <a class="selected" href="php_03_p1.php">Page 1</a><br>
            <a href="php_03_p2.php">Page 2</a><br>
            <a href="php_03_p3.php">Page 3</a><br>
        </nav>
        <h1>Page 1</h1>
        <p>Page 1 Content</p>

        <?php
        $owner = "Navigation";
        require("footer.php");
        ?>
    </body>
</html>

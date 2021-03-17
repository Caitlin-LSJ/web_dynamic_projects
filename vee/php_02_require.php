<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>PHP: 02 --- File Inclusion</title>
    </head>
    <body>
        <?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$include_footer = false;

if (function_exists("date_default_timezone_set")) {
    date_default_timezone_set("Asia/Kuala_Lumpur");
}
echo '<p>' . date('d-M-Y H:i:s e T') . '</p>';

$owner = "BUW3213";

if ($include_footer) {
    require("php_xx_footer.php");
    // require_once("php_xx_footer.php");
    // require_once("php_xx_footer.php");
}
        ?>
    </body>
</html>

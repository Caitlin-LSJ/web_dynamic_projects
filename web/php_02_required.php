<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PHP 02: File Inclusion</title>
</head>

<body>
    <?php
    echo "Hello!";

    ini_set('display_errors', 1);
    ini_set('display_starup_errors', 1);
    error_reporting(E_ALL);
    echo "Hello!";
    $include_footer = false;

    if (function_exists("date_default_timezone_set")) {
        date_default_timezone_get("Asia/Kuala_Lumpur");
    }
    echo date('d-M-Y H:i:s e T');

    $owner = "";

    if ($include_footer) {
        require("footer.php"); //but for required it will be an error AND warning, generally required is used the most.
    }



    ?>
</body>

<!-- // include("footer.php"); //should there be no file, then it would show a warning -->

</html>
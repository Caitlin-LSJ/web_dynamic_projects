<?php
// setcookie("name", "Jerry");
// setcookie("name", "", time() - 86400);
if (empty($_COOKIE['visited'])) {
    //Possible new user
    setcookie("visited", "1", time()*60*60*24*30);
} else {
    //old user
    $visited = (string) (((int) $_COOKIE['visited']) + 1);
    setcookie("visited", $visited);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale =1.0">
    <title>PHP 04: Cookies Functions</title>
    <script>
    </script>

</head>

<body>
    Number of visits:
    <?php
    echo empty($_COOKIE['name']) ? 0 : $_COOKIE['visited'];
    ?>
</body>

</html>
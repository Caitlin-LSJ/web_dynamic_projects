<?php
if (empty($_COOKIE['visited'])) {
    // Probably new user!
    setcookie("visited", "1", time()*60*60*24*30);
}
else {
    // Old user!
    // - Note: In C, atoi()
    $visited = (string) (((int) $_COOKIE['visited']) + 1);
    setcookie("visited", $visited);
}

// To remove cookies:
// - setcookie("name", "", time() - 86400);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript 01</title>
    <script>
    </script>
</head>
<body>
    Number of visits: 
    <?php
    echo empty($_COOKIE['visited']) ? 0 : $_COOKIE['visited'];
    ?>
</body>

</html>

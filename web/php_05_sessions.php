<?php

session_start();
$_SESSION['username'] = 'alex';
?>

<!DOCTYPE html>
<html lang = "en">

<head>
<meta name="viewport" content="width=device-width, initial-scale =1.0">
    <title>PHP 05</title>
    <script>
    </script>
</head>
<body>
    <p>Username: <?php echo $_SESSION['username']; ?></p>
</body>
</html>
<?php
// Start the session
session_start();

$_SESSION['username'] = 'alex';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 5</title>
    <script>
    </script>
</head>
<body>
    <p>Username: <?php echo $_SESSION['username']; ?></p>
</body>

</html>

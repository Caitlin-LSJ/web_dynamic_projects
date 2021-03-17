<?php
// Alternatively, can set in php.ini: session.auto_start=1
// BUT: Don't rely on session.auto_start=1
// BEST: Start the session with session_start() manually
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script>
    </script>
</head>

<body>
    <form method="post" action="php_06_login_process.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>
        <input type="submit" value="Login">
    </form>
    <?php
    if (!empty($_SESSION['login_message'])) {
        echo '<script>alert("' . htmlspecialchars($_SESSION['login_message']) . '");</script>';
        unset($_SESSION['login_message']);
    }
    ?>
</body>

</html>
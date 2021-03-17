<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Hash</title>
    <script>
    </script>
</head>

<body>
    <?php
    if (!empty($_POST['password'])) {
        $password_hashed = password_hash($_POST['password'], PASSWORD_DEFAULT);
        echo '<p>Password: ' . htmlspecialchars($_POST['password']) . "</p>\n";
        echo '<p>Hashed:</p><pre>' . htmlspecialchars($password_hashed) . "</pre>\n";
    }

    if (!empty($_SESSION['login_message'])) {
        echo '<script>alert("' . htmlspecialchars($_SESSION['login_message']) . '");</script>';
        unset($_SESSION['login_message']);
    }
    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="password">Password to be hashed:</label>
        <input type="text" id="password" name="password" value="<?php if (!empty($_POST['password'])) {
                                                                    echo htmlspecialchars($_POST['password']);
                                                                } ?>"><br>
        <input type="submit">
    </form>
</body>

</html>
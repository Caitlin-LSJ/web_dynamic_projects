<?php
session_start();
require('common.inc.php');

if (($_SERVER['REQUEST_METHOD'] != 'POST')
    || empty($_POST['username'])
    || empty($_POST['password'])) {
    $_SESSION['login_message'] = 'Please enter username and password.';
    redirect_login();
}

// Authentication
try {
    $conn = new PDO(
        "mysql:host=$db_servername;dbname=$db_database",
        $db_username, $db_password);
    $stmt = $conn->prepare('SELECT * FROM users WHERE username=?');
    $stmt->execute([$_POST['username']]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (empty($result)) {
        // No such user
        $_SESSION['login_message'] = 'No such user.';
        redirect_login();
    }
    $user_data = $result[0];
    if (!password_verify($_POST['password'], $user_data['password'])) {
        // Invalid password
        $_SESSION['login_message'] = 'Wrong password.';
        redirect_login();
    }
    // Current Practice!!
    // - We do not tell user whether it's (1) no such user, or (2) has such user but wrong password,
    // - We simply display something like "Username and password mismatch" to confuse attackers.

    $_SESSION['user_id'] = $user_data['user_id'];
    redirect_member();

} catch (PDOException $e) {
    // echo "<p>Connection failed: " . $e->getMessage() . "</p>";
    redirect_login();
}
// --- BAD!!! But useful for debugging and for development

// if ($_POST['username'] == 'alex' && $_POST['password'] == 'secret') {
//     $_SESSION['user_id'] = 'alex';
//     redirect_member();
// }
// else {
//     redirect_login();
// }

<?php
session_start();    // Start the session

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy();  // Destroy started session
signin();

function signin(){
    header('Location: signin_page.php');
    exit;
}

?>
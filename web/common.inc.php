<?php
$db_servername = "localhost";
$db_database = "music";
$db_username = "music";
$db_password = "secret1234";

function redirect($url)
{
    header('Location: ' . $url);
    exit;
}

function redirect_login()
{
    redirect('php_06_login.php');
}

function redirect_member()
{
    redirect('php_06_member.php');
}

function enforce_member_login()
{
    // Page protection
    if (empty($_SESSION['user_id'])) {
        redirect_login();
    }
}

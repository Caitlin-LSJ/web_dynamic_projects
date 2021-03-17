<?php
$db_servername = "localhost";
$db_database = "music";
$db_username = "root";
$db_password = "";

function redirect($url)
{
    header('Location: ' . $url);
    exit;
}

function redirect_login()
{
    redirect('login.php');
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

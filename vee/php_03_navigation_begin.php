<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>PHP: 03 --- Navigation Bar</title>
        <style>
.selected {
    font-weight: bold;
    color: red;
}
        </style>
    </head>
    <body>
        <nav>
<?php
    $page_script_current = basename($_SERVER['PHP_SELF']);
    $page_table = array(
        'php_03_p1.php' => 'Page 1',
        'php_03_p2.php' => 'Page 2',
        'php_03_p3.php' => 'Page 3',
    );
    // 
    foreach ($page_table as $page_script => $page_name) {
        $class = ($page_script_current === $page_script) ? "selected" : "";
        echo "<a class=\"$class\" href=\"$page_script\">$page_name</a><br>\n";
    }
?>
        </nav>

<?php
// For debugging & testing;
// http_response_code(404);
// exit;

$category = empty($_REQUEST['category']) ? 'rice' : $_REQUEST['category'];
$format = empty($_REQUEST['format']) ? 'json' : $_REQUEST['format'];

$filename = "ajax_food_data_{$category}.{$format}";
if (!file_exists($filename)) {
    http_response_code(404);
    exit;
}

switch ($format) {
    case 'xml':
        header('Content-Type: text/xml');
        break;
    case 'json':
        header('Content-Type: application/json');
        break;
}
readfile($filename);

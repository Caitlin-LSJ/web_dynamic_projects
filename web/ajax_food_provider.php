<?php
// For debugging & testing;
// http_response_code(404);
// exit;

$category = empty($_REQUEST['category']) ? 'rice' : $_REQUEST['category'];
$format = empty($_REQUEST['format']) ? 'json' : $_REQUEST['format'];

$filename = "ajax_food_data_{$category}.{$format}";
if (!file_exists($filename)) {
    exit;
}

switch ($format) {
    case 'xml':
        header('Content-type: text/xml');
        break;
    case 'json':
        header('Content-type: application/json');
        break;
}
readfile($filename);

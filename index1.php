<?php
header("Access-Control-Allow-Origin:*");
header('Content-type: application/json');
$url = $_GET['url'];
$data = file_get_contents($url);
$callback = isset( $_GET[ 'callback' ] ) ? $_GET[ 'callback' ] : 'callback';
echo $callback . '(' . $data  . ')';
?>
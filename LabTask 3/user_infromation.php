<?php
$json_data = file_get_contents('data.json');

$data = json_decode($json_data, true);

print_r($data);
?>
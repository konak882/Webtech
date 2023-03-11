<?php

$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];

$data = array(
    "name" => $name,
    "email" => $email,
    "username" => $username
);

$json_data = json_encode($data);
file_put_contents('data.json', PHP_EOL, FILE_APPEND);
file_put_contents('data.json', $json_data, FILE_APPEND);

header('location: user_infromation.php');
?>
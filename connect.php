<?php
$host = getenv('DB_HOST') ?: 'c_mariadb';
$dbname = getenv('DB_NAME') ?: 'mabase';
$user = getenv('DB_USER') ?: 'myuser';
$pass = getenv('DB_PASS') ?: 'mypassword';

$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
?>
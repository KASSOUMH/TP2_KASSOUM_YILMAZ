<?php
define('SERVEUR_BD',getenv('SERVEUR_BD'))
define('LOGIN_BD',getenv('LOGIN_BD'))
define('PASS_BD',getenv('PASS_BD'))
define('NOM_BD',getenv('NOM_BD'))
define('PASS_ROOT_BD',getenv('PASS_ROOT_BD'))
define('PORT_WEB',getenv('PORT_WEB'))
define('PORT_PHPMYADMIN ',getenv('PORT_PHPMYADMIN '))

$host = getenv('DB_HOST') ?: 'mariadb';
$dbname = getenv('DB_NAME') ?: 'mabase';
$user = getenv('DB_USER') ?: 'myuser';
$pass = getenv('DB_PASS') ?: 'mypassword';

$conn = new PDO("mysql:host=$host;dbname=$dbname", "$user", "$pass");
?>
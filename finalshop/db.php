<?php
define('DB_HOST', 'localhost'); // Адрес
define('DB_USER', 'root'); // Имя пользователя
define('DB_PASSWORD', ''); // Пароль
define('DB_NAME', 'shop'); // Имя БД

$mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if ($mysql->connect_error) {
    die('Ошибка подключения: ' . $mysql->connect_error);
}

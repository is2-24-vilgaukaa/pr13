<?php
//Запись в лог ошибок PHP
error_reporting(E_ALL);
ini_set('error_log', __DIR__ . '/php-errors.log');
error_log('Запись в лог', 0);
?>

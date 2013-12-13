<?php
ini_set('gd.jpeg_ignore_warning', 1);													// Игнорировать предупреждения, сгененированные функциями jpeg2wbmp() и imagecreatefromjpeg()

$host = 'mysqlserver'; 																	// имя хоста
$database = 'z248487_univer'; 															// имя базы
$user = 'z248487_univer'; 																// имя пользователя
$pass = 'z248487univer'; 																// пароль
$link = mysql_connect($host, $user, $pass) or die("Не могу соединиться с MySQL.");		// коннект с MySQL
mysql_select_db($database, $link) or die("<br />Не могу подключиться к базе $database.<br />".mysql_errno()." - ".mysql_error()."<br />");
																						/// коннект с БД или вывод ошибки с кодом
mysql_set_charset('utf8', $link); 														// установка кодировки соединения с БД
?>

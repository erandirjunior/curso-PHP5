<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BD', 'php5');

function conectar(){
	$dsn = "mysql:host=" . HOST . ";dbname=" . BD;

	try {
		$conectar = new PDO($dsn, USER, PASS);
		$conectar -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $conectar;
	} catch(PDOException $e) {
		echo "Erro ao conectar ao banco " . $e -> getMessage();
	}
}
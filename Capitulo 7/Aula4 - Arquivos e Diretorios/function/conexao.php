<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BD', 'php5');


/************** CONECTANDO COM O BANCO SEM PDO**************/
function conectarSemPdo() {
    $con = @mysql_connect(HOST, USER, PASS) or die('Erro ao onectar ao banco' . mysql_error());

    if ($con):
        $bd = @mysql_select_db(BD, $con) or die('Erro ao selecionar banco de dados');
        if ($bd):
            return $bd;
        endif;
    endif;
}

/************** CONECTANDO COM O BANCO COM PDO**************/
function conectarComPdo() {
    $dsn = "mysql:host=" . HOST . ";dbname=" . BD;

    try {
        $conectar = new PDO($dsn, USER, PASS);
        $conectar->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conectar;
    } catch (PDOException $e) {
        echo "Erro ao conectar ao banco " . $e->getMessage();
    }
}



<meta charset="UTF-8"/>
<?php
define("NOME","Erandir");

define("SOBRENOME", "Junior");
echo NOME.' '.SOBRENOME;

define("HOST", "localhost");
define("USER", "root");
define("SENHA", "");
define("BD","php5");

$con = mysql_connect(HOST,USER,SENHA) or die("Erro ao conectar ao banco");
if($con){
    $bd = mysql_select_db(BD,$con);
    if($bd):
        echo '<br/>Você se conectou ao banco';
    endif;
}
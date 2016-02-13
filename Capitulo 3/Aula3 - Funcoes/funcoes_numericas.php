<meta charset="UTF-8" />
<?php
/*
 * IS_NUMERIC() - Verifica se o argumento passado é um número
 * NUMBER_FORMAT() - Formata um número
 * ROUND() - Arredonda um numero
 * CEIL() - Arrendo os numero pra cima
 * FLOOR() - Arrendo os numero pra baixo 
 * RAND() - Gera números aleatórios
 */

if(isset($_POST['ok'])):
    if(is_numeric($_POST['dados'])):
        echo sprintf("O valor informado foi %s e esse valor é um número", $_POST['dados']);
     else:
        echo sprintf("O valor informado foi %s e esse valor não é um número", $_POST['dados']);
    endif;
endif;

echo "<br /><br />";

$valor = 3356.80;
$real = number_format($valor, 2 , "," , ".");
echo $real;

echo "<br />";

$numero = 13.49;
echo round($numero);

echo "<br />";

$numero = 13.01;
echo ceil($numero);

echo "<br />";

$numero = 13.85;
echo floor($numero);

echo "<br /><br />";

echo rand(1, 50);
echo "<br />";
for ($i = 0; $i < 50; $i++) {
    echo $i." - ".rand(10, 80)."<br />";
}
?>

<!--
<form action="" method="post">
    <input type="text" name="dados"/>
    <input type="submit" name="ok" value="validador"/>
</form>
-->
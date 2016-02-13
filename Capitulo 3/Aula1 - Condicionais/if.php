<meta charset="UTF-8"/>
<?php

/*
 * Condicionais
 * if
 * switch
 */

$numero = 15;

/*
if ($numero == 10):
    echo "É igual a 10";
elseif ($numero > 10) :
    echo "É maior que 10";
elseif($numero < 10):
    echo "É menor que 10";
else:
    echo "É diferente de 10";
endif;
 */

$numero = 10;
$mensagem = array();


if ($numero == 10):
    $mensagem[] =  "É igual a 10";
elseif ($numero >= 10) :
    $mensagem[] =  "É maior ou igual a 10";
elseif($numero < 10):
    $mensagem[] =   "É menor ou igual a 10";
else:
    $mensagem[] =  "É diferente de 10";
endif;

if($numero >= 10):
    $mensagem[] =  "É maior ou igual a 10";
endif;

//print_r($mensagem);
//foreach ($mensagem as $v) {
//    echo $v.'<br />';
//}

$c = new ArrayIterator($mensagem);
while ($c->valid()):
    echo $c->key().' => '.$c->current().'<br />';
    $c->next();
endwhile;


//$nome = "Junior";
//echo empty($nome) ? "Campo nome está vazio" : "Campo nome está preenchido";
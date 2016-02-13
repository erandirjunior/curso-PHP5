<meta charset="UTF-8"/>
<?php

//INT (INTERGERS) OU SEJA INTEIROS
$int = 12;

if(is_int($int)):
    echo "O número ".$int." é um número inteiro<br>";
else:
    echo "O número ".$int." não é um número inteiro<br>";
endif;

//FLOAT (SÂO FLUTUANTES) OU SEJA NUMEROS QUEBRADOS
$float = 9.1;
if(is_float($float)):
    echo "O número ".$float." é um número decimal<br>";
else:
    echo "O número ".$float." não é um número decimal<br>";
endif;

//STRING (TEXTOS)
$string = "isso é uma string";
if(is_string($string)):
    echo $string." é uma string<br>";
else:
    echo $string." não é uma string<br>";
endif;

//BOOL (BOOLEANO) OU SEJA SÂO VERDADEIROS OU FALSOS
$bool = TRUE;
if(is_bool($bool)):
    echo $bool." é um booleano<br>";
else:
    echo $bool." não é um booleano<br>";
endif;
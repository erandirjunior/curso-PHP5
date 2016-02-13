<?php

/*
 * implode() - PEGA ARRAY E TRANSFORMA EM UMA STRING
 * explode() - PEGA UMA STRING E TRANFORMA EM UM ARRAY
 * Biblioteca SPL (ArrayObject, ArrayInterator)
 */

$times = array(
    'Palmeiras',
    'Fortaleza',
    'Santos',
    'Cruzeiro',
    'Botafogo'
);
$string = implode(', ', $times);
echo strtoupper($string);

echo '<br/>';

$array = explode(', ', $string);
print_r($array);

echo '<br/><br/>';

/*ArrayIterator*/

$c = new ArrayObject($times);
$c->ksort();

$t = new ArrayIterator($c);
while($t->valid()):
    echo $t->key()." => ".strtoupper($t->current())."<br/>";
    $t->next();
endwhile;
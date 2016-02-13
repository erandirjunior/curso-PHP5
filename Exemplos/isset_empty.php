<?php 
/**
 *isset() - retorna se a variavel existe ou se foi iniciada 
 *empty() - retorna se a variavel existe e se ela não está vazia
 */

/*
$a = 'jgvhgh';

if (isset($a)) {
    echo "Existe a variavel";
} else {
    echo "Não existe a variavel";
}*/

$b = '';

if (empty($b)) {
    echo "Não existe a variavel";
} else {
    echo "Existe a variavel";
}
?>
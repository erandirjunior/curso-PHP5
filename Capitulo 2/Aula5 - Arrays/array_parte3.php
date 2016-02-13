<?php

/*
 * array_pop() - encontra o ultimo elemento do array
 * array_shift() - encontra o primeiro elemento do array
 * array_push() - 
 * array_search() - 
 * array_sum() - 
 * count() - 
 * array_values() - 
 * asort() - 
 * arsort() - 
 * ksort() - 
 * implode() - 
 * explode() - 
 */

/*PEGANDO ÚLTIMO ELEMENTO DO ARRAY*/
$numeros = array(1,2,5,10,25,35,85,95,105);
$ultimo = array_pop($numeros);
echo $ultimo;

echo '<br/>';

/*PEGANDO PRIMEIRO ELEMENTO DO ARRAY*/
$numeros = array(1,2,5,10,25,35,85,95,105);
$primeiro = array_shift($numeros);
echo $primeiro;

echo '<br/>';

/*INSERINDO ELEMENTO NO ARRAY - INSERE NO POR ÚLTIMO*/
$numeros = array(1,2,5,35,85,95,105);
array_push($numeros, 1000);
print_r($numeros);

echo '<br/>';

/*PROCURA ONDE ESTÁ DETERMINADO ELEMENTO*/
$numeros = array(1,2,5,35,85,95,105);
$procurado = array_search(105, $numeros);
echo $procurado;

echo '<br/>';

/*SOMANDO VALORES DO ARRAY*/
$numeros = array(1,2,5,35,85,95,105);
$soma = array_sum($numeros);
echo $soma;

echo '<br/>';

/*CONTANDO NUMEROS DE ELEMENTOS DO ARRAY*/
$numeros = array(1,2,5,35,85,95,105);
$cont = count($numeros);
echo $cont;
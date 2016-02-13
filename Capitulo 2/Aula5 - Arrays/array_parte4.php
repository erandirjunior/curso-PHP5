<?php

/*
 * array_values() - 
 * asort() - 
 * arsort() - 
 * ksort() -
 * max() -
 * min() - 
 * implode() - 
 * explode() - 
 */

/*RETORNA OS VALORES DO ARRAY*/
$nomes = array("nome" => "Erandir","sbrenome" => "Junior");
$valores = array_values($nomes);
print_r($valores);

echo '<br/>';

/*RETORNA OS VALORES DO ARRAY EM ORDEM CRESCENTE*/
$nomes = array(1=>"Erandir",2=> "Antonio");
asort($nomes);
print_r($nomes);

echo '<br/>';

/*RETORNA OS VALORES DO ARRAY EM ORDEM DECRESCENTE*/
$nomes = array(1=>"Erandir",2=> "Antonio", 3=> "Feitosa");
arsort($nomes);
print_r($nomes);

echo '<br/>';

/*RETORNA OS VALORES DO ARRAY EM ORDEM DOS INDICES*/
$nomes = array(3=>"Erandir",1=> "Antonio", 2=> "Feitosa");
ksort($nomes);
print_r($nomes);

echo '<br/>';

/*RETORNA O MAIOR VALOR DO ARRAY*/
$numeros = array(1,2,5,8,25,56,98,93);
$maiorValor = max($numeros);
echo $maiorValor;

echo '<br/>';

/*RETORNA O MENOR VALOR DO ARRAY*/
$numeros = array(1,2,5,8,25,56,98,93);
$menorValor = min($numeros);
echo $menorValor;
<?php

//STRTOLOWER - deixa as letras em caixa baixa
$nome = "Erandir Junior";
echo strtolower($nome);

echo "<br /><br />";

//STRTOUPPER - deixa as letras em caixa ALTA
$nome = "Erandir Junior";
echo strtoupper($nome);

echo "<br /><br />";

//UCWORDS - deixa a a primeira letra de cada palavra em caixa alta
$nome = "erandir junior";
echo ucwords($nome);

echo "<br /><br />";

//UCWFIRST - deixa a primeira letra de uma frase em caixa ALTA
$nome = "eu jantei, depois fui dormir";
echo ucfirst($nome);

echo "<br /><br />";

//SUBSTR - corta o trecho da string existindo um começo e podendo exisit um fim
$texto = "Meu nome e Junior e moro em Fortaleza";
echo substr($texto,11, 6);

echo "<br />";

function cortaString($texto, $inicia,$fim = 26){
    return substr($texto, $inicia, $fim);
}

echo cortaString("Meu nome e Junior e moro em Fortaleza", 11, 25);

echo "<br /><br />";

//SBSTR_COUNT - pesquisa a wuantidade de alguma coisa em uma string
$endereco = "http://www.asolucoesweb.com.br/phpoo";
echo substr_count($endereco, '/');
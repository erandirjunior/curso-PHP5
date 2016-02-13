<meta charset="UTF-8" />
<?php

//SPRINTF()
$nome   = "Junior";
$idade  = 19; 
if($nome == "Junior"){
    echo sprintf("O nome é %s, e a idade é %s", $nome, $idade);
}else{
    echo sprintf("O nome não é %s, e a idade é %s", $nome, $idade);
}

echo "<br /><br />";

//STR_REPLACE - substitui determinada parte da string, por outra
$texto = "Meu time é o Fortaleza e tenho 19 anos";
echo str_replace("Fortaleza", "Milan", $texto).'<br />';
$subs = array("Fortaleza", "19");
$sub = array("PSG","20");
echo str_replace($subs, $sub, $texto);

echo "<br />";

function substituir($a , $s, $texto){
    return str_replace($a , $s , $texto);
}

echo substituir(52, 55, "Eu peso 52 kg");

echo "<br /><br />";

//STR_REPEAT - repete
$repetir = "#";
echo str_repeat($repetir, 20);

echo "<br /><br />";

//STRPOS - encontra a primeira ocorrência de alguma coisa
$texto = "Meu time é o Fortaleza";
echo strpos($texto, "t");

echo "<br /><br />";

//STRRPOS - STRPOS - encontra a última ocorrência de alguma coisa
$texto = "Meu time é o Fortaleza";
echo strrpos($texto, "o");

echo "<br /><br />";

//STRLEN - exibe o tamanho da string
$texto = "Meu time é o Fortaleza";
echo strlen($texto);

echo "<br /><br />";

//STRSPLIT - divide a variavel em um array
$texto = "Meu time é o Fortaleza";
echo str_split($texto);
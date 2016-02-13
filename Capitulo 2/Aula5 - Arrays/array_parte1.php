<meta charset="UTF-8"/>
<?php

$nomes = array("1"=>"Erandir","2"=>"Junior","3"=>"Jessica");
$nomes["4"] = "João";

//CONTA QUANTOS ELEMENTOS EXISTEM NO ARRAY
$contagemNomes = count($nomes);
echo $contagemNomes;

echo '<br/>';

//LISTA OS DADOS DO ARRAY
for ($i = 1; $i <= $contagemNomes; $i++) {
    echo $nomes[$i]."<br/>";
}

//LISTA OS DADOS DO ARRAY
//print_r($nomes);

echo '<br/>';

//LISTA OS DADOS DO ARRAY
foreach($nomes as $n):
    echo $n."<br />";
endforeach;

echo '<br/>';
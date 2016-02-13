<meta charset="UTF-8"/>
<?php
/*
 * array_keys();
 * array_keys_exists();
 * 
 */

$nomes = array("1"=>"Erandir","2"=>"Junior","3"=>"Jessica");
$nomes["4"] = "João";

//PEGA OS INDICES DO ARRAY
$chaves = array_keys($nomes);

$indice = "3";

//PESQUISA NO ARRAY POR DETERMINADO INDICE
if(array_key_exists($indice, $nomes)):
    echo "Existe o $indice no array nomes";
else:
    echo "Não existe o $indice no array nomes";
endif;

//foreach ($chaves as $chave) {
    //echo $chave."<br/>";
//}

/*foreach($nomes as $k=>$v):
    echo $k.' => '.$v."<br />";
endforeach;*/
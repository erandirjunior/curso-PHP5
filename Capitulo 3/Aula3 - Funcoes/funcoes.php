<meta charset="UTF-8" />
<?php

/* 
 * Funcoes
 * 
 * sintaxe:
 * function nomeDaFuncao(){
 * }
 */

/*
function exibeNome($nomes = array()){
    if(is_array($nomes)):
        $c = new ArrayIterator($nomes);
        while($c->valid()):
            echo $c->current()."<br />";
            $c->next();
        endwhile;
    else:
        echo "Parâmetro passado não é um array";
    endif;
}

exibeNome($nomes = array("Junior" , "Jessica", "Angela", "Eleni", "Thelma"));
exibeNome("Junior");
 */
function cadastrar($tabela) {
    return "Cadastrado com sucesso na tabela $tabela";
}

echo cadastrar("Clientes");

//INDUÇÃO DE TIPO - FORÇA O PARAMETRO SER UM ARRAY, SÓ FUNCIONA COM ARRAY
/*
function exibeNome(Array $nomes){
    print_r($nomes);
}

exibeNome($nomes = array("Junior" , "Jessica", "Angela", "Eleni", "Thelma"));
*/
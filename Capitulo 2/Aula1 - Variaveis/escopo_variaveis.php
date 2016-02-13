<?php

//ESCOPO - Especificação do limite, dentro do qual os recursos de
//sistema podem ser utilizados. - fonte:wikipedia

/*
 * locais - criadas dentro das funções
 * globais - criadas fora das funções  
 */

//VARIAVEL GLOBAL
//$nome = "Junior";

function exibeNome($nome) {
    //FAZ COM QUE A VARIAVEL GLOBAL FIQUE VISIVEL DENTRO OU FORA DA FUNÇÃO
    //global $nome;

    global $mensagem;
    if ($nome == "Junior") {
        //VARIAVEL LOCAL
        $mensagem = "Meu nome e Junior";
    } else {
        $mensagem = "Meu nome nao e Junior";
    }
}

exibeNome("Junior");
echo $mensagem;

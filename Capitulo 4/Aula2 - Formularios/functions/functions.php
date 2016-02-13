<?php

function  cadastraDados($dados){
    if(is_array($dados)):
        return ($dados);
    else:
        return "O parametro passado não foi um array";
    endif;
}
function verificaTipoDado($dado){
    if(is_int($dado)):
        echo "O valor passado é um número";
    else:
        echo "O valor passado não é um número inteiro";
    endif;
}
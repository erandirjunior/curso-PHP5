<?php

function cadastraDados($dados) {
    if (is_array($dados)):
        return ($dados);
    else:
        return "O parametro passado não foi um array";
    endif;
}

function verificaTipoDado($dado) {
    if (is_int($dado)):
        echo "O valor passado é um número";
    else:
        echo "O valor passado não é um número inteiro";
    endif;
}

function validarEmail($email) {
    global $erro;
    global $mensagem;
    $em = filter_var($email, FILTER_SANITIZE_EMAIL);

    if (filter_var($em, FILTER_VALIDATE_EMAIL)):
        $mensagem =  sprintf("O email %s é valido", $em);
    else:
        $erro =  sprintf("O email %s não é valido", $em);
    endif;
}

function validarDados($dado, $tipoValidacao){
    switch ($tipoValidacao):
        case 'int':
            return filter_input(INPUT_POST,$dado, FILTER_VALIDATE_INT);
            break;
        case 'float':
            return filter_vinput(INPUT_POST,$dado, FILTER_VALIDATE_FLOAT);
            break;        
    endswitch;
}
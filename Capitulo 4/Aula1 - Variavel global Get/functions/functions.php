<?php

function carregaIncludes($includes) {
    if (is_array($includes)):
        $caminho = implode(PATH_SEPARATOR, $includes);
        return set_include_path($caminho);
    else:
        throw new Exception("O arquivo passado não foi um array");
    endif;
}

function carregaArquivo($nome , $includes){
    if(is_string($nome)):
        foreach ($includes as $inc):
           if(file_exists($inc.$nome.'.php')):
                require $inc.$nome.'.php';
            endif;
        endforeach;        
    else:
        echo "O parametro passado não é uma string";
    endif;
}


function mudaUrl($url){
    
    if(isset($_GET[$url])):
        include $_GET[$url].".php";
    else:
        include "home.php";
    endif;
}

function deletaUsuario($id){
    if(isset($id)):
        if(is_int((int)$id)):
            echo "Deletou o cliente com o id $id";
        else:
            echo "O valor passado não é um número inteiro";
        endif;
    endif;
}
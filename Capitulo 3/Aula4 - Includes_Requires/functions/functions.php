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

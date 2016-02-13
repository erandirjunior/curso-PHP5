<?php
/* 
 * fopen
 * feof
 * fgets
 * fputs == fwrite
 * filesize
 * file
 * scandir
 * rename
 * file_gets_contents
 * opendir
 * is_dir
 * readdir
 */
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

    /*ATRIBUI PARA A VARIAVEL ARQUIVO O NOME DO ARQUIVO*/
    $arquivo = 'arquivo2.txt';

    /*VERIFICA SE O ARQUIVO EXISTE
    if(file_exists($arquivo)):
        echo "Arquivo existe";
    else:
        CRIA O ARQUIVO E DEPOIS ABRE
        fopen($arquivo, "a+");
    endif;
    */

    
    /*VERIFICA SE É UM ARQUIVO*/
    if(is_file($arquivo)):
        $texto   = "Meu nome é Erandir Junior";
        $tamanho = strlen($texto);

        $abrirArquivo = fopen($arquivo, "w");

        //INSERE NO ARQUIVO O TEXTO DESEJADO
                //ARQUIVO ABERTO, TEXTO QUE QUER SER INSERIDO, QUANTIDADE DE CARACTERES A SER INSERIDO
        echo fputs($abrirArquivo, $texto, $tamanho);
    else:
        echo "Não é um arquivo";
    endif; 
    
    ?>
</body>
</html>
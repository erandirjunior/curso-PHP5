<?php
/* 
 * fopen
 * feof
 * fgets
 * fputs
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
    $arquivo = 'arquivo.txt';
    /*PEGA O TAMANHO DO ARQUIVO*/
    $tamanho = filesize($arquivo);

                       /*ABRE O ARQUIVO*/
    if($arquivoAberto = fopen($arquivo, 'r')){
             
             /* LISTA OS DADOS DO ARQUIVO ENQUANTO NÃO CHEGAR AO FIM             
             File End Of File -> feof*/  
        while(!feof($arquivoAberto)):
                       /*PEGA OS DADOS DO ARQUIVO*/
            echo nl2br(fgets($arquivoAberto,$tamanho));
        endwhile;

        /*FECHA O ARQUIVO ABERTO*/
        fclose($arquivoAberto);
    }else{
        echo "Não abriu o arquivo";
    }
    ?>
</body>
</html>
<?php
/*
 *file
 *scandir
 *opendir
 *is_dir
 *mkdir
 *rmdir
 *readdir
 */
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
        
        //$arquivo = scandir("arquivos");

        $diretorio = "arquivos_2";

        /*EXCLUI O DIRETORIO*/
        rmdir($diretorio);

        /*SE EXISTIR O DIRETORIO*/
        if(is_dir($diretorio)):
                            /*ABRE O DIRETORIO*/
            $abrirDiretorio = opendir($diretorio);
                                        /*LISTA OS ARQUIVOS DO DIRETORIO*/
            while(false != ($lerDiretorio = readdir($abrirDiretorio))): 
                if($lerDiretorio != '.' && $lerDiretorio != '..'):
                    echo $lerDiretorio."<br />";
                endif;
            endwhile;
        else:
                /*CRIA O DIRETORIO*/
                //mkdir($diretorio);
       endif;

        /*$l = new ArrayIterator($arquivos);
        while ($l->valid()) {
            if($l->current() != '.' && $l->current() != '..'):
                echo $l->current()."<br />";
            endif;
            $l->next();

        }

        $dados = file('log.txt');
        $l = new ArrayIterator($dados);
        while ($l->valid()) {
            echo $l->current()."<br />";
            $l->next();
        }*/
        ?>
    </div>
</body>
</html>
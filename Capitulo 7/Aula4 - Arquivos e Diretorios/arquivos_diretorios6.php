<?php
require_once 'function/functions.php';

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
        $diretorio = "arquivos";
        $d = new DirectoryIterator($diretorio);

        while ($d->valid()) {
                  //VERIFICA SE É UM ARQUIVO
            if($d->isFile()):
                /*PEGA O NOME DO ARQUIVO*/
                echo "Nome do arquivo com getFilename() - ".$d->getFilename()."<br />";
                echo "Nome do arquivo com current() - ".$d->current()."<br />";
                echo "Nome do arquivo com getBasename() - ".$d->getBasename()."<br />";

                /*PEGA O CAMINHO DO ARQUIVO*/
                echo "Caminho do arquivo com getPath - ".$d->getPath()."<br />";
                echo "Caminho completo do arquivo com getPathname() - ".$d->getPathname()."<br />";

                /*PEGAR EXTENSAO DO ARQUIVO*/
                echo "Extensao do arquivo com getExtension() - ".$d->getExtension()."<br />";

                /*PEGA A ULTIMA MODIFICAÇÃO NO ARQUIVO*/
                echo "Ultima modificação do arquivo com getMTime() - ".date("d/m/Y H:i:s", $d->getMTime())."<br />";

                /*RETORNA O TAMANHO DO ARQUIVO*/
                echo "Tamanho do arquivo com getSize() - ".$d->getSize()."<br />";

                /*RETORNA O INDICE DO ARQUIVO*/
                echo "Indice do arquivo com key() - ".$d->key()."<br /><br />";
            endif;
            $d->next();
        }

        ?>
    </div>
</body>
</html>
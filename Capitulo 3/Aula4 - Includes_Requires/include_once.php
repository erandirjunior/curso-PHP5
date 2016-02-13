<?php
include "functions/functions.php";
$includes = array("inc/", "includes/", "arquivos/", "footer");
try {
    carregaIncludes($includes);
} catch (Exception $e) {
    echo "Erro " . $e->getMessage();
    exit();
}
/*
 * $path = array("inc/","includes/","arquivos/");
 * $caminho = implode(PATH_SEPARATOR, $path);
 * set_include_path($caminho);
 */


//FAZ UM INCLUDE DE UMA OU VARIAS PASTAS
//set_include_path("inc/".PATH_SEPARATOR."includes/".PATH_SEPARATOR."arquivos/");
//FAZ UM INCLUDE DE UMA OU VARIAS PASTAS
//ini_set('include_path', 'inc/');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Includes</title>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <div id="container">
            <div id="header">
                <?php 
                    //carregaArquivo('header', $includes); 
                    include 'header.php';
                    include_once 'header.php';
                ?>
            </div>

            <div id="conteudo">
                <?php carregaArquivo('home', $includes); ?>
            </div>

            <div id="sidebar">
                <?php carregaArquivo('sidebar', $includes); ?>
            </div>

            <div id="footer">
                <?php carregaArquivo('footer', $includes); ?>
            </div>
        </div>
    </body>
</html>
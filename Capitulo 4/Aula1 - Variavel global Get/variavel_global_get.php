<?php
include "functions/functions.php";
$includes = array("inc/", "includes/", "arquivos/", "footer");
try {
    carregaIncludes($includes);
} catch (Exception $e) {
    echo "Erro " . $e->getMessage();
    exit();
}

/*PEGAR DADOS PELA URL*/
if(isset($_GET['ac'])):
    
    if($_GET['ac'] == 'ver'):
        echo "vai exibir os dados<br />";
    
        function pegaDados(){
            echo $_GET['nome'].'<br />';
            echo $_GET['idade'];
        }
        pegaDados();
    else:
        
        echo "Não vai exibir os dados";
    
    endif;
    
endif;
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
                <?php carregaArquivo('header', $includes); ?>
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


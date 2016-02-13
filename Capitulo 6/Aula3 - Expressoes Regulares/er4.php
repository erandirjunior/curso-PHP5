<!DOCTYPE html>
<html>
    <head>
        <title>Emails recebidos</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="css/style2.css" />
    </head>
    <body>
        <div id="container">
               <?php
               $arquivo = file_get_contents("er5.php");
               //$dados = preg_replace("/http:\/\/www.asolucoesweb.com.br\/([a-zA-Z0-9]+)/", "[$1]", $arquivo);
               //$dados = preg_replace("/\.([a-zA-z]+)/", "[$1]", $arquivo);
               $dados = preg_replace("/<\?(php)/", "[$1]", $arquivo); 
               echo $dados;
               ?>
            </div>
    </body>
</html>
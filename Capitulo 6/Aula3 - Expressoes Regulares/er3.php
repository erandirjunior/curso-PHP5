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
               $arquivo = file_get_contents("texto2.txt");
               
               $dados = preg_split("/,\s/", $arquivo);
               
               //echo $dados[0].' '.$dados[1];
               $texto = count($dados);
               for($i = 0; $i < $texto; $i++):
                   echo $dados[$i].' ';
               endfor;
               ?>
            </div>
    </body>
</html>
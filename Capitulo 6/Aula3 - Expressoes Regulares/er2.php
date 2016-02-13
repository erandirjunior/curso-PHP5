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
               $arquivo = file_get_contents("texto.txt");
               //http://www\.[a-zA-Z0-9]+\.[a-zA-Z0-9\/-_.]+
               
               if(preg_match_all("/http:\/\/www\.[a-zA-Z0-9]+\.[a-zA-Z0-9\/-_.]+/", $arquivo, $matches)):
                   echo "Urls encontradas no texto";
               echo "<br/>";
               $urls = count($matches[0]);
               for($i = 0; $i < $urls; $i++):
                   echo $matches[0][$i].'<br />';
               endfor;
               else: 
                   echo "Urls não encontradas no texto";
               endif;
               ?>
            </div>
    </body>
</html>
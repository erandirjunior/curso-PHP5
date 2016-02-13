<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP com HTML</title>
    </head>
    <body>
        <table>
            <tr>
                <td>Nome:</td>
            </tr>
            
            <?php
                $nomes = array("Junior", "Maria","Pedro");
                foreach ($nomes as $nome):     
                    echo '<tr><td>'.$nome .'</td></tr>';
                endforeach;
            ?>
        </table>
    </body>
</html>
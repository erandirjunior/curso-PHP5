<?php
if (isset($_POST['enviar'])):
    $nome = $_POST['nome'];
endif;
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP com HTML</title>
        <style type="text/css">
            td {border-style: solid ; border-width: 1px; }
        </style>
    </head>
    <body>
        <table>
            <form action="" method="post">
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" name="nome"/></td>
                </tr>

                <tr>
                    <td colspan="2"><input type="submit" name="enviar" value="ok"/></td>
                </tr>
                
                <tr>
                    <?php if (isset($nome)): echo $nome; else: echo ""; endif ?>
                </tr>
            </form>
        </table>
    </body>
</html>
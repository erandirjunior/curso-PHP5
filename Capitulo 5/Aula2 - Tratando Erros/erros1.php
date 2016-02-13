<?php
include_once './functions/conexao.php';
include_once './functions/functions.php';

error_reporting(E_ALL);

if (isset($_POST['ok'])):
    $nome = "Junior";
    try {
        if ($_POST['nome'] == $nome):
            echo "Nome verificado com sucesso";
        else:
            throw new Exception("Nome não foi verificado com sucesso");
        endif;
    } catch (Exception $e) {
        echo "Erro: " . $e->getMessage();
        //exit();
    }
endif;
?>

<html>

    <head>
        <title>Erros 1</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="css/style.css" />
    </head>

    <body>
        <div id="container">
            <table cellspacing="0" >
                <form action="" method="POST">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Verificar</th>
                        </tr>        
                    </thead>
                    <tr>
                        <td>
                            <input type="text" name="nome" />
                        </td>
                        <td>
                            <input type="submit" name="ok" value="verificar" />
                        </td>
                    </tr>
                </form>
            </table>
        </div>
    </body>
</html>
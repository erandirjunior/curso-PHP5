<?php
include_once './functions/conexao.php';
include_once './functions/functions.php';

error_reporting(E_ALL);

if (isset($_POST['ok'])):
    $nome = 'Meu nome é Erandir';
    $sobreNome = "Junior";
    
    
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
                            <th>Email</th>
                            <th>Verificar</th>
                        </tr>        
                    </thead>
                    <tr>
                        <td>
                            <input type="text" name="email" />
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
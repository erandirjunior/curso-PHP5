<?php
session_start();
include_once 'functions/conexao.php';
include_once 'functions/functions.php';

conectarSemPdo();

if (isset($_POST['ok'])):
    try {
        $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_SPECIAL_CHARS);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
        logarCliente($login, $senha);
    } catch (Exception $e) {
        $erro = $e->getMessage();
    }
    
    //$login = addslashes($_POST['login']);
    //$senha = addslashes($_POST['senha']);
    
    //logarSemPDO($login, $senha);
endif;
?>
<html>

    <head>
        <title>Sessoes 2</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="css/style.css" />
    </head>

    <body>
        <table cellspacing="0" border="0" width="800">

            <thead>
                <tr>
                    <th>Login</th>
                    <th>Senha</th>
                    <th>Logar</th>
                </tr>
            </thead>

            <form action="" method="POST">
                <tr>
                    <th>
                        <input type="text" name="login"/>
                    </th>
                    <th>
                        <input type="text" name="senha"/>
                    </th>
                    <th>
                        <input type="submit" name="ok" value="logar"/>
                    </th>
                </tr>
            </form>
            <tr >
                <td colspan="3">
                    <?php echo isset($erro) ? $erro : ''; ?>
                </td>
            </tr>
        </table>
    </body>
</html>

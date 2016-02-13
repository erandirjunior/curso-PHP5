<?php
session_start();
include_once 'functions/conexao.php';
include_once 'functions/functions.php';

if (isset($_POST['ok'])):
    try {
        $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_MAGIC_QUOTES);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_MAGIC_QUOTES);
        
        if(isset($_POST['autorizar'])):
            setcookie('usuario',$login, time()+7*24*60*60);
            setcookie('senha',$senha, time()+7*24*60*60);
            
        endif;
        
        logarCliente($login, $senha);
    } catch (Exception $e) {
        $erro = $e->getMessage();
    }
endif;
?>
<html>

    <head>
        <title>Sessoes 4</title>
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
                        <input type="text" name="login" value="<?php echo isset($_COOKIE['usuario']) ? $_COOKIE['usuario'] : '' ?>"/>
                    </th>
                    <th>
                        <input type="text" name="senha" value="<?php echo isset($_COOKIE['senha']) ? $_COOKIE['senha'] : '' ?>"/>
                        Lembrar senha:
			<input type="checkbox" name="autorizar"/>
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

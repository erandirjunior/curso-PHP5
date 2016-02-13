<?php
include_once 'functions/conexao.php';
include_once 'functions/functions.php';

if (isset($_POST['ok'])):
    $login = validar($_POST['login'], 'LOGIN', 'STR');
    $senha = validar($_POST['senha'], 'SENHA', 'INT');
    
    if(!isset($erro)):
        if(logar($login, $senha)):
           $sucesso = "Logado com sucesso";
        else:
            echo "Erro ao logar no sistema";
        endif;    
    endif;
endif;
?>
<html>

    <head>
        <title>Banco parte 5</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="css/style.css" />
    </head>

    <body>
        <?php
        $dados = listarComPdo();
        $d = new ArrayIterator($dados);
        ?>

        <table cellspacing="0" border="0" width="800">

            <thead>
                <tr>
                    <th>Login</th>
                    <th>Senha</th>
                    <th>Cadastrar</th>
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
                    <?php echo isset($sucesso) ? $sucesso : ''; ?>
                </td>
            </tr>
        </table>
    </body>
</html>
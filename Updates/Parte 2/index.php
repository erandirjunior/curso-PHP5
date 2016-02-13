<?php
require 'config/config.php';

if (isset($_POST['logar'])):
    
    $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    $mensagem = '';

    //$usuario_encontrado = Login::find_by_login_usuario_and_login_senha($login, $senha);
    $usuario_encontrado = Login::find('all', array('conditions' => array('login_usuario=? AND login_senha=?', $login, $senha)));


    if(!empty($usuario_encontrado)):
        //$_SESSION['usuario_nome'] = $usuario_encontrado->login_nome;
        $_SESSION['usuario_nome'] = $usuario_encontrado[0]->login_nome;
    else:
        $mensagem = "Usuario ou senha incorretos";
        $alert = 'error';
    endif;

                    /*CRIPTOGRAFANDO A SENHA*/
    //$senha_hash = hash('SHA256', $senha);
    //echo substr(md5(uniqid($senha_hash)), 0, 15);

endif;
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Login com phpactiverecord</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div id="container">

            <h3 class="alert alert-info">Login com phpactiverecord</h3>

            <form action="" method="post" enctype="multipart/form-data">

                <label for="">Login</label>
                <input type="text" name="login" />

                <label for="">Senha</label>
                <input type="text" name="senha" />

                <label for=""></label>
                <input type="submit" name="logar" value="OK" class="btn btn-primary" />
            </form>
            <hr >  
            <?php 
            if(isset($mensagem) && isset($alert)):
                echo '<div class="alert alert-'.$alert.'">'.$mensagem.'</div>';
            endif;
            ?>
        </div>
    </body>
</html>	
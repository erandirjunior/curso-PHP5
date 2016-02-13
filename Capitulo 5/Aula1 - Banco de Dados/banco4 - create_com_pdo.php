<?php
include_once 'functions/conexao.php';
include_once 'functions/functions.php';

if (isset($_POST['cadastrar'])) :

    conectarComPdo();

    $categoria = $_POST['categoria'];
    $senha = $_POST['senha'];
    $filme = $_POST['filme'];
    $preco = $_POST['preco'];
    $usuario = $_POST['usuario'];
    $foto = $_POST['foto'];

    /* if (cadastrandoComPdo($categoria,$senha, $filme, $preco, $usuario, $foto)):
      echo "Usuário cadastrado com sucesso !";
      else:
      echo "Erro ao cadastrar usuario !";
      endif; */

    if (cadastrandoComPdo2($dados = array('categoria' => $categoria, 'senha' => $senha, 'filme' => $filme, 'preco' => $preco, 'usuario' => $usuario, 'foto' => $foto))):
        echo "Usuário cadastrado com sucesso !";
    else:
        echo "Erro ao cadastrar usuario !";
    endif;




endif;
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Banco de dados</title>
        <link rel="stylesheet" href="css/style.css" />
    </head>

    <body>
        <div id="container">

            <form action="" method="post">

                <label for="nome">Categoria:</label>
                <input type="text" name="categoria" />

                <label for="nome">Senha:</label>
                <input type="text" name="senha" />

                <label for="sobrenome">Filme:</label>
                <input type="text" name="filme" />

                <label for="email">Preco:</label>
                <input type="text" name="preco" />

                <label for="telefone">Usuario:</label>
                <input type="text" name="usuario" />

                <label for="celular">Foto:</label>
                <input type="text" name="foto" />

                <label for="submit"></label>
                <input type="submit" name="cadastrar" value="vai" />
            </form>

        </div>
    </body>

</html>
<?php
require_once 'functions/functions.php';
require_once 'functions/conexao.php';

if (isset($_POST['ok'])):
    $nome  = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_MAGIC_QUOTES);
    $preco = filter_input(INPUT_POST, 'preco', FILTER_VALIDATE_FLOAT);

    if ($preco):

        /* PASTA */
        $pasta = 'imagem/';

        /* MEDIDAS OBRIGATÓRIAS */
        $largura_foto = 640;
        $altura_foto  = 480;

        /* EXTENSÕES PERMITIDAS */
        $fotosPermitidas = array('jpg', 'png', 'jpeg');

        /* MEDIADS DA FOTO */
        $dadosFoto = getimagesize($_FILES['upload']['tmp_name']);
        list($largura, $altura) = $dadosFoto;

        /* PEGAR EXTENSÃO DA FOTO */
        $exp = explode('.', $_FILES['upload']['name']);
        $extensao = end($exp);

        if (in_array($extensao, $fotosPermitidas)):

            /* COMPARAR MEDIDAS DA FOTO COM AS MEDIDAS PERMITIDAS */
            if ($largura != $largura_foto):
                $erro = "A largura não pode ser diferente de $largura_foto";
            elseif ($altura != $altura_foto):
                $erro = "A altura não pode ser diferente de $altura_foto";
            else:

                $novoNome = uniqid() . '.' . $extensao;

                if (move_uploaded_file($_FILES['upload']['tmp_name'], $pasta . $novoNome)):
                    /* CADASTRA NO BANCO */
                    $dados = array($nome, $preco, $novoNome);

                    if (cadastrarLivro($dados)):
                        $mensagem = "Livro cadastrado";
                    endif;
                else:
                    $erro = "erro ao fazer upload";
                endif;
            endif;
        else:
            $erro = "Extensão não permitida";
        endif;
    else:
        $erro = "O valor passado não é um preco valido";
    endif;
endif;
?>
<html>
    <head>
        <title>Aula 3 - Upload de arquivos</title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" />

            <label for="preco">Preco:</label>
            <input type="text" name="preco" />

            <label for="upload">Upload:</label>
            <input type="file" name="upload" />

            <label for=""></label>
            <input type="submit" name="ok" value="enviar"/>
        </form>

        <p><?php echo isset($erro) ? $erro : ''; ?></p>
        <p><?php echo isset($mensagem) ? $mensagem : ''; ?></p>
    </body>
</html>
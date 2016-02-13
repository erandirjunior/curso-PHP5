<?php
require_once 'lib/WideImage.php';
require_once 'functions/functions.php';
require_once 'functions/conexao.php';

if (isset($_POST['ok'])):
    /* DADOS DA FOTO */
    $foto       = $_FILES['upload']['name'];
    $temporario = $_FILES['upload']['tmp_name'];
    $pasta      = "redimensionadas/";

    /* VALIDACOES */
    $livro = validar($_POST['livro'], 'livro', 'STR');
    $preco = validar($_POST['preco'], 'preco', 'STR');

    if (!isset($erroValidar)):


        /* RENOMEAR A FOTO */
        $ext      = explode('.', $foto);
        $extensao = end($ext);
        $novoNome = uniqid() . '.' . $extensao;

        if (verificaExtensao($extensao)):
            /* FAZ O UPLOAD E CADASTRA NO BANCO */
            $imagem        = WideImage::load($temporario);
            $redimensionar = $imagem->resize(300, 200, 'outside');
            $redimensionar->saveToFile($pasta . $novoNome);

            $dados = array($livro, $preco, $pasta . $novoNome);
            if (cadastrarLivro($dados)):
                $mensagem = "cadastrado";
            else:
                unlink($pasta . $novoNome);
                $erro = "erro ao cadastrar";
            endif;
            $redimensionar->destroy();
        else:
            $erro = "extensão não permitida";
        endif;
    else:
        $erro = $erroValidar;
    endif;
endif;
?>

<html>
    <head>
        <title></title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="livro">Livro:</label>
            <input type="text" name="livro"/>

            <label for="preco">Preco:</label>
            <input type="text" name="preco"/>

            <label for="upload">Upload:</label>
            <input type="file" name="upload"/>

            <input type="submit" name="ok" value="enviar"/>
        </form>
        <p><?php echo isset($erro) ? $erro : ''; ?></p>
        <p><?php echo isset($mensagem) ? $mensagem : ''; ?></p>
    </body>
</html>
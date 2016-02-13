<?php
require_once 'functions/functions.php';

if (isset($_POST['ok'])):
    $foto       = $_FILES['upload']['name'];
    $temporario = $_FILES['upload']['tmp_name'];
    $pasta      = "redimensionadas/";

    if (redimensionar($temporario, 300, $pasta, $foto)):
        $mensagem = "fez o upload";
    else:
        if(isset($erroExtensao)):
            $erro = $erroExtensao;
        else:
            $erro = "não fez o upload";
        endif;
        
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
            <label for="upload">Upload:</label>
            <input type="file" name="upload"/>
            <input type="submit" name="ok" value="enviar"/>
        </form>
        <p><?php echo isset($erro) ? $erro : ''; ?></p>
        <p><?php echo isset($mensagem) ? $mensagem : ''; ?></p>
    </body>
</html>
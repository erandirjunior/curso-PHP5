<?php

if(isset($_POST['ok'])):
    $arquivosPermitidos = array('docx', 'xlsx', 'pdf');
    $fotosPermitidas = array('jpg', 'png', 'jpeg');
    $exp = explode('.', $_FILES['upload']['name']);
    $extensao = end($exp);
    
    if(in_array($extensao, $arquivosPermitidos)):
        $pasta = "arquivos/";
    elseif(in_array($extensao, $fotosPermitidas)):
        $pasta = "fotos/";
    else:
        $erro = "tipo de arquivo não aceito";
    endif;
    
    if(!isset($erro)):
        $temporario = $_FILES['upload']['tmp_name'];
        $novoNome = uniqid().".$extensao";
        
        if(move_uploaded_file($temporario, $pasta.$novoNome)):
            $mensagem = "Upload feito";
        else:
            $erro = "Erro ao fazer upload do arquivo";
        endif;
    endif;    
endif;
?>
<html>
    <head>
        <title>Aula 3 - Upload de arquivos</title>
    </head>
    <body>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="upload">Upload:</label>
            <input type="file" name="upload" />
            
            <input type="submit" name="ok" value="enviar"/>
        </form>
        
        <p><?php echo isset($erro) ? $erro : ''; ?></p>
        <p><?php echo isset($mensagem) ? $mensagem : ''; ?></p>
    </body>
</html>
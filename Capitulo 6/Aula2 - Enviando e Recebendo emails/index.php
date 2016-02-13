<?php
if (isset($_POST['ok'])):

    require_once 'PHPMailer/class.phpmailer.php';
    require_once 'PHPMailer/class.smtp.php';
    require_once 'functions/conexao.php';
    require_once 'functions/cadastrar.php';

    $anexo = $_FILES['anexo']['name'];
    $a = explode('.', $anexo);
    $extensao = end($a);
    $permitidos = array("docx", "xlsx");

    if (in_array($extensao, $permitidos)):

        if (move_uploaded_file($_FILES['anexo']['tmp_name'], "anexos/".$_FILES['anexo']['name'])):

            $mail = new PHPMailer();
            $mail->CharSet = "UTF-8";
            $mail->SMTPSecure = "ssl";
            $mail->IsSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 465;
            $mail->SMTPAuth = true;
            $mail->Username = "";//EMAIL
            $mail->Password = "";//SENHA
            $mail->IsHTML(true);
            $mail->SetFrom($_POST['email']);
            $mail->From = $_POST['email'];
            $mail->FromName = $_POST['nome'];
            $mail->AddAddress('aefs12junior@gmail.com');
            //$mail->AddAddress('aefs12junior@hotmail.com');
            $mail->Subject = $_POST['assunto'];
            $mail->Body = $_POST['mensagem'];
            $mail->addAttachment("anexos/".$anexo);

            if ($mail->Send()):
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $assunto = $_POST['assunto'];
                $mensagem = $_POST['mensagem'];
                $status = 1;

                if (cadastrarEmail($nome, $email, $assunto, $mensagem, $status, $anexo)):
                    $mensagem = "Email cadastrado com sucesso";
                //else:SÓ UTILIZAR PARA TESTAR, NÃO COLOCAR EM PROJETO
                //    $mensagem = "Email não cadastrado";
                endif;
           // else :SÓ UTILIZAR PARA TESTAR, NÃO COLOCAR EM PROJETO
            //    echo "Erro ao enviar email " . $mail->ErrorInfo;
            endif;
        else:
            $mensagem = "não foi possível fazer o upload do arquivo";
        endif;

    else:
        $mensagem = "Tipo de arquivo não aceito";
    endif;
endif;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Enviando Emails</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <div id="container">
            <form action="" method="POST" enctype="multipart/form-data">
                <label for="">Nome:</label>
                <input type="text" name="nome" />

                <label for="">Email:</label>
                <input type="text" name="email" />

                <label for="">Assunto:</label>
                <input type="text" name="assunto" />

                <label for="">Anexo:</label>
                <input type="file" name="anexo" />

                <label for="">Mensagem</label>
                <textarea name="mensagem" id="" cols="15" rows="5"></textarea>

                <label></label>
                <input type="submit" name="ok" value="enviar" />
            </form>
            <?php echo isset($mensagem) ? $mensagem : ''; ?>
        </div>
    </body>
</html>
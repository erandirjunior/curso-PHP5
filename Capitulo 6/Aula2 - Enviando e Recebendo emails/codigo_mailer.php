<?php

    $mail = new PHPMailer();
    $mail->CharSet = "UTF-8";
    $mail->SMTPSecure = "ssl";
    $mail->IsSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465;
    $mail->SMTPAuth = true;
    $mail->Username = "aefs12junior@gmail.com";
    $mail->Password = "";
    $mail->IsHTML(true);
    $mail->SetFrom('aefs12junior@gmail.com');
    $mail->From = "erandir12junior@hotmail.com";
    $mail->FromName = "Junior";
    $mail->AddAddress($_POST['email']);
    $mail->Subject = 'assunto';
    $mail->Body = 'mensagem';
    $mail->MsgHTML();

    if ($mail->Send()) :
        echo "Email enviado com sucesso";
    else :
        echo "Erro ao enviar email ".$mail->ErrorInfo;
    endif;
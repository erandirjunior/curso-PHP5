<?php
require_once 'functions/conexao.php';
require_once 'functions/listarEmail.php';
require_once 'PHPMailer/class.phpmailer.php';
require_once 'PHPMailer/class.smtp.php';
require_once 'functions/listar.php';


/*ENVIAR OUTRA RESPOSTA*/
if(isset($_GET['enviar'])):
    
    if($_GET['enviar'] == 'ok'):
        updateStatusEmail('emails',$_GET['id'] , 1);
    endif;
endif;
/*ENVIAR OUTRA RESPOSTA*/

/* RESPONDER O EMAIL */
if (isset($_POST['ok'])):
    $responder = nl2br( $_POST['responder']);
    
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
    $mail->SetFrom('aefs12junior@gmail.com');
    $mail->From = 'aefs12junior@gmail.com';
    $mail->FromName = 'Erandir Junior';
    $mail->AddAddress('aefs12junior@gmail.com');
//$mail->AddAddress('aefs12junior@hotmail.com');
    $mail->Subject = "Re:  " . $_POST['assunto'];
    $mail->Body = $responder;
//$mail->addAttachment("anexos/".$anexo);

    updateStatusEmail('emails', $_POST['id'], 2);
    if ($mail->Send()):
        $mensagem = 'E-mail respondido com sucesso';
    else:
        $mensagem = 'E-mail não respondido com sucesso';
    endif;
endif;
/* RESPONDER O EMAIL */

if (filter_var($_GET['id'], FILTER_VALIDATE_INT)):
    $dados = listarEmail('emails', $_GET['id']);
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <title>Mensagem</title>
            <meta charset="UTF-8" />
            <link rel="stylesheet" href="css/style2.css" />
        </head>
        <body>
            <div id="container">
                <div id="mensagem">
                    <form action="" method="POST">

                        <input type="hidden" name="id" value="<?php echo $dados->id; ?>" />

                        <label for="nome">Nome:</label>
                         <input type="text" name="nome" value="<?php echo $dados->nome ?>" class="input"/>

                        <label for="email">Email</label>
                        <input type="" name="email" value="<?php echo $dados->email ?>" class="input"/>

                        <label for="assunto">Assunto</label>
                        <input type="" name="assunto" value="<?php echo $dados->assunto ?>" class="input"/>
                        
                        <label for="">Anexo:</label>
                        <?php if(!empty($dados->anexo)): ?>
                        <a href="anexos/<?php echo $dados->anexo; ?>">Anexo</a>
                        <?php 
                        else:
                            echo "Sem anexo";
                        endif; 
                        ?>            
                        
                        <label for="mensagem">Mensagem</label>
                        <textarea name="mensagem"><?php echo $dados->mensagem ?></textarea>
                                   
                        <?php if($dados->status != 2): ?>
                        
                        <label for="responder">Responder</label>
                        <textarea name="responder"></textarea>
                        
                        <label for=""></label>
                        <input type="submit" name="ok" value="responder"/>
                        
                        <?php else: ?>
                        <p>E-mail já foi repsondido, deseja responder novamente <a href="mensagem.php?enviar=ok&id=<?php echo $dados->id; ?>">Enviar</a></p>
                        <?php endif; ?>       
                        
                    </form>
                    <?php echo isset($mensagem) ? $mensagem : ''; ?>
                    <br />
                    <a href="emails.php">Voltar</a>
                </div>
            </div>
        </body>
    </html>
    <?php
else:
    echo "Esse email não existe";
endif;
?>
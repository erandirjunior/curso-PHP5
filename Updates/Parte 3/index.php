<?php  
if(isset($_POST['submit'])):

    /*PEGAR AS VARIAVEIS PARA REALIZAR O SUBMIT*/
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    if (empty($nome)){
        $erro = "Campo nome é obrigatório";
    }elseif (empty($email)){
        $erro = "Campo email é obrigatório";
    }elseif (empty($telefone)) {
        $erro = "Campo telefone é obrigatório";
    }

    if (empty($erro)){
        echo "Enviar";
    }

endif;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
    <div id="container">
        <form action="" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" value="<?php echo isset($nome) ? $nome : ''; ?>">

            <label for="email">Email:</label>
            <input type="text" name="email" value="<?php echo isset($email) ? $email : ''; ?>">

            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" value="<?php echo isset($telefone) ? $telefone : ''; ?>">

            <label for="submit"></label>
            <input type="submit" name="submit">
        </form>
        <?php echo isset($erro) ? $erro : ''; ?>
    </div>
</body>
</html>
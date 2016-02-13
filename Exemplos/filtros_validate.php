<?php  
/*
 *FILTER SANITIZE - FAZ VALIDAÇÕES
 *FILTER_VALIDATE_EMAIL - VALIDA SE O VALOR PASSADO É UM EMAIL VALIDO
 *FILTER_VALIDATE_FLOAT - VALIDA SE O VALOR PASSADO É UM NUMERO FLUTUANTE(Aceita inteiros)
 *FILTER_VALIDATE_INT - VALIDA SE O VALOR PASSADO É UM NUMERO INTEIRO
 *FILTER_VALIDATE_URL - VALIDA SE O VALOR PASSADO É UMA URL (http://www.google.com.br ou http://google.com)
 */

if (isset($_POST['ok'])) {
    /*echo  "Campo Puro: ".$_POST['nome'];
    $nome = filter_input(INPUT_POST, 'nome', FILTER_VALIDATE_EMAIL);
    echo  "<br />Campo com a SANITIZE FULL SPECIAL CHARS: ".$nome;

    echo  "Campo Puro: ".$_POST['nome'];
    $nome = filter_input(INPUT_POST, 'nome', FILTER_VALIDATE_FLOAT);
    echo  "<br />Campo com a SANITIZE FLOAT: ".$nome;

    echo  "Campo Puro: ".$_POST['nome'];
    $nome = filter_input(INPUT_POST, 'nome', FILTER_VALIDATE_INT);
    echo  "<br />Campo com a SANITIZE INT: ".$nome;*/

    echo  "Campo Puro: ".$_POST['nome'];
    $nome = filter_input(INPUT_POST, 'nome', FILTER_VALIDATE_URL);
    echo  "<br />Campo com a SANITIZE SPECIAL CHARS: ".$nome;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style type="text/css">
    form{ text-align: center;}
    label{display: block; margin-top: 10px;}
    </style>
</head>
<body>
    <form action="" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome">

        <label for=""></label>
        <input type="submit" name="ok" value="enviar">
    </form>
</body>
</html>
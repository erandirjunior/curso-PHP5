<?php  
/*
 *FILTER SANITIZE - REMOVE OU ESCAPA
 *FILTER_SANITIZE_MAGIC_QUOTES - ADICIONA UM BARRA INVERTIDA ANTES DE ' E ", ESCAPANDO - AS
 *FILTER_SANITIZE_NUMBER_FLOAT - Remove all characters except digits, +- and optionally
 *FILTER_SANITIZE_NUMBER_INT - Remove all characters except digits, +- and optionally
 *FILTER_SANITIZE_SPECIAL_CHARS = ESCAPA <>& E ALGUNS CARACTERES
 *FILTER_SANITIZE_STRING - Remove os caracteres de linguagens
 *FILTER_SANITIZE_FULL_SPECIAL_CHARS
 */


if (isset($_POST['ok'])) {
    /*echo  "Campo Puro: ".$_POST['nome'];
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_MAGIC_QUOTES);
    echo  "<br />Campo com a SANITIZE MAGIC QUOTES: ".$nome;

    /*echo  "Campo Puro: ".$_POST['nome'];
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_NUMBER_FLOAT);
    echo  "<br />Campo com a SANITIZE FLOAT: ".$nome;

    echo  "Campo Puro: ".$_POST['nome'];
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_NUMBER_INT);
    echo  "<br />Campo com a SANITIZE INT: ".$nome;

    echo  "Campo Puro: ".$_POST['nome'];
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    echo  "<br />Campo com a SANITIZE SPECIAL CHARS: ".$nome;*/

    echo  "Campo Puro: ".$_POST['nome'];
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    echo  "<br />Campo com a SANITIZE FULL SPECIAL CHARS: ".$nome;
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
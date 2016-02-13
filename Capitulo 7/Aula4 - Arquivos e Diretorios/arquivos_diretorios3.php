<?php
session_start();

require_once 'function/conexao.php';
require_once 'function/functions.php';

if(isset($_POST['ok'])):
    if(logar($_POST['login'], $_POST['senha'])):
        logAcesso($_SERVER['REMOTE_ADDR'], date("d/m/Y H:i:s"), $_SESSION['nomeAdministrador']);
        header("Location:logado.php");
    endif; 
endif;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
     <form action="" method="POST>
         <label for="login">Login:</label>
         <input type="text" name="login">

         <label for="senha">Senha</label>
         <input type="text" name="senha">

         <label for=""></label>
         <input type="submit" name="ok" value="logar">
     </form>
</body>
</html>
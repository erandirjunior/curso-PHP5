<?php
session_start();

require_once('cookies_sessoes2_func.php');

if(isset($_POST['ok'])){
    
    $_SESSION['nome'] = $_POST['nome'];

    $sessionId   = session_id();
    $sessionNome = $_SESSION['nome'];
;
    if(ler($sessionId,$sessionNome)){
        echo "logado";
    }else{
        cadastrar($sessionId,$sessionNome);
    }

    /*$dados = ler($sessionId, $sessionNome);
    if (!empty($dados)) {
        $d = new ArrayIterator($dados)
        while ($d->valid()) {
            echo $d->current()
        }
    } else {
        echo "fudeo";
    }*/
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="nome">
        <input type="submit" name="ok" value="enviar">
    </form>
</body>
</html>
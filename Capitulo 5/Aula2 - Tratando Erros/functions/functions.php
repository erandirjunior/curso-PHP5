<?php
function verificaEmail($email) {
    $pdo = conectarComPdo();

    try {
        $verifica = $pdo->prepare('SELECT * FROM nomes WHERE email = :email');
        $verifica->bindValue(':email', $email);
        $verifica->execute();
        
        if($verifica->rowCount()):
            echo "Email verificado com sucesso";
        else:
            throw new Exception("Email não foi verificado com sucesso");
        endif;
    } catch (PDOException $e) {
        echo "Erro ".$e->getMessage();
    }
}

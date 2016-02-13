<?php

function cadastrarEmail($nome, $email, $assunto, $mensagem, $status, $anexo) {
    $pdo = conectarComPdo();
    try {
        $cadastrar = $pdo->prepare("INSERT INTO emails(nome, email, assunto, mensagem, status, anexo) VALUES (:nome, :email, :assunto, :mensagem, :status, :anexo)");
        $cadastrar->bindValue(":nome", $nome);
        $cadastrar->bindValue(":email", $email);
        $cadastrar->bindValue(":assunto", $assunto);
        $cadastrar->bindValue("mensagem", $mensagem);
        $cadastrar->bindValue(":status", $status);
        $cadastrar->bindValue(":anexo", $anexo);
        $cadastrar->execute();

        if ($cadastrar->rowCount() == 1):
            return TRUE;
        else:
            return FALSE;
        endif;
    } catch (PDOException $e) {
        echo "Erro " . $e->getMessage();
    }
}

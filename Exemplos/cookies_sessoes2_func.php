<?php
require_once 'cookies_sessoes2_conexao.php';

function cadastrar($sessao, $nome){
    $pdo = conectarComPdo();
    try {
        $cadastrar = $pdo->prepare("INSERT INTO ex_sessao (sessao, nome) VALUES (?,?)");
        $cadastrar->bindValue(1, $sessao);
        $cadastrar->bindValue(2, $nome);

        $cadastrar->execute();
        return $cadastrar->rowCount() ? true : false;
    } catch (PDOException $e) {
        echo "ERRO: ".$e->getMessage();
    }
}

function ler($sesionId, $sessionNome) {
    $pdo = conectarComPdo();
    try {
        $listar = $pdo->prepare('SELECT * FROM ex_sessao WHERE sessao = ? AND nome = ?');
        $listar->bindValue(1, $sesionId);
        $listar->bindValue(2, $sessionNome);

        $listar->execute();
        if ($listar->rowCount() > 0):
            return $listar->fetchAll(PDO::FETCH_OBJ);
        endif;
    } catch (PDOException $e) {
        echo "Erro " . $e->getMessage();
    }
}
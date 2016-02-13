<?php

function listar($tabela) {
    $pdo = conectarComPdo();
    try {
        $listar = $pdo->query("SELECT * FROM $tabela");

        if ($listar->rowCount() > 0):
            return $listar->fetchAll(PDO::FETCH_OBJ);
        endif;
    } catch (PDOException $e) {
        echo "ERRO: " . $e->getMessage();
    }
}

function updateStatusEmail($tabela, $id, $status) {
    $pdo = conectarComPdo();
    try {
        $update = $pdo->prepare("UPDATE $tabela SET status = ? WHERE id = ?");
        $update->bindValue(1, $status);
        $update->bindValue(2, $id);
        $update->execute();
        
    } catch (PDOException $e) {
        echo "ERRO: " . $e->getMessage();
    }   
}
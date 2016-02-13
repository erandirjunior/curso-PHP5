<?php

function listarPaginacao($tabela, $inicio , $fim){
    $pdo = conectarComPdo();
    
    $listar = $pdo->query("SELECT * FROM $tabela LIMIT $inicio, $fim");
    return $listar->fetchAll(PDO::FETCH_OBJ);
}

function qtdRegistros($tabela){
    $pdo = conectarComPdo();
    
    $listar = $pdo->query("SELECT * FROM $tabela ");
    return $listar->rowCount();
}

function listarDados($tabela){
    $pdo = conectarComPdo();
    try{
        $listar = $pdo->query("SELECT * FROM $tabela");
        if($listar->rowCount() > 0){
            return $listar->fetchAll(PDO::FETCH_OBJ);
        }
    } catch (PDOException $e) {
        echo 'Erro: '.$e->getMessage();
    }
}
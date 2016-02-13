<?php 
require 'conexao.php';

function cadastrar($dados_cadastrar_arquivo){
    $pdo = conectar();
    try {
        $cadastrar_arquivo = $pdo->prepare("INSERT INTO tb_arquivos(arquivo_nome, arquivo_caminho, arquivo_data) VALUES (?,?,?)");
        foreach ($dados_cadastrar_arquivo as $k => $v) {
            $cadastrar_arquivo->bindValue($k, $v);
        }
        $cadastrar_arquivo->execute();
        return ($cadastrar_arquivo->rowCount() == 1) ? true : false;
    } catch (PDOException $e) {
        echo "ERRO: ".$e->getMessage();
    }
}

function listar(){
    $pdo = conectar();
    try {
        $listar = $pdo->query("SELECT * FROM tb_arquivos");
        return ($listar->rowCount() > 0) ? $listar->fetchALL(PDO::FETCH_OBJ) : '';
    } catch (PDOException $e) {
        echo "ERRO: ".$e->getMessage();
    }
}

function pegar_pelo_id($id){
    $pdo = conectar();
    try {
        $listar_pelo_id = $pdo->prepare("SELECT * FROM tb_arquivos WHERE id = ?");
        $listar_pelo_id->bindValue(1, $id);
        $listar_pelo_id->execute();
        return ($listar_pelo_id->rowCount() > 0) ? $listar_pelo_id->fetch(PDO::FETCH_OBJ) : '';
    } catch (PDOException $e) {
        echo "ERRO: ".$e->getMessage();
    }
}
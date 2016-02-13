<?php

function logar($usuario, $senha) {

    $pdo = conectarComPdo();
    try {

        $login = $pdo->prepare("SELECT * FROM administrador WHERE nome = :usuario AND senha = :senha");
        $login->bindValue(":usuario", $usuario);
        $login->bindValue(":senha", $senha);
        $login->execute();

        if ($login->rowCount() == 1):
            $dadosAdministrador = $login->fetch(PDO::FETCH_OBJ);
            $_SESSION['nomeAdministrador'] = $dadosAdministrador->nome;
            return true;
        endif;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function logAcesso($ip, $data, $nome) {
    $log = "log.txt";
    $texto = "O administrador {$nome}, acessou o sistema na data {$data} com o IP {$ip}\n";
    $caracteres = strlen($texto);

    if (file_exists($log)):
        $abrirArquivo = fopen($log, "a+");
        fputs($abrirArquivo, $texto, $caracteres);
    else:
        $abrirArquivo = fopen($log, "a+");
        fputs($abrirArquivo, $texto, $caracteres);
    endif;
}

function listarDiretorio($diretorio){
        /*EXCLUI O DIRETORIO*/
        //rmdir($diretorio);

        /*SE EXISTIR O DIRETORIO*/
        if(is_dir($diretorio)):
                            /*ABRE O DIRETORIO*/
            $abrirDiretorio = opendir($diretorio);
            return $abrirDiretorio;
        else:
                /*CRIA O DIRETORIO*/
                mkdir($diretorio);
       endif;
}
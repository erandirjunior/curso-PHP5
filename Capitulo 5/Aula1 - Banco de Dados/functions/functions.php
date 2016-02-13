<?php

//OBSERVAÇÃO - PODE-SE USAR TANTO FETCH_ASSOC COMO O FETC_OBJ

/* * ************ LISTANDO SEM PDO ************* */

function listarSemPdo() {
    $sql = "SELECT * FROM filmes";
    $query = mysql_query($sql);
    $filmes = array();

    if (mysql_num_rows($query) > 0):
        while ($dados = mysql_fetch_object($query)):
            $filmes[] = $dados;
        endwhile;
        return $filmes;
    endif;
}

function pegarPeloIdSemPdo($id) {
    $sql = "SELECT * FROM filmes WHERE id = '$id'";
    $query = mysql_query($sql);
    $filmes = array();

    if (mysql_num_rows($query) > 0):
        return mysql_fetch_object($query);
    endif;
}

/* * ************ LISTANDO COM PDO ************* */

function listarComPdo() {
    $pdo = conectarComPdo();
    try {
        $listar = $pdo->query('SELECT * FROM filmes');
        //$listar->execute();

        if ($listar->rowCount() > 0):
            return $listar->fetchAll(PDO::FETCH_OBJ);
        endif;
    } catch (PDOException $e) {
        echo "Erro " . $e->getMessage();
    }
}

function pegarPeloIdComPdo($id) {
    $pdo = conectarComPdo();
    try {
        $listar = $pdo->prepare('SELECT * FROM filmes WHERE id = ?');
        //$listar->bindValue(":id", $id);
        $listar->bindParam(1, $id, PDO::PARAM_INT);
        $listar->execute();

        if ($listar->rowCount() > 0):
            return $listar->fetch(PDO::FETCH_OBJ);
        endif;
    } catch (PDOException $e) {
        echo "Erro " . $e->getMessage();
    }
}

/* * ************ CADASTRANDO SEM PDO ************* */

function cadastrandoSemPdo($categoria, $senha, $filme, $preco, $usuario, $foto = NULL) {
    $sql = "INSERT INTO filmes (categoria, senha, filme, preco, usuario, foto) VALUES ('$categoria', '$senha', '$filme', '$preco', '$usuario', '$foto')";
    $query = mysql_query($sql);

    if ($query):
        return true;
    else:
        return false;
    endif;
}

/* * ************ CADASTRANDO COM PDO ************* */

function cadastrandoComPdo($categoria, $senha, $filme, $preco, $usuario, $foto = NULL) {
    $pdo = conectarComPdo();

    $cadastrar = $pdo->prepare("INSERT INTO filmes (categoria, senha, filme, preco, usuario, foto) VALUES (?, ?, ?, ?, ?, ?)");
    $cadastrar->bindValue(1, $categoria, PDO::PARAM_STR);
    $cadastrar->bindValue(2, $senha, PDO::PARAM_STR);
    $cadastrar->bindValue(3, $filme, PDO::PARAM_STR);
    $cadastrar->bindValue(4, $preco, PDO::PARAM_STR);
    $cadastrar->bindValue(5, $usuario, PDO::PARAM_STR);
    $cadastrar->bindValue(6, $foto, PDO::PARAM_STR);
    $cadastrar->execute();

    if ($cadastrar->rowCount()):
        return true;
    else:
        return false;
    endif;
}

function cadastrandoComPdo2($dados = array()) {
    $pdo = conectarComPdo();

    if (is_array($dados)):
        try {

            $cadastrar = $pdo->prepare("INSERT INTO filmes (categoria, senha, filme, preco, usuario, foto) VALUES (:categoria, :senha, :filme, :preco, :usuario, :foto)");

            foreach ($dados as $k => $v):
                $cadastrar->bindValue(":$k", $v, PDO::PARAM_STR);
            endforeach;
            //$cadastrar->bindValue(2, $senha, PDO::PARAM_STR);
            //$cadastrar->bindValue(3, $filme, PDO::PARAM_STR);
            //$cadastrar->bindValue(4, $preco, PDO::PARAM_STR);
            //$cadastrar->bindValue(5, $usuario, PDO::PARAM_STR);
            //$cadastrar->bindValue(6, $foto, PDO::PARAM_STR);
            $cadastrar->execute();

            if ($cadastrar->rowCount()):
                return true;
            else:
                return false;
            endif;
        } catch (PDOException $e) {
            echo "Erro " . $e->getMessage();
        }
    else:
        echo "O parametro passado não foi um array";
    endif;
}

/* * ************ LISTANDO SEM PDO ************* */

function deletarSemPdo($id) {
    $sql = "DELETE FROM filmes WHERE id = '$id'";
    $query = mysql_query($sql);

    if ($query):
        return true;
    else:
        return false;
    endif;
}

/* * ************ LISTANDO COM PDO ************* */

function deletarComPdo($id) {
    try {
        $pdo = conectarComPdo();
        $deletar = $pdo->prepare("DELETE FROM filmes WHERE id = :id");
        $deletar->bindValue(":id", $id, PDO::PARAM_INT);
        $deletar->execute();

        if ($deletar->rowCount() == 1 ):
            return true;
        else:
            return false;
        endif;
    } catch (PDOException $e) {
        echo "Erro " . $e->getMessage();
    }
}

/* * ************ LISTANDO COM PDO ************* */
function updateSemPdo($filme, $preco, $id){
    $sql = "UPDATE filmes SET filme = '$filme', preco = '$preco' WHERE id = '$id'";
    $query = mysql_query($sql);
    
    if($query):
        return true;
    else:
        return false;
    endif;
}

/* * ************ LISTANDO COM PDO ************* */
function updateComPdo($filme, $preco, $id){
    try{
        $pdo = conectarComPdo();
        $update = $pdo->prepare('UPDATE filmes SET filme = :filme, preco = :preco WHEre id = :id');
        $update->bindValue(':filme', $filme);
        $update->bindValue(':preco', $preco);
        $update->bindValue(':id', $id);
        $update->execute();
        
        if($update->rowCount() == 1):
            return true;
        else:
            return false;
        endif;
    } catch (PDOException $e) {
        echo "Erro ".$e->getMessage();
    }
}

/* * ************ CADASTRANDO SEM PDO ************* */

function cadastrandoSemPdoPegandoId($filme, $preco) {
    global $id;
    $sql = "INSERT INTO filmes (filme , preco) VALUES ('$filme', '$preco')";
    $query = mysql_query($sql);

    if ($query):
    $id = mysql_insert_id();
    return $id;
    else:
        return false;
    endif;
}

/* * ************ CADASTRANDO SEM PDO 2 ************* */
function cadastrandoComPdoPegandoId($filme, $preco) {
    try{
        global $id;
        $pdo = conectarComPdo($filme, $preco);
        $cadastrar = $pdo->prepare("INSERT INTO filmes(filme, preco) VALUES (:filme, :preco)");
        $cadastrar->bindValue(":filme", $filme);
        $cadastrar->bindValue(":preco", $preco);
        $cadastrar->execute();

        if($cadastrar->rowCount() == 1):
            $id = $pdo->lastInsertId();
            return $id;
         else:
            return false;
        endif;

    }catch (PDOException $e){
        echo "Erro ".$e->getMessage();
    }
}

/* * ************ CADASTRANDO COMM PDO 2 ************* */
function cadastrarComPdo2($filme, $preco){
    try{
        $pdo = conectarComPdo();

        $pdo->beginTransaction();

        $cadastrar = $pdo->prepare("INSERT INTO filmes(filme, preco) VALUES (:filme, :preco)");
        $cadastrar->bindValue(":filme", $filme);
        $cadastrar->bindValue(":preco", $preco);
        $cadastrar->execute();
        $id = $pdo->lastInsertId();

        if($cadastrar->rowCount() == 1):
            $atualizar = $pdo->prepare("UPDATE filmes SET filme = :filme WHERE id = :id");
            $atualizar->bindValue(":filme", 'Nemo 2');
            $atualizar->bindValue(":id", $id);
            $atualizar->execute();
        else:
            echo "Erro";
        endif;
    $pdo->commit();
    }catch (PDOException $e){
        echo "Erro ".$e->getMessage();
        $pdo->rollBack();
    }
}



function validar($campo, $valor, $tipo){
    global $erro;
    
    if(!empty($campo)):
        switch ($tipo) {
            case 'INT':
                $int = filter_var($campo, FILTER_SANITIZE_NUMBER_INT);
                if(!filter_var($int, FILTER_VALIDATE_INT)):
                    $erro = "O valor passado tem que ser um numero inteiro";
                else:
                    return $int;
                endif;
                break;
                
            case 'STR':
                $str = filter_var($campo, FILTER_SANITIZE_SPECIAL_CHARS);
                return $str;
                break;
            
            case 'EMAIL':
                $email = filter_var($campo, FILTER_SANITIZE_EMAIL);
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
                    echo "ERRO o campo passado deve ser um email valido";
                else:
                    return $email;
                endif;
                break;
        }
    else:
        $erro = "Erro, o campo valor é obrigatório ";
    endif;
}

function logar($login, $senha){
    $pdo = conectarComPdo();
    try{
        $logar = $pdo->prepare("SELECT * FROM administrador WHERE nome = ? AND senha = ?");
        $logar->bindValue(1, $login);
        $logar->bindValue(2, $senha);
        $logar->execute();
        
        if($logar->rowCount() == 1):
            return $logar->fetch(PDO::FETCH_ASSOC);
        else:
            return false;
        endif;
    } catch (PDOException $e) {
        echo "ERRO ".$e->getMessage();
    }
}
  <?php

function listarEmail($tabela, $id){
    $pdo = conectarComPdo();
    try{
        $listar = $pdo->prepare("SELECT * FROM $tabela WHERE id = ?");
        $listar->bindValue(1, $id);
        $listar->execute();
        if($listar->rowCount() > 0):
            return $listar->fetch(PDO::FETCH_OBJ);
        endif;
    } catch (PDOException $e) {
        echo "ERRO: ".$e->getMessage();
    }
}
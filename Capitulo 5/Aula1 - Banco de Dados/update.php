<?php
require_once './functions/conexao.php';
require_once './functions/functions.php';

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$idFilme = filter_var($id ,FILTER_VALIDATE_INT);

if($idFilme):
    //@conectarSemPdo();
    $filme = $_POST['filme'];
    $preco = $_POST['preco'];
    
    /* SEM PDO
    if(updateSemPdo($filme, $preco, $id)):
        echo "Filme atualizado com sucesso";
        echo '<a href="banco8 - update_sem_pdo.php">Voltar</a>';
    else:
        echo "Erro ao atualizar filme";
    endif;
     */
    
    //COM PDO
    if(updateComPdo($filme, $preco, $id)):
        echo "Filme atualizado com sucesso";
        echo '<a href="banco9 - update_com_pdo.php"> Voltar</a>';
    else:
        echo "Erro ao atualizar filme";
    endif;
else: 
    echo "Voce não escolheu um filme para alterar";
endif;

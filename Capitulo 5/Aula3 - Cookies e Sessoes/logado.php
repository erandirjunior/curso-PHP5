<?php
session_start();
include_once 'functions/conexao.php';
include_once 'functions/functions.php';

if (isset($_SESSION['logadoCliente'])):
    /* PEGA OS VISITANTES ONLINE */
    try {
        $sessao = session_id();
        
        deletaVisita();
        registrarVisita($sessao, $_SESSION['idCliente']);
            
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    /* PEGA OS VISITANTES ONLINE */

    /* SAIR DO SISTEMA */
    if (isset($_GET['ac'])):
        if ($_GET['ac'] == 'sair'):
            logOut('logadoCliente');
        endif;
    endif;
?>

    Bem vindo <?php echo $_SESSION['cliente']; ?> |
    visitantes online <?php echo $visitantes = visitantes(); ?> visitantes online | <a href="?ac=sair">sair</a>

<?php
else:
    echo "Você não tem permissão para acessar essa area";
endif;
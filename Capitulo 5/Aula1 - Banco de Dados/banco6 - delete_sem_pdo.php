<?php
include_once 'functions/conexao.php';
include_once 'functions/functions.php';

conectarSemPdo();

try {
    if (isset($_GET['ac'])):
        if ($_GET['ac'] == "del"):
            $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
            $idFilme = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
            if ($idFilme):
                if (deletarSemPdo($idFilme)):
                    echo "Filme deletado com sucesso";
                else:
                    throw new Exception('Errro ao deletar filme, tente novamente');
                endif;
            else:
                throw new Exception('É necesário passar um id valido');
            endif;
        endif;
    endif;
} catch (Exception $e) {
    echo "ERRO " . $e->getMessage();
}

$dados = listarSemPdo();
$d = new ArrayIterator($dados);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Deletar</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <table cellspacing="0" >
            <thead>
                <tr>
                    <th>Filme</th>
                    <th>Preco</th>
                    <th>Deletar</th>
                </tr>        
            </thead>
            <tbody>
                <?php while ($d->valid()): ?>
                    <tr>
                        <td><?php echo $d->current()->filme; ?></td>
                        <td><?php echo $d->current()->preco; ?></td>
                        <td><a href="?id=<?php echo $d->current()->id; ?>&ac=del">Excluir</a></td>
                    </tr>
                    <?php
                    $d->next();
                endwhile;
                ?>
            </tbody>
        </table>
    </body>
</html>
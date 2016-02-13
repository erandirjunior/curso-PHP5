<?php
require_once 'functions/conexao.php';
require_once 'functions/functions.php';

if (isset($_POST['ok'])):
    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];

    switch ($tipo):
        case 'comum':
            $data_validade = date('Y-m-d', strtotime("5days"));
            break;
        case 'premium':
            $data_validade = date('Y-m-d', strtotime("10days"));
            break;
        case 'mega':
            $data_validade = date('Y-m-d', strtotime("20days"));
            break;
    endswitch;

    $dados = array(
        'nome' => $nome,
        'cadastro' => $data_validade
    );

    if (cadastrar($dados)):
        echo "Cliente cadastrado com sucesso!";
    else:
        echo "Erro ao cadastrar cliente";
    endif;
endif;
?>

<?php
$dados = listarComPdo();
$c = new ArrayIterator($dados);
$dataHoje = date("Y-m-d");
while ($c->valid()):
    echo $c->current()->nome."  ".  calculaVencimento($dataHoje, $c->current()->data_cadastro).'<br />';
    $c->next();
endwhile;
?>
<!DOCTYPE html>
<html>

    <head>
        <title>Datas 7</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="css/style.css" />
    </head>

    <body>
        <table cellspacing="0" border="0" width="800">

            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Cadastro</th>
                    <th>Cadastrar</th>
                </tr>
            </thead>
            <tbody>
            <form action="" method="POST">
                <tr>
                    <th>
                        <input type="text" name="nome"/>
                    </th>
                    <th>
                        <select name="tipo">
                            <option value="comum">Comum</option>
                            <option value="premium">Premium</option>
                            <option value="mega">Mega</option>
                        </select>
                    </th>
                    <th>
                        <input type="submit" name="ok" value="cadastrar"/>
                    </th>
                </tr>
            </form>
            <tr>
                <td>
                    <?php echo isset($sucesso) ? $sucesso : ''; ?>
                    <?php echo isset($erro) ? $erro : ''; ?>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>

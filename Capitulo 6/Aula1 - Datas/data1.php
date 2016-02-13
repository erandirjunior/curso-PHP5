<?php
require_once 'functions/conexao.php';
require_once 'functions/functions.php';
/*
 * date()
 * getdate()
 * strtotime()
 * mktime()
 * time()
 * strftime()
 * datetime()
 */


//echo date('d/m/Y', strtotime('+1day'));
if (isset($_POST['ok'])):

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $nascimento = filter_input(INPUT_POST, 'nascimento', FILTER_SANITIZE_STRIPPED);

    $dataDate = date("Y-m-d");
    
    /* ALTERAR FORMA DATA */
    //$data = explode('/', $nascimento);
    //$dataBanco = $data[2].'-'.$data[1].'-'.$data[0];
    /* ALTERAR FORMA DATA */
    
    $dados = array(
        'nome' => $nome,
        'nascimento' => $dataDate
    );

    if (cadastrar($dados)):
        $sucesso = "Cadastrado com sucesso";
    else:
        $erro = "Erro ao cadastrar";
    endif;
else:

endif;
?>
<!DOCTYPE html>
<html>

    <head>
        <title>Sessoes 4</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="css/style.css" />
    </head>

    <body>
        <table cellspacing="0" border="0" width="800">

            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Nascimento</th>
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
                        <input type="text" name="nascimento"/>
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

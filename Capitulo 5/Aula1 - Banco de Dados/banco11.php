<?php
//lastInsertId
//beginTransaction
//rollback

include_once 'functions/conexao.php';
include_once 'functions/functions.php';

if (isset($_POST['ok'])):
    $filme = $_POST['filme'];
    $preco = $_POST['preco'];
    if (cadastrandoComPdoPegandoId($filme, $preco)):
        echo $id;
    else:
        echo "Erro ao cadastrar filme";
    endif;
endif;
?>
<html>

<head>
    <title>Banco parte 5</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
<?php
$dados = listarComPdo();
$d = new ArrayIterator($dados);
?>

<table cellspacing="0" border="0" width="800">

    <thead>
    <tr>
        <th>Filme</th>
        <th>Preco</th>
        <th>Cadastrar</th>
    </tr>
    </thead>

    <form action="" method="POST">
        <tr>
            <th>
                <input type="text" name="filme"/>
            </th>
            <th>
                <input type="text" name="preco"/>
            </th>
            <th>
                <input type="submit" name="ok" value="alterar"/>
            </th>
        </tr>
    </form>

</table>
</body>
</html>
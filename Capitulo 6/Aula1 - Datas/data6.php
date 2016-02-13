<?php
require_once 'functions/conexao.php';
require_once 'functions/functions.php';
/*
 * date()
 * getdate()
 * strtotime()
 * time()
 * mktime() 
 * strftime()
 * datetime()
 */

//date_default_timezone_set('AMERICA/FORTALEZA');
echo sprintf("Meu nome é %s", "Junior");
echo "<br />";

//OBRIGATORIO QUE O FORMATO SEJA Y-M-D SENDO OPCIONAL A HORA
$data = '2015-12-20';
echo strftime('%Y-%m-%d', strtotime($data));
echo "<br />";

$dados = listarComPdo();
$c = new ArrayIterator($dados);
while ($c->valid()):
    echo strftime("%d/%m/%Y", strtotime($c->current()->time)).'<br />';
    $c->next();
endwhile;


?>
<!DOCTYPE html>
<html>

    <head>
        <title>Datas 6</title>
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

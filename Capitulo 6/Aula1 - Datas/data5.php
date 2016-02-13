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

date_default_timezone_set('AMERICA/FORTALEZA');
//$data =mktime(0,0,0,  date('m'),  date('d'),  date('Y'));

// date('d/m/Y',$data);

//echo date('d/m/Y', mktime(0,0,0, 12, 15+1, 2015));

//$data = mktime(0,0,0,13,25,2015);
//echo date('d/m/Y', $data);

$data = mktime(0,0,0,2,0,2015);
echo date('d/m/Y', $data);


?>
<!DOCTYPE html>
<html>

    <head>
        <title>Datas 4</title>
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

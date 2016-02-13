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

date_default_timezone_set('BRAZIL/EAST');

$data = getdate();//RETORNA UM ARRAY

switch ($data['mon']){
    case 1:
        echo 'Janeiro';
        break;
    case 2:
        echo 'Fevereiro';
        break;
    case 3:
        echo 'Março';
        break;
    case 4:
        echo 'Abril';
        break;
    case 5:
        echo 'Maio';
        break;
    case 6:
        echo 'Junho';
        break;
    case 7:
        echo 'Julho';
        break;
    case 8:
        echo 'Agosto';
        break;
    case 9:
        echo 'Setembro';
        break;
    case 10:
        echo 'Outubro';
        break;
    case 11:
        echo 'Novembro';
        break;
    case 12:
        echo 'Dezembro';
        break;
    
    
    
    
    
}
/*
foreach ($data as $k => $v):
    echo $k."<br/>";
endforeach;
 */

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

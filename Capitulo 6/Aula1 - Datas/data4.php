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


date_default_timezone_set("America/Fortaleza");

//$data = getdate();
//print_r($data);
//$dataFormatada = date("d/m/Y",$data[0]);

//$dataMes = explode("/", $dataFormatada);

//switch ($dataMes[1]):
//    case 12:
//       echo "Estamos em dezembro";
//        break;
//endswitch;

//echo date("d/m/Y",$data[0]);
//echo date("d/m/Y",time());

//echo date("d/m/Y",  time()+86400);
//echo time();

$dados = listarComPdo();
$d = new ArrayIterator($dados);
while ($d->valid()):
    echo "Nome: ".$d->current()->nome;
    echo " Data Nascimento: ".date("Y/m/d", strtotime($d->current()->nascimento)).'<br />';
    //echo " Hora: ".date("Y/m/d H:i:s", strtotime($d->current()->time)).'<br />';
    echo " Tempo em segundos: ".date("d/m/Y H:i:s", $d->current()->hora).'<br />';
    $d->next();
endwhile;
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

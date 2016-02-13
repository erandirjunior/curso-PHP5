<?php
require_once 'function/functions.php';

/*RENOMEAR ARQUIVO*/
if(isset($_POST['rename'])):
    $diretorio = "arquivos/";
    $ext = explode('.', $_POST['nome']);
    $extensao = end($ext);
    rename($diretorio.$_POST['nome'], $diretorio.$_POST['novoNome'].".".$extensao);
endif;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
        //$arquivo = "arquivo2.txt";
        //$url = "http://www.asolucoesweb.com.br";
        //echo file_get_contents($arquivo);
        
        $diretorio = "arquivos";

        $dados = listarDiretorio($diretorio);
        
                            /*LISTA OS ARQUIVOS DO DIRETORIO*/
            while(false != ($lerDiretorio = readdir($dados))): 
                if($lerDiretorio != '.' && $lerDiretorio != '..'):
                    ?>
                
                <span id="link" ><a href=""><?php echo $lerDiretorio; ?></a> - <a href="?renomear=ok&arq=<?php echo $lerDiretorio; ?>" id="renomear" >Renomear Arquivo</a></span>
                <br />

                    <?php                    
                endif;
            endwhile;

        ?>
        <?php
        if(isset($_GET['renomear'])): 
             if ($_GET['renomear'] == 'ok') {
        ?>
        <form action="" method="POST">
            <input type="text" name="nome" value="<?php echo $_GET['arq']; ?>">
            <input type="text" name="novoNome" >
            <input type="submit" name="rename" value="renomear">
        </form>

        <?php
             }
        endif;
        ?>
    </div>
</body>
</html>
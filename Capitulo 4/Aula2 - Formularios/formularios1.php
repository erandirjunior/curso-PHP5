<?php
include_once 'functions/functions.php';
if(isset($_POST['cadastar'])):
    if($_POST['cadastar'] == 'ok'):
        $dados = array('nome' => $_POST['nome'], 'email' =>$_POST['email'], 'telefone' => $_POST['telefone']);
        $arr = cadastraDados($dados);
        
        $a = new ArrayIterator($arr);
        while($a->valid()):
            echo $a->current()."<br />";
            $a->next();
        endwhile;
        
        /*
         $b = new ArrayIterator($_POST);
        while($b->valid()):
            echo $b->current()."<br />";
            $b->next();
        endwhile;
         */
        
    endif;    
endif;      
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulários</title>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <div id="container">
            <form action="<?php $_SERVER['PHP SELF']; ?>" method="post">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" /> 

                <label for="email">Email:</label>
                <input type="text" name="email" />

                <label for="telefone">Telefone:</label>
                <input type="text" name="telefone" />
                
                <label for="submit"></label>
                <input type="submit" name="cadastar" value="ok" />
            </form>
        </div>
    </body>
</html>

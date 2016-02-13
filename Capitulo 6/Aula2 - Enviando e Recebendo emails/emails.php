<?php
require_once 'functions/conexao.php';
require_once 'functions/listar.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Emails recebidos</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="css/style2.css" />
    </head>
    <body>
        <div id="container">
            <div id="emails">
                <table>
                    <thead>
                        <tr>
                            <th>Nome:</th>
                            <th>Email:</th>
                            <th>Assunto:</th>
                            <th>Status:</th>
                            <th>Ver</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $dados = listar('emails');
                        $e     = new ArrayIterator($dados);
                        while($e->valid()):
                            $classe = ($e->current()->status == 1) ? 'nao_respondido' : 'respondido';
                        ?>
                        <tr class="<?php echo $classe; ?>">
                            <td><?php echo $e->current()->nome; ?></td>
                            <td><?php echo $e->current()->email; ?></td>
                            <td><?php echo $e->current()->assunto; ?></td>
                            <td><?php echo ($e->current()->status == 1) ? "não respondido" : "respondido"; ?></td>
                            <td><a href="mensagem.php?id=<?php echo $e->current()->id; ?>">Ver</a></td>
                        </tr>
                        <?php
                        $e->next();
                        endwhile;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
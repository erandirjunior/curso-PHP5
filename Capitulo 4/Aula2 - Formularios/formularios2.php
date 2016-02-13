<?php
//REQUEST _ ACEITA TANTO O GET COMO O POST
include_once 'functions/functions.php';
if(isset($_REQUEST['cadastar'])):
    $dado = $_POST['valores'];
    verificaTipoDado($dado);
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
                
                <input type="hidden" name="id" value="10" />
                
                <label for="programas">Programas:</label>
                <select name="programas" >
                    <option value="aptana">Aptana</option>
                    <option value="sublime">Sublime</option>
                    <option value="netbeans">Netbeans</option>
                </select>
                
                <br />
                
                <label for="valores">Valores:</label>
                <input type="checkbox" name="valores" value="20" />20
                <input type="checkbox" name="valores" value="50" />50
                <input type="checkbox" name="valores" value="teste" />teste
                <input type="checkbox" name="valores" value="aptana" />aptana

                <label for="email">Email:</label>
                <input type="text" name="email" />

                <label for="telefone">Telefone:</label>
                <input type="text" name="telefone" />
                
                <label for="submit"></label>
                <input type="submit" name="cadastar" value="vai" />
            </form>
        </div>
    </body>
</html>

<?php
include_once 'functions/functions.php';

/*
 * AO CONTRARIO DO VALIDARE O SANITIZE NÃO RETORNA TRUE OU FALSE
 * SANITIZE EMAILS
 * SANITIZE ENCODED
 * SANITIZE MAGIC QUOTES - EQUIVALENTE AO ADDSLASHES
 * SANITIZE INT
 * SANITIZE FILTER_SANITIZE_FULL_SPECIAL_CHARS - EQUIVALENTE AO HTMLSPECIALCHARS
 * SANITIZE STRING
 */


//if(isset($_POST['cadastar'])):
  
    /*$var = "<a href='teste'>Teste</a>";
    echo filter_var($var, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    
    echo "<br />";
    echo filter_var($var, FILTER_SANITIZE_STRING);*/
    //echo "<br />";
    //echo filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);

    //echo filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);


    if(isset($_GET['id'])):
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        
        if(filter_var($id, FILTER_VALIDATE_INT)):
            echo "ID validado com sucesso";
        else:
            echo "ID não é valido";
        endif;
    endif;


//endif;      
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
            <a href="filtro5.php?id=meuid">Teste de Filtro</a>
            <form action="<?php $_SERVER['PHP SELF']; ?>" method="post">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" /> 
                
                <input type="hidden" name="id" value="10" />
               
                <label for="programas">Programas:</label>
                <select name="programas" >
                    <option selected="selected" disabled="disabled">Escolha um Programa</option>
                    <option value="aptana">Aptana</option>
                    <option value="sublime">Sublime</option>
                    <option value="netbeans">Netbeans</option>
                </select>
              
                <label for="radio">Radio Buttons</label>
                <input type="radio" name="radio" value="aptana" />Aptana
                <input type="radio" name="radio" value="netbeans" checked="checked"/>Netbeans
                <input type="radio" name="radio" value="sublime" />Sublime
             
                <label for="valores">Curso:</label>
                <input type="checkbox" name="valores[]" value="php" />PHP
                <input type="checkbox" name="valores[]" value="java" />JAVA
                <input type="checkbox" name="valores[]" value="javascript" checked="checked"/>JavaScript
                <input type="checkbox" name="valores[]" value="c++" />C++
 
                <label for="email">Email:</label>
                <input type="email" name="email" />

                <label for="telefone">Telefone:</label>
                <input type="telefone" name="telefone" />
                
                <label for="texto">Texto:</label>
                <textarea name="texto" id="" cols="20" rows="3">
                    Qualquer coisa
                </textarea>
                
                <label for="submit"></label>
                <input type="submit" name="cadastar" value="vai" />
            </form>
        </div>
    </body>
</html>

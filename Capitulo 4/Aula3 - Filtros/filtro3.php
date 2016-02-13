<?php
include_once 'functions/functions.php';

/*
 * VALIDAR EMAILS
 * VALIDAR NUMEROS INTEIROS
 * VALIDAR NUMEROS FLOAT
 * VALIDAR IP
 * VALIDAR URL
 */


if(isset($_POST['cadastar'])):
  
    /*
    $ip = $_SERVER['REMOTE_ADDR'];
    if(filter_var($ip, FILTER_VALIDATE_IP)):
        echo "Ip é válido";
    else:
        echo "Ip não é valido";
    endif;
    
    echo "<br/>";
    
    if(filter_input(INPUT_POST,'nome', FILTER_VALIDATE_IP)):
        echo "Ip é válido";
    else:
        echo "Ip não é valido";
    endif;
    */
    
    $url = "http://www.asolucoesweb.com.br";
    if(filter_var($url, FILTER_VALIDATE_URL)):
        echo "URL é válido";
    else:
        echo "URL não é valido";
    endif;
    
    echo "<br/>";
    
    if(filter_input(INPUT_POST,'nome', FILTER_VALIDATE_URL)):
        echo "URL é válido";
    else:
        echo "URL não é valido";
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

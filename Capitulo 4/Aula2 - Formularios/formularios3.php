<?php
include_once 'functions/functions.php';
if(isset($_POST['cadastar'])):
//PEGAR DADOS DE INPUT TEXT
    //echo $_POST['nome'];
   
//PEGAR DADOS DE INPUT HIDDEN
    //echo $_POST['programas'];
    
//PEGAR DADOS DE UMA CAMPO SELECT
    //echo $_POST['programas'];

//PEGAR DADOS DE UMA CAMPO RADIO
    //echo $_POST['radio'];

//PEGAR DADOS DE UMA CAMPO CHECKBOX
    //print_r($_POST['valores']);

//PEGAR DADOS DE UMA CAMPO EMAIL
    //echo $_POST['email'];

//PEGAR DADOS DE UMA CAMPO TELEFONE
    //echo $_POST['telefone'];
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
              
                <label for="radio">Radio Buttons</label>
                <input type="radio" name="radio" value="aptana" />Aptana
                <input type="radio" name="radio" value="netbeans" />Netbeans
                <input type="radio" name="radio" value="sublime" />Sublime
             
                <label for="valores">Curso:</label>
                <input type="checkbox" name="valores[]" value="php" />PHP
                <input type="checkbox" name="valores[]" value="java" />JAVA
                <input type="checkbox" name="valores[]" value="javascript" />JavaScript
                <input type="checkbox" name="valores[]" value="c++" />C++
 
                <label for="email">Email:</label>
                <input type="email" name="email" />

                <label for="telefone">Telefone:</label>
                <input type="text" name="telefone" />
                
                <label for="submit"></label>
                <input type="submit" name="cadastar" value="vai" />
            </form>
        </div>
    </body>
</html>
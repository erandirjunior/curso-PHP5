<?php  
if(isset($_POST['enviar'])):
        echo "TEXT ".$_POST['nome']."<br />";
        echo "EMAIL ".$_POST['email']."<br />";
        echo "NUMBER ".$_POST['idade']."<br />";
        echo "select ".$_POST['select']."<br />";
        echo "RADIO ".$_POST['mf']."<br />";
        echo "CHECKBOX ".$_POST['radio']."<br />";
        echo "TEXTAREA ".nl2br($_POST['textarea']);
    
endif;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style type="text/css">
    label{display: block; margin-top: 10px}
    body{text-align: center;}
    </style>
</head>
<body>
    <form action="" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome">

        <label for="email">Email:</label>
        <input type="email" name="email">

        <label for="idade">Idade:</label>
        <input type="number" name="idade">

        <label for="select">SELECT:</label>
        <select name="select" id="">
            <option value="netbeans">netbeans</option>
            <option value="sublime">sublime</option>
            <option value="phpstorm">phpstorm</option>
        </select>

        <label for="radio">Radio Buttons</label>
        <input type="radio" name="mf" value="masculino">Masculino
        <input type="radio" name="mf" value="feminino">Feminino

        <label for="checkbox">CHECKBOX</label>
        <input type="checkbox" name="radio" value="verde" />Verde
        <input type="checkbox" name="radio" value="azul" />Azul
        <input type="checkbox" name="radio" value="branco" />Branco

        <label for="textarea">TEXTAREA</label>
        <textarea name="textarea" id="" cols="15" rows="3"></textarea>

        <label for=""></label>
        <input type="submit" name="enviar" value="enviar">
    </form>
</body>
</html>
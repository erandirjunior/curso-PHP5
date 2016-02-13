<?php  
if(isset($_POST['enviar'])):
    $text     = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email    = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $number   = filter_input(INPUT_POST, 'number', FILTER_VALIDATE_INT);
    $select   = $_POST['select'];
    $checkbox = $_POST['checkbox'];
    $radio    = $_POST['mf'];
    $textarea = filter_input(INPUT_POST, 'textarea', FILTER_SANITIZE_SPECIAL_CHARS);


    echo $text."<br />";
    echo $email."<br />";
    echo $number."<br />";
    foreach ($select as $s) {
        echo $s.', ';
    }
    echo "<br />";
    foreach ($checkbox as $c) {
        echo $c.', ';
    }
    echo "<br />";
    echo $radio."<br />";
    echo nl2br($textarea)."<br />";

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

        <label for="telefone">Telefone:</label>
        <input type="number" name="telefone">

        <label for="select">SELECT:</label>
        <select name="select[]" multiple="multiple" id=""><!-- ATRIBUTO MULTIPLE E [] ADICIONADO PARA UMA POSSIVEL SELEÇÃO MULTIPLA-->
            <option value="netbeans">netbeans</option>
            <option value="sublime">sublime</option>
            <option value="phpstorm">phpstorm</option>
        </select>

        <label for="checkbox">Radio Buttons</label>
        <input type="radio" name="mf" value="masculino">Masculino
        <input type="radio" name="mf" value="feminio">Feminino

        <label for="radio">CHECKBOX</label><!-- [] ADICIONADO PARA UMA POSSIVEL SELEÇÃO MULTIPLA-->
        <input type="checkbox" name="checkbox[]" value="verde" />Verde
        <input type="checkbox" name="checkbox[]" value="azul" />Azul
        <input type="checkbox" name="checkbox[]" value="branco" />Branco

        <label for="textarea">TEXTAREA</label>
        <textarea name="textarea" id="" cols="15" rows="3"></textarea>

        <input type="submit" name="enviar" value="enviar">
    </form>
</body>
</html>
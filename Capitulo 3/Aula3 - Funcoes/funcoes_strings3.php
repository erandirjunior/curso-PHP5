<?php
/*
 * TRIM() - Remove espaços em branco
 * STRIP_TAGS() - Ignora qualquer tag
 * ADDSLASHES() - Protege o sistema
 * HTMLENTITIES() - Anula e mostra as tags digitadas
 * MD5() - Criptografa a variavel
 * SHA1() - Criptografa a variavel
 */

$texto = "Meu nome <b>Junior</b>";
echo htmlentities($texto);

echo '<br />';

if(isset($_POST['ok'])):
    //echo sprintf("O valor digitado no formulario foi '%s'",trim($_POST['n']));
    //echo sprintf("O valor digitado no formulario foi '%s'",strip_tags($_POST['n']));
    //echo sprintf("O valor digitado no formulario foi '%s'",addslashes($_POST['n']));
    //echo sprintf("O valor digitado no formulario foi '%s'",htmlentities($_POST['n']));
    echo $_POST['n'];
    echo '<br />';
    echo md5($_POST['s']);
    echo '<br />';
    echo sha1($_POST['s']);
endif;
?>
<form action="" method="post">
    <input type="text" name="n" />    
    <input type="text" name="s"/>
    <input type="submit" name="ok" value="vai" />
</form>
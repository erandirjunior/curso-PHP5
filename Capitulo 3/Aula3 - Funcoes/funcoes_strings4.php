<meta charset="UTF-8" />
<?php
include_once './functions/functions.php';
$texto = "Lorem Ipsum é simplesmente uma simulação de texto da "
        . "indústria tipográfica e de impressos, e vem sendo "
        . "utilizado desde o século XVI, quando um impressor "
        . "desconhecido pegou uma bandeja de tipos e os "
        . "embaralhou para fazer um livro de modelos de tipos. "
        . "Lorem Ipsum sobreviveu não só a cinco séculos, como "
        . "também ao salto para a editoração eletrônica, "
        . "permanecendo essencialmente inalterado. Se "
        . "popularizou na década de 60, quando a Letraset "
        . "lançou decalques contendo passagens de Lorem Ipsum, "
        . "e mais recentemente quando passou a ser integrado a "
        . "softwares de editoração eletrônica como Aldus "
        . "PageMaker.";
//echo exibeChamadaNoticia($texto, 50);

$caracteres = "abcdefghijklmnopqrstuvwyz";
$lista = str_split($caracteres);

if(isset($_POST['buscar'])):
    echo $_POST['x'];
endif;
?>


<form action="" method="post">
    <select name="x" >
        <?php
            $c = new ArrayIterator($lista);
            while ($c->valid()):       
        ?>
        <option value="<?php $c->current(); ?>">
            <?php
                echo $c->current()."<br />";            
            ?>
        </option>
        <?php 
            $c->next();
            endwhile; 
        ?>
    </select>
    <input type="submit" name="buscar" value="Buscar"/>
</form>
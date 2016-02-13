<link rel="stylesheet" href="css/style.css" />
<?php

include_once 'functions/conexao.php';
include_once 'functions/functions.php';

if(isset($_GET['pg'])):
    $pg = $_GET['pg'];
else:
     $pg = 1;
endif;

//QUANTOS FILMES LISTADOS POR PAGINA
$por_pagina = 5;

$inicio = ($pg*$por_pagina) - $por_pagina;


$dados = listarPaginacao("filmes", $inicio, $por_pagina);
$f = new ArrayIterator($dados);
while($f->valid()):
?>
<p><?php echo $f->current()->filme; ?></p>
<?php
    $f->next();
endwhile;

/*TOTAL DE REGISTROS*/
$total = qtdRegistros("filmes");
/*QUANTIDADE DE PAGINAS*/
$qtdPaginas = ceil($total/$por_pagina);

for ($i=1; $i<=$qtdPaginas; $i++):
    if($pg == $i):
?>

<span class="pagina_escolhida"><?php echo $i; ?></span>

<?php    
    else:
?>
<a href="http://localhost/PHP5/Capitulo%206/Aula4%20-%20Paginacao/paginacao.php?pg=<?php echo $i; ?>"><?php echo $i; ?></a>
<?php
    endif;
endfor;
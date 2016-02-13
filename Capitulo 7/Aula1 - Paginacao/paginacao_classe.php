<?php

require_once 'functions/conexao.php';
require_once 'functions/functions.php';
require_once 'Pager/Pager.php';

$dados = listarDados("filmes");

$params = array(
    'mode' => 'Sliding',
    'perPage' => 1,
    'delta' => 2,
    'itemData' => $dados
);
@$pager = & Pager::factory($params);
$data   = $pager->getPageData();

$p = new ArrayIterator($data);
while($p->valid()):
?>
<p><?php echo $p->current()->filme; ?></p>
<?php
    $p->next();
endwhile;
?>

<!--<p></*?php $links =  $pager->getLinks(); 
echo $pager->links;//$links['all'];
*/?></p>-->

Total de paginas: <?php echo $pager->numPages(); ?>
<p><?php
echo $pager->links;
?>
</p>
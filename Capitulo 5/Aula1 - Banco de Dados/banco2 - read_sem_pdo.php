<?php
include_once './functions/conexao.php';
include_once './functions/functions.php';

//OBS - UTILIZAR $d->filme QUANDO FOR FETCH_OBJ
//OBS - UTILIZAR $d['filme'] QUANDO FOR FETCH_ASSOC

conectarSemPdo();

/*
$dados = listarSemPdo();

foreach ($dados as $d):
    echo $d->filme."<br />";
endforeach;

echo "<br /><br />";

$d = new ArrayIterator($dados);
while($d->valid()):
    //$filme = $d->current();
    //echo $filme['filme']."<br />";
    echo $d->current()->filme . "<br />";
    $d->next();
endwhile;
*/
 
$dados = pegarPeloIdSemPdo(5);
echo $dados->filme;

/*
$d = new ArrayIterator($dados);
while($d->valid()):
    echo $d->current()->filme . "<br />";
    $d->next();
endwhile;
 * 
 */
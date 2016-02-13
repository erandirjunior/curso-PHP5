<?php
function exibeNome($nome){
    return "Meu nome � $nome";
}

function mostraNome($nome){
	return "Meu nome � $nome";
}

function exibeChamadaNoticia($texto, $qtdletras){
    $resumo = substr($texto, 0, $qtdletras );
    $posicao = strrpos($resumo, " ");
    $textoFinal = substr($texto, 0, $posicao);
    return $textoFinal."...";
}
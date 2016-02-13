<?php

/* 
 * for(expressao1; expressao2; expressao3){
 * 
 * }
 * expressao1 = inicialização;
 * expressao2 = condicional;
 * expressao3 = incremento ou decremento;
 */

$programas = array("Netbaeans","Aptana","Dreamweaver", "Corel", "Photoshop");
for ($i = 0; $i < count($programas); $i++) {
    echo $programas[$i]."<br />";    
}

/*
$numero = 10;
 
for($i = 0; $i<10;$i++){
    echo $numero.'<br />';
}
 
 */
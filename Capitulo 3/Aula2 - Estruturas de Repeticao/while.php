<?php

/*
 * while(expressao){
 * }
 */

$programas = array("Netbeans", "Aptana", "Dreamweaver", "Corel", "Photoshop");
$i = 0;
while ($i < count($programas)) {
    echo $programas[$i] . "<br />";
    $i++;
}


/*$c = new ArrayIterator($programas);
while ($c->valid()){
    echo $c->current()."<br />";
    $c->next();
}
 */
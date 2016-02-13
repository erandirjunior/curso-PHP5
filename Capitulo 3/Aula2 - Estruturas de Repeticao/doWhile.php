<?php

/*
 * do{
 * }while();
 */

$programas = array("Netbeans", "Aptana", "Dreamweaver", "Corel", "Photoshop");
$i = 0;

do{
    echo $programas[$i]."<br />";
    $i++;
}while($i<count($programas));

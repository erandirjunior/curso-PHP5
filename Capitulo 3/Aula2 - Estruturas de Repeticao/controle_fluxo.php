<?php

/*
 * continue;
 * break;
 */

//LOOPING COM CONTINUE

$nomes = array("Junior","Joao","Jessica");
$i=0;
while($i<10):
    $i++;
    if ($i == 3):
        continue;
    endif;
    echo $i."<br />";
    
endwhile;
/*
for ($i = 0; $i < count($nomes); $i++) {
    //echo $i . "<br/>";
    if ($nomes[$i] == "Joao"):
        //echo "Chegou ao numero 3 e continuou!";
        continue;
    endif;
    echo $nomes[$i] . "<br/>";
 }
*/

/*
LOOPING COM BREAK
$i = 0;
do{
    echo $i."<br />";
    if ($i == 8):
        echo "Chegou ao numero 8 e parou!";
        break;
    elseif ($i == 3):
        echo "Chegou ao numero 3 e parou !";
        break;
    endif;
    $i++;
}while($i < 10);


 $i = 0;
while(i<10):
    echo $i."<br />";
    if ($i == 8):
        echo "Chegou ao numero 8 e parou!";
        break;
    elseif ($i == 3):
        echo "Chegou ao numero 3 e parou !";
        break;
    endif;
    $i++;
endwhile;

for ($i = 0; $i < 10; $i++) {
    echo $i . "<br/>";
    if ($i == 8):
        echo "Chegou ao numero 8 e parou!";
        break;
    elseif ($i == 3):
        echo "Chegou ao numero 3 e parou !";
        break;
    endif;
 }
 */
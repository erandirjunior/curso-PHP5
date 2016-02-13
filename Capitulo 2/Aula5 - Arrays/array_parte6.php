<?php

$programas = array(
    "adobe" => array("webdesigner"=>"dreamweaver","designer"=>"fireworks"),
    "office" => array("texto"=>"word","planilha"=>"excel"),
    "outros" => array("ide"=>"netbeans","servidor"=>"wamp","outraide"=>"aptana")
    );
//echo $programas["outros"][2];
foreach ($programas['adobe'] as $k=>$v):
    echo $k." => ".$v.'<br/>';
endforeach;

echo '<br/>';

foreach ($programas['office'] as $k=>$v):
    echo $k." => ".$v.'<br/>';
endforeach;

echo '<br/>';
foreach ($programas['outros'] as $k=>$v):
    echo $k." => ".$v.'<br/>';
endforeach;

echo '<br/><br/><br/>';

$a = new ArrayIterator($programas['outros']);
while($a->valid()):
    echo $a->key()." => ".$a->current().'<br/>';
    $a->next();
endwhile;
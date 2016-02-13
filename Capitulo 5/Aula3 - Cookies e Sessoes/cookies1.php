<?php

setcookie('curso', 'PHP5', time()+3600);//faz o calculo em segundos
//setcookie('curso', 'PHP5', time()+3*24*60*60);
echo $_COOKIE['curso'];
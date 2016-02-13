<?php  
//cria o cookie  
setcookie('teste', 'testando', time()+60);
//nome do cookie, valor do cookie, tempo do cookie

print_r($_COOKIE);
?>

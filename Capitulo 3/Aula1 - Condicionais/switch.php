<meta charset="UTF-8" />
<a href="?link=contato">Contato</a> | <a href="?link=empresa">Empresa</a>
<!--query string -->
<br />

<?php
/*
$nome = 'Junior';
switch ($nome):
    case "Junior";
        $mensagem = "O nome é Junior";
        break;
    case "Joao";
        $mensagem = "O nome é Joao";
        break;
    default :
        $mensagem = "O nome é desconhecido";
        break;
endswitch;
echo $mensagem;
*/

$link = $_GET['link'];
switch ($link){
    case "contato":
        $mensagem = "Mostra a pagina de contato";
        break;
    case "empresa";
        $mensagem = "Mostra a pagina da empresa";
        break;
    default :
        $mensagem = "Mostra a pagina inicial";
        break;
}
echo $mensagem;
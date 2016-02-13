<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Url Amigaveis</title>
    <style type="text/css">
    #container{text-align: center;}
    #menus a {text-decoration:none; color: #000; font-size: 18px;}
    #conteudo{margin-top: 20px;}
    </style>
</head>
<body>
    <div id="container">
        <div id="menus"> <a href="index.php">Home</a> | <a href="http://localhost/PHP-5/Capitulo%207/Aula3%20-%20Urls%20Amigaveis/sobre/">Sobre</a> | <a href="http://localhost/PHP-5/Capitulo%207/Aula3%20-%20Urls%20Amigaveis/contato/">Contato</a></div>
        <div id="conteudo">
            <?php
            set_include_path("inc/");
            if(!isset($_GET['p'])):
                include_once 'home.php';
            else:
                if(substr_count($_GET['p'], "/") > 0):
                    $pagina = explode("/", $_GET['p']);
                    $numeroPaginas = count($pagina);
                    for($i=0; $i<$numeroPaginas;$i++):
                        if(is_file("inc/".$pagina[$i].".php")):
                            $paginaEscolhida =  $pagina[$i].".php";
                            $erro = false;
                        endif;
                    endfor;

                    if($erro = false):
                        include_once $paginaEscolhida;
                    endif;
                else:
                    if(is_file("inc/".$_GET['p'].".php")):
                        include_once $_GET['p'].".php";
                    endif;
                endif;
            endif;               
            ?>
        </div>
    </div>
</body>
</html>
<?php


if(isset($_POST['ok'])):
    if(preg_match("/[a-zA-Z0-9._-]+\.[a-zA-Z0-9]+$/", $_POST['email'])):
        echo "Email Valido";
    else:
        echo "Email não é valido";
    endif;

    //VALIADAR CEP
    if(preg_match("/^(\d){5}-(\d){3}$/", $_POST['cep'])):
        echo "Cep Valido";
    else:
        echo "Cep não é valido";
    endif;     
    
    //VALIDAR CPF
    if(preg_match("/^(\d){3}\.(\d){3}.(\d){3}-(\d){2}$/", $_POST['rg'])):
        echo "RG Valido";
    else:
        echo "RG não é valido";
    endif;
    
    //VALIDAR TELEFONE
    if(preg_match("/^\(?(\d){2}\)?\s?(\d){9}$/", $_POST['telefone'], $telefone)):
        echo "O $telefone[0] é valido";
    else:
        echo "O telefone é valido";
    endif;
endif;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Emails recebidos</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="css/style2.css" />
    </head>
    <body>
        <div id="container">
                <div id="mensagem">
                    <form action="" method="POST">

                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" />

                        <label for="email">Email</label>
                        <input type="" name="email" />

                        <label for="cep">Cep</label>
                        <input type="text" name="cep" />
                        
                        <label for="rg">RG:</label>
                        <input type="text" name="rg" />
                                   
                        <label for="telefone">Telefone:</label>
                        <input type="text" name="telefone" />
                        
                        <label for=""></label>
                        <input type="submit" name="ok" value="validar"/>    
                    </form>
                </div>
            </div>
    </body>
</html>
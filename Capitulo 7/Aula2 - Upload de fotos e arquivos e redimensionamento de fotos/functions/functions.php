<?php

function cadastrarLivro(Array $dados) {
    if (is_array($dados)):
        $pdo = conectarComPdo();
        try {
            $cadastrar = $pdo->prepare("INSERT INTO livro(nome,preco,foto) VALUES (?,?,?)");
            $total = count($dados);
            for ($i = 1; $i <= $total; $i++):
                $cadastrar->bindValue($i, $dados[$i - 1]);
            endfor;
            $cadastrar->execute();

            if ($cadastrar->rowCount() > 0):
                return TRUE;
            else:
                return FALSE;
            endif;
        } catch (PDOException $e) {
            echo "ERRO: " . $e->getMessage();
        }
    endif;
}

function redimensionar($temporario, $largura, $pasta, $foto) {
    /*VARIAVEL GLOBAL*/
    global $erroExtensao;




    /* PEGAR A EXTENSAO */
    $exp = explode('.', $foto);
    $extensao = end($exp);

    /* PEGAR A FOTO ATUAL */
    switch ($extensao):
        case 'jpeg':
            $fotoAtual = imagecreatefromjpeg($temporario);
            break;
        case 'jpg':
            $fotoAtual = imagecreatefromjpeg($temporario);
            break;
        case 'png':
            $fotoAtual = imagecreatefrompng($temporario);
            break;
        case 'gif':
            $fotoAtual = imagecreatefromgif($temporario);
            break;
    endswitch;


    /* PEGAR MEDIDAS */
    $x = imagesx($fotoAtual);
    $y = imagesy($fotoAtual);

    /* ALTURA DA NOVA FOTO */
    $altura = ($largura / $x) * $y;

    $novaFoto = imagecreatetruecolor($largura, $altura);
    imagecopyresampled($novaFoto, $fotoAtual, 0, 0, 0, 0, $largura, $altura, $x, $y);

    /* RENOMEAR FOTO */
    $novoNome = uniqid() . ".$extensao";

    $extensoesPermitidas = array('jpg', 'jpeg', 'png', 'gif');

    if (in_array($extensao, $extensoesPermitidas)):


        switch ($extensao):
            case 'jpeg':
                if (imagejpeg($novaFoto, $pasta . $novoNome)):
                    return TRUE;
                else:
                    return FALSE;
                endif;
                break;
            case 'jpg':
                if (imagejpeg($novaFoto, $pasta . $novoNome)):
                    return TRUE;
                else:
                    return FALSE;
                endif;
                break;
            case 'png':
                if (imagepng($novaFoto, $pasta . $novoNome)):
                    return TRUE;
                else:
                    return FALSE;
                endif;
                break;
            case 'gif':
                if (imagegif($novaFoto, $pasta . $novoNome)):
                    return TRUE;
                else:
                    return FALSE;
                endif;
                break;
        endswitch;


        unset($fotoAtual);
    else:
        $erroExtensao = 'Extensao não permitida';
        return FALSE;
    endif;
}

function verificaExtensao($extensao){
    $extensoesPermitidas = array('jpg', 'jpeg', 'png', 'gif');
    
    if(in_array($extensao, $extensoesPermitidas)):
        return TRUE;
    else:
        return FALSE;
    endif;
}

function validar($campo, $valor, $tipo){
    global $erroValidar;
    
    if(!empty($campo)):
        switch ($tipo) {
            case 'INT':
                $int = filter_var($campo, FILTER_SANITIZE_NUMBER_INT);
                if(!filter_var($int, FILTER_VALIDATE_INT)):
                    $erro = "O valor passado tem que ser um numero inteiro";
                else:
                    return $int;
                endif;
                break;
                
            case 'STR':
                $str = filter_var($campo, FILTER_SANITIZE_SPECIAL_CHARS);
                return $str;
                break;
            
            case 'EMAIL':
                $email = filter_var($campo, FILTER_SANITIZE_EMAIL);
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
                    echo "ERRO o campo passado deve ser um email valido";
                else:
                    return $email;
                endif;
                break;
        }
    else:
        $erroValidar = "Erro, o campo $valor é obrigatório ";
    endif;
}
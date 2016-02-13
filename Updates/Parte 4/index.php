<?php 

//$nome = array('Antonio', 'Erandir', 'Junior');
//$nomes = ['Antonio', 'Erandir', 'Junior'];
//print_r($nomes);

function exibeNome(){
    return $nomes = ['Antonio', 'Erandir', 'Junior'];
}

//$nome = exibeNome();
//echo $nome[1];

//echo exibeNome()[2];

function posts(){
    $pdo = new PDO('mysql:host=localhost;dbname=php5', 'root', '');
    $posts = $pdo->prepare("SELECT * FROM emails");
    $posts->execute();
    return $posts->fetchAll(PDO::FETCH_ASSOC);
}

print_r(posts()[2]);
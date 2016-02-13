<?php
require_once 'functions/conexao.php';
require_once 'functions/functions.php';

//DATETIME

$hoje = date('Y-m-d H:i:s');
$data = new DateTime($hoje, new DateTimeZone('AMERICA/FORTALEZA'));
$data->add(new DateInterval('P2Y'));
echo $data->format('d-m-Y H:i:s');

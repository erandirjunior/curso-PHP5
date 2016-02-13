<?php

//DATA INICIAL PARA COMPARAR COM A DATA FINAL
$date = new DateTime(date('Y-m-d H:i:s'));

$vencimento = new DateTime();
$vencimento->setDate(2015, 12, 21);
$vencimento->setTime(20, 50, 30);

$diff = $date->diff($vencimento);

echo "Faltam ". $diff->d." dias, para chegar ao dia 20";

echo '<br />';
echo $date->format('d/m/Y H:i:s');
 



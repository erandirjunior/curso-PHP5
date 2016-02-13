<?php

//SUBTRAIR UMA DATA
/*$date = new DateTime(date('Y-m-d H:i:s'), new DateTimeZone('America/Fortaleza'));
$intervalo = new DateInterval("P10DT1H");

$date->sub($intervalo);
echo $date->format('d-m-Y H:i:s');*/

//DIFERENÇA ENTRE DATAS
$date = new DateTime(date('Y-m-d H:i:s'), new DateTimeZone('America/Fortaleza'));
//$date->setTimezone($timezone);
//$date->setDate(2015, 12, 15);

$vencimento = new DateTime();
$vencimento->setTimezone(new DateTimeZone('America/Fortaleza'));
$vencimento->setDate(2016, 07, 25);
$vencimento->setTime(20, 15, 25);
$diferenca = $date->diff($vencimento);


echo "Faltam ".$diferenca->d." dias ".$diferenca->m." mes(es) e ".$diferenca->y." ano(s) ".$diferenca->h." horas ".$diferenca->i." minuto(s) ".$diferenca->s." segundo(s), para chegar na data ";
echo $vencimento->format("d/m/Y H:i:s");
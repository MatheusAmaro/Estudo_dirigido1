<?php

print "Leia a quantidade de dias , horas, minutos e segundos e depois calcule";

$dias= input (Digite a quantidade de dias :);
$horas= input (Digite a quantidade de horas :);
$minutos= input (Digite a quantidade de minutos :);
$segundos= input (Digite a quantidade de segundos :);

$totalcalculado = (dias*24*60*60) + (horas*60*60) + (minutos*60) + segundos

print dias,"$dias",horas,"$horas",minutos,"$minutos",segundos,"segundos representam", totalcalculado,"$segundos")

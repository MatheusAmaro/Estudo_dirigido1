<?php

print "Leia a quantidade de dias , horas, minutos e segundos e depois calcule";

print"Digite a quantidade de dias :";
$dias = (int) fgets (STDIN); 
print"Digite a quantidade de horas :";
$horas = (int) fgets (STDIN);
print"Digite a quantidade de minutos :";
$minutos = (int) fgets (STDIN);
print"Digite a quantidade de segundos";
$segundos = (int) fgets (STDIN);

$totalcalculado = (dias*24*60*60) + (horas*60*60) + (minutos*60) + (segundos*1);

print "O total de dias escrito foi $dias ";
print "A quantidade de horas escrita foi $horas "; 
print" A quantidade de minutos foi $minutos "; 
print" A quantidade de segundos foi $segundos ";

print"Depois de calcula o resultado foi $totalcalculado";


<?php

print "Leia a quantidade de dias , horas, minutos e segundos e depois calcule";

print"Digite a quantidade de dias :";
$dias = (int) fgets (STDIN); 
$horas =  $dias*24 ;
$minutos = $horas*60 ;
$segundos = $minutos*60 ;

print"O total é de $dias dias. $horas horas. $minutos minutos.$segundos segundos";<?php

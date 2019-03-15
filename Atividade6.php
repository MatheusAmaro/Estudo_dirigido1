<?php

print "Converta Celsius para Fahrenheit";
print "Escreva qualquer Temperatura em Celsius :";

$C= (int) fgets (STDIN);
print "Agora converta Celsius para Fahrenheit :";
$F= 9*$C/5 + 32;

print "A temperatura convertida para Fahrenheit foi : $F";


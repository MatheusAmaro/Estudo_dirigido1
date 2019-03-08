<?php

print" Por quantos dias você alugou esse carro ?:";
$dias_uteis = (int) fgets (STDIN);
  
print" Quantos Km você percoreu com o carro :";
$km_corridos =(int) fgets (STDIN);

print" Qual será o valor que deverá pagar ao fim da viajem, lembre-se o carro custa por dia R$60,00 por dia e R$0,15 por Km percorrido :";

$preço_1 = $km_corridos*0.15;
$preço_2 = $dias_uteis*60;

$valor_total = $preço_1 + $preço_2;

print" Você ira pagar $valor_total pela viagem.";

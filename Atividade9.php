<?php

//Faça um Programa para uma loja de tintas. O programa deverá pedir o tamanho em metros
quadrados da área a ser pintada. Considere que a cobertura da tinta é de 1 litro para cada 6 metros
quadrados e que a tinta é vendida em latas de 18 litros, que custam R$ 80,00 ou em galões de 3,6 litros,
que custam R$ 25,00. Informe ao usuário as quantidades de tinta a serem compradas e os respectivos
preços em 3 situações:
a. comprar apenas latas de 18 litros;
b. comprar apenas galões de 3,6 litros;
c. misturar latas e galões, de forma que o preço seja o menor. Acrescente 10% de folga e sempre
arredonde os valores para cima, isto é, considere latas cheias. //
-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/- 

<?php

$area= 10;

#lata
$lata_preco=80;
$lata_rendimento=108;

#galao
$galao_preco=25;
$galao_rendimento=21.6;//3,6*6//

//Questão (a) comprar apenas latas de 18 litros;//

$lata_redimento=108;
$lata_custo =$latas_gtd * $lata_preco;
$lata_gtd= ceil($area/$lata_rendimento);

print $lata_gta;


//Questão (b) comprar apenas galões de 3,6 litros;//

$galao_redimento= 21.6;
$galao_custo=$galao_gtd * $galao_preco;
$galao_gtd= ceil($area/$galao_redimento);

//Questão (c) misturar latas e galões, de forma que o preço seja o menor. Acrescente 10% de folga e sempre arredonde os valores para cima, isto é, considere as latas cheias;//

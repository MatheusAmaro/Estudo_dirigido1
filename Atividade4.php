<?php 

print "Solicite o preço do produto :";

print "O preço do produto é : ";

$valor_produto=  (int) fgets (STDIN);

print"Qual o desconto do produto :";

$desconto_produto= (int) fgets (STDIN);

print"Agora calcule para chegar ao valor com desconto";

$valor_desconto=(valor_produto*desconto_produto)/100;

print"Agora com o desconto já calculado, quantos você ira pagar";

$novo_preco= $preco_atual-$valor_desconto;

print" O valor a pagar pelo produto foi: $novo_preco";

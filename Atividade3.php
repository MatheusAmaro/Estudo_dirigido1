<?php

print"Escreva o valor do sálario :";

$salario= (int) fgets (STDIN); 

print"Agora coloque a porcentagel de aumento";

$aumento= (int) fgets (STDIN);

$novo_salario =($aumento/100.0 * $salario) + $salario;

$valor_aumento = $novo_salario - $salario;

print " Novo salario foi : $novo_salario ";
print "O novo salario com aumento: $valor_aumento";

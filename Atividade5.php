<?php

print "Calcule o tempo de viagem de um carro :";

print "Digite a distancia em Km : ";

$dist= (int) fgets (STDIN);

print "Digite a velocidade do carro: ";

$velo= (int) fgets (STDIN); 

$tempo= $dist/$velo ;

print ("O tempo da viagem de carro foi $tempo ");

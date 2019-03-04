<?php

def conversaoCparaF(celsius):
fahrenheit=9*celsius/5+32
return fahrenheit

celsius=eval(input(" Digite a temperatura em Celsius :"))
print("O valor da conversão de Celsius para Fahrenheit foi :",conversaoCparaF(celsius))

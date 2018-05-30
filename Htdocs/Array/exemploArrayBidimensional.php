<?php 

$carros [0][0] = "GM";
$carros [0][1] = "Cobalt";
$carros [0][2] = "Onix";
$carros [0][3] = "Camaro";

$carros [1][0] = "Ford";
$carros [1][1] = "Fiesta";
$carros [1][2] = "Fusion";
$carros [1][3] = "Eco sport";

echo $carros[0][0] . " ";

echo reset ($carros [1]);


/*
current() - Retorna o elemento corrente em um array
each() - Retorna o par chave/valor corrente de um array e avança o seu cursor
prev() - Retrocede o ponteiro interno de um array
reset() - Faz o ponteiro interno de um array apontar para o seu primeiro elemento
next() - Avança o ponteiro interno de um array
*/


?>
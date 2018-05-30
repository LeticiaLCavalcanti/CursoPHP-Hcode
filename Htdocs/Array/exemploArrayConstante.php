<?php 


define("BANCO_DE_DADOS", [ //Uma boa prática é deixar as constantes sempre em letra maiúscula.

'127.0.0.1',
'root',
'password',
'test'

]); //caso queira transformar a constante em case insensitive podemos colocar uma virgula após o conchete acompanhada de true.


print_r(BANCO_DE_DADOS);


//Não exibiu pois na minha maquina (estágio) houve algum conflito com a configuração do ambiente dev. Sendo meu php o 5.6.32.... 

?>
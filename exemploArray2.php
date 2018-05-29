<?php 

$pessoas = array ();

array_push($pessoas, array(

 'nome' => 'João',
 'idade' => 20

));

array_push($pessoas, array(

 'nome' => 'Maria',
 'idade' => 22

));

//print_r($pessoas); EXIBE TODOS OS ARRAYS

print_r($pessoas[0]['nome']); //EXIBE APENAS OS DADOS PASSADOS, NESSE CASO O PRIMEIRO NOME.

?>
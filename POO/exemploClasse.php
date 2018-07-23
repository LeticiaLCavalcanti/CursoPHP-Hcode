<?php 

class Pessoa {

	public $nome; //atributo

	public function falar(){ //metodo

		return "O meu nome é" .$this->nome;
		 // sempre que for referenciar um atributo dentro de um método, deve-se usar $this-> antes do atributo.
	}



}

$joao = new Pessoa();
$joao->nome = " João da Silva";
echo $joao->falar();



?>
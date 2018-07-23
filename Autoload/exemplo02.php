<?php

function IncluirClasse($nomeClasse){

	if(file_exists($nomeClasse.".php") === true){
		require_once($nomeClasse.".php");
	}

}

spl_autoload_register("IncluirClasse"); // procura na propria pasta
spl_autoload_register(function($nomeClasse){ //procura dentro da pasta que vc determinar

		if(file_exists("abstrata". DIRECTORY_SEPARATOR .$nomeClasse.".php") === true){
		require_once("abstrata". DIRECTORY_SEPARATOR .$nomeClasse.".php");
	} 

});

$carro = new DelRey();

$carro->acelerar(80);

?>

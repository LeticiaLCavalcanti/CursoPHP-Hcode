<?php 

function test($callBack){

	//processo lento

	$callBack();

 
}
 test(function(){

 	echo "terminou";

 });


?>
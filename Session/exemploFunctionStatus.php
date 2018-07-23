<?php

	require_once("config.php");

	echo "<br>";

	session_save_path();

	echo "<br>";

	var_dump(session_status());


	echo "<br>";

	switch(session_status()) {

		case PHP_SESSION_DISABLED:
		echo "as sessões estiveram desabilitadas";
		break;

		case PHP_SESSION_NONE:
		echo "as sessões estiveram habilitadas mas nenhuma existe";
		break;

		case PHP_SESSION_ACTIVE:
		echo "as sessões estiveram habilitadas e uma sessão existe";
		break;


	}



?>
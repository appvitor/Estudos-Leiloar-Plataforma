<?php

	spl_autoload_reqister(function($nameClass){

		$dirClass = 'class';
		$fileName = $dirClass.DIRECTORY_SEPARATOR.
		$nameClass.'.php'; //DIRECTORY_SEPARATOR == '/' caso rode windows e '\' no linux, isto facilita a interoperabilidade

		if(file_exists($fileName)) {
			require_once($fileName);
		}

	});

?>
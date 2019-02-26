<?php
	function __autoload($nomeClass){ //AutoLoad é uma forma de carregar automaticamente arquivos necessários, onde caso um arquivo esteja atrelado a outro, será carregado automaticamente se estiver no msm diretório
		require_once('orientacaoObjetos2.php');
	}

	function incluirClasses($nomeClasse){
		if(require_once($nomeClasse.'.php') === true){
			require_once($nomeClasse.'php');
		}
	}

//	spl_autoload_register(function($nomeClasse)); //spl == Standard PHP Library

	$marley = new Cachorro();
	echo $marley->falar();
?>
<?php
	require_once('config.php');

	use Cliente\Cadastro; //Este comando é como se mandasse acessar o arquivo Cadastro dentro d pasta Cliente

	$cad = new Cadastro('Vítor', 'vitorEmail@hotmail.com', 'Abc123'); //Sendo assim, foi instanciada aquela classe

	print_r($cad->getNome().' '.$cad->getEmail().' '.$cad->getSenha());
	$cad->registrarVenda();
?>
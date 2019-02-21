<?php

	$conn = new mysqli('localhost', 'root', '', 'dbphp'); //criando a conexão com o banco, passando qual o endereço da conexão, usuario, senha, nome do DB

	if($conn->connect_error) {
		echo 'ERROR: '.$conn->connect_error;
	}

	$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");//preparação do comando p/ ser enviado ao DB, os ? serão trocados pelos valores
	$stmt->bind_param('ss', $login, $password); //declaração dos tipos de dados q serão enviados (s=string, i=int, c=char, d=date), seguidos dos valores
	
	$login = 'user';
	$password = '12345';

	$stmt->execute();

	$login = 'root';
	$password = 'root123';

	$stmt->execute();

	
?>
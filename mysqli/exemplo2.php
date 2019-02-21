<?php

	$conn = new mysqli('localhost', 'root', '', 'dbphp'); //criando a conexão com o banco, passando qual o endereço da conexão, usuario, senha, nome do DB

	if($conn->connect_error) {
		echo 'ERROR: '.$conn->connect_error;
	}

	$result = $conn->query('SELECT * FROM tb_usuarios ORDER BY deslogin');

	$dados = array();

	while($linha = $result->fetch_array()){
		//enquanto houver linhas de arquivo, continue trazendo os resultados
		//fetch_array == para cada resultado encontrado, traga como um array
		array_push($dados, $linha);
	}

	echo json_encode($dados);


?>
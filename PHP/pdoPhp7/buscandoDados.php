<?php

	$conn = new PDO("mysql: dbname=dbphp; host=localhost", "root", ""); //conectando no DB, dizendo o tipo dele que no caso é mysql, o nome dele e o endereço de conexão, em seguida usuario e senha

	$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin"); //prepare o comando a ser enviado
	$stmt->execute(); //execute o comando preparado

	$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC); //fetchAll() == fatia todos as linhas, já realiza a organização dos dados sozinho, diferente do mysqli que é necessário fazer isto manualmente. PDO::FETCH_ASSOC == diminui a quantidade de informações, retira o índice do banco, traz apenas as informações necessárias

	var_dump($resultados);

	foreach ($resultados as $row => $value) {

		foreach ($row as $key => $value) {
			echo '<strong>'.$key.'</strong>'.$value.'<br>';
		}
		echo '----------------------------------------------';
	}

?>
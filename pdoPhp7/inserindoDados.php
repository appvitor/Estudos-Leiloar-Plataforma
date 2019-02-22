<?php

	$conn = new PDO("mysql: dbname=dbphp; host=localhost", "root", ""); //conectando no DB, dizendo o tipo dele que no caso é mysql, o nome dele e o endereço de conexão, em seguida usuario e senha

	$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)"); //prepare o comando a ser enviado, por segurança, crie "apelidos" p/ os valores a serem enviados, neste caso, :LOGIN, :PASSWORD
	
	$login = 'jose';
	$password = 'senha567';

	$stmt->bindParam(":LOGIN", $login); //após definidos os valores, passe os apelidos q serão utilizados p/ eles, neste caso, a variavel $login será passada através do "apelido" :LOGIN
	$stmt->bindParam(":PASSWORD", $password);

	$stmt->execute(); //execute o comando preparado

	echo 'Inserido OK!';
?>
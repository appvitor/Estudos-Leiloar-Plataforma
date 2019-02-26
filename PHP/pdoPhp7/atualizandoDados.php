<?php

	$conn = new PDO("mysql: dbname=dbphp; host=localhost", "root", ""); //conectando no DB, dizendo o tipo dele que no caso é mysql, o nome dele e o endereço de conexão, em seguida usuario e senha

	$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

	$password = 'senhaNova1';
	$id = 4;
	$stmt->bindParam(':LOGIN', $login);
	$stmt->bindParam(':PASSWORD', $password);
	$stmt->bindParam(":ID", $id);
	$stmt->execute();

	echo 'Dados alterados OK!';
?>
<?php

	$conn = new PDO("mysql: dbname=dbphp; host=localhost", "root", ""); //conectando no DB, dizendo o tipo dele que no caso é mysql, o nome dele e o endereço de conexão, em seguida usuario e senha

	$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

	$id = 4;
	$stmt->bindParam(":ID", $id);
	$stmt->execute();

	echo 'Dados apagados OK!';
?>
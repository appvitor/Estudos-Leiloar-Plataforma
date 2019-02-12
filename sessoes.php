<?
	session_start(); // este comando habilita a utilização de diferentes sessões de uso na página

	$_SESSION["nome"] = "Hcode";
	echo "<br>".$_SESSION["nome"];	
?>
<?php echo "<h1>Hello World!</h1>"; ?>
<?php $nome = "Vitor"; //criação de variável ?> 
<? echo $nome; ?>
<? var_dump($nome) //função para saber tudo da variável ?>
<? unset($nome) //limpar a info da variável ?>
<? $sobreNome = "Pires Correa"; ?>
<? if(isset($sobreNome)){
	echo $sobreNome;
	//ecoa a var apenas se tiver algum valor
} ?>
<? $nome = "Vitor"; ?>
<? $nomeCompleto = $nome." ".$sobreNome //o ponto entre duas ou mais strings concatena elas ?>
<? echo $nomeCompleto ?>
<? $ano = 2019; $salario = 5500.99; $bloqueado = false; ?>
<? $frutas = array("abacaxi", "laranja", "uva"); //criação de array, que começam em 0 ?>
<? echo $frutas[2] //manipular arrays ?>
<? $nascimento = new DateTime(); //criar objeto ?>
<? $arquivo = fopen("arquivo.tipo", "permissoes"); //acessar arquivo ?>

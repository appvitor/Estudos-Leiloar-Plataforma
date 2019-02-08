<?php echo "<h1>Hello World!</h1>"; ?>
<?php $nome = "Vitor"; //criação de variável ?> 
<? echo $nome; ?>
<? var_dump($nome) //função para saber tudo da variável, tmbm pode ser usada como função de comparação, retonando um bool ?>
<? unset($nome) //limpar a info da variável ?>
<? $sobreNome = "Pires Correa"; ?>
<? if(isset($sobreNome)){
	echo "<br>";
	echo $sobreNome;
	//ecoa a var apenas se tiver algum valor
} ?>
<? $nome = "Vitor"; ?>
<? $nomeCompleto = $nome." ".$sobreNome //o ponto entre duas ou mais strings concatena elas ?>
<? echo "<br>"; echo $nomeCompleto ?>
<? $ano = 2019; $salario = 5500.99; $bloqueado = false; ?>
<? $frutas = array("abacaxi", "laranja", "uva"); //criação de array, que começam em 0 ?>
<? echo "<br>"; echo $frutas[2]; //manipular arrays ?>
<? $nascimento = new DateTime(); //criar objeto ?>
<? echo "<br>"; $arquivo = fopen("arquivo.tipo", "permissoes"); //acessar arquivo ?>
<? $ip = $_SERVER["REMOTE_ADDR"]; //obter IP do usuário ?>
<? echo "<br>"; echo $ip; ?>
<? $ip = $_SERVER["SCRIPT_NAME"]; //obter nome e local do arquivo acessado ?>
<? echo $ip ?>
<? $frase = "teste" ?>
<? $frase .= " de string" //pegar seu conteudo e concatenar com ele ?>
<?//PHP 7: var_dump($ano <=> $salario) //operador de comparação que retorna -1 ou 0 ou 1 ?>
<? $num1 = NULL; $num2 = NULL; $num3 = 10; ?>
<?//PHP 7: echo $num1 ?? $num2 ?? $num3 //mostra num1 se nao for NULL, se for, mostra o num2, se ele tmbm for NULL, mostra o 3 ?>
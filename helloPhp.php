<?php echo "<h1>Hello World!</h1>"; ?>
<?php $nome = "Vitor"; //criação de variável ?> 
<? echo $nome; ?>
<? var_dump($nome) //função para saber tudo da variável, tmbm pode ser usada como função de comparação, retonando um bool ?>
<? unset($nome) //limpar a info da variável ?>
<? $sobreNome = "Pires Correa"; ?>
<? 
	if(isset($sobreNome)){
		echo "<br>".$sobreNome; //ecoa a var apenas se tiver algum valor
	} 
?>
<? $nome = "Vitor"; ?>

<? $nomeCompleto = $nome." ".$sobreNome //o ponto entre duas ou mais strings concatena elas ?>
<? echo "<br>".$nomeCompleto ?>

<? $ano = 2019; $salario = 5500.99; $bloqueado = false; ?>
<? $frutas = array("abacaxi", "laranja", "uva"); //criação de array, que começam em 0 ?>
<? echo "<br>".$frutas[2]; //manipular arrays ?>
<? $nascimento = new DateTime(); //criar objeto ?>

<? echo "<br>".$arquivo = fopen("arquivo.tipo", "permissoes"); //acessar arquivo ?>
<? $ip = $_SERVER["REMOTE_ADDR"]; //obter IP do usuário ?>
<? echo "<br>".$ip; ?>
<? $ip = $_SERVER["SCRIPT_NAME"]; //obter nome e local do arquivo acessado ?>
<? echo "<br>".$ip ?>

<? $frase = "teste" ?>
<? $frase .= " de string" //pegar seu conteudo e concatenar com ele ?>
<? echo "<br>".$frase ?>
<?//PHP 7: var_dump($ano <=> $salario) //operador de comparação que retorna -1 ou 0 ou 1 ?>
<? $num1 = NULL; $num2 = NULL; $num3 = 10; ?>
<?//PHP 7: echo $num1 ?? $num2 ?? $num3 //mostra num1 se nao for NULL, se for, mostra o num2, se ele tmbm for NULL, mostra o 3 ?>
<? //Ao utilizar aspas duplas, o conteudo das vars é acessado e exibido, as aspas simples mostram a variavel em si, não seu conteúdo ?>

<? echo "<br>".strtoupper($nomeCompleto); //função p/ string ficar em maiusculo ?>
<? echo "<br>".strtolower($nomeCompleto); //função p/ string ficar em minusculo ?>
<? echo "<br>".ucwords($nomeCompleto); //função p/ 1° letra de cada palavra da string ficar em maiusculo ?>
<? echo "<br>".ucfirst($nomeCompleto); //função p/ 1° letra da string ficar em maiusculo ?>
<? echo "<br>".str_replace("Vitor", "Appvitor", $nomeCompleto); //função p/ substituir elementos da string ?>
<? echo "<br>".strpos($nomeCompleto, "Pires"); //função p/ saber em qual posição da string está o elemento buscado ?>
<? echo "<br>".substr($nomeCompleto, 0, 6); //função p/ 1° letra de cada palavra da string ficar em maiusculo ?>
<? echo "<br>".strlen($nomeCompleto); //função que retorna o tamanho da string ?>

<?
	include "funcaoSomar.php"; //inclusão de um arquivo de código externo
	$resultado = somar(10, 20);
	echo "<br>".$resultado;
	//tmbm existe o REQUIRE ao invés do INCLUDE, onde este EXIGE que o código exista e esteja funcionando corretamente, caso contrário, gerará Erro Fatal, e no PHP 7 gerará uma Exception 
	//para subir diretorios ao incluir arquivos, usar .. (dois pontos)
?>

<?
	if($salario > $ano) {
		echo "<br>"."O salário é maior que o ano atual";
	}
	else if ($ano > $salario) {
		echo "<br>"."O ano é maior do que o salário atual";
	}
	else {
		echo "<br>"."Ambos os valores são iguais";	
	}
?>

<?
	$numDiaSemana = date("w");
	switch ($numDiaSemana){
		case 0:
			echo "<br>"."Domingo";
		break;
		case 1:
			echo "<br>"."Segunda";
		break;
		case 2:
			echo "<br>"."Terça";
		break;
		default: 
			echo "<br>"."Dia ainda não definido";
		break;
	}
?>

<?
	for ($i=0; $i <= 100; $i+=25) { 
		if ($i == 50) continue; //o CONTINUE basicamente diz "ignore, pule esta parte do laço"
		echo "<br>".$i;
		//Caso um loop infinito ocorra, 
	}
?>

<?
	echo "<br> <select>";
	for ($i=date("Y"); $i >= date("Y")-50 ; $i--) { 
		echo "<option value=".$i.">".$i."</option>"; //utilizando a informação do laço para gerar as opções disponíveis ao usuário
	}
	echo "</select>";
?>

<?
	echo "<select>";
	$meses = array("Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez");
	foreach ($meses as $index => $mes) {
		echo "<option value=".$index.">".$mes."</option>";
	}
	echo "</select>";
?>

<form> 
	<input type="text" name="nome" placeholder="Nome">
	<input type="date" name="nascimento">
	<input type="submit" name="OK" value="Enviar">
	<!--Criação do formulario com seus devidos campos em HTML -->
</form>
<?
	if(isset($_GET)) { //verificação se os campos foram preenchidos e enviados
		foreach ($_GET as $key => $value) {
			//a informação chega como um objeto, com várias diferentes infos, incluindo o botao de enviar, onde cada uma depois é exibida
			echo "Nome do Campo: ".$key." ";
			echo "Valor do Campo: ".$value." ";
			echo "<hr>";
		}
	}
?>
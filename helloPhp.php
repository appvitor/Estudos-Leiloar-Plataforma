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
<?
	$condicao = true;
	while ($condicao) {
		$numero = rand(1, 10); //rand sorteio numero randomicamente
		if($numero === 3) {
			echo "TRÊS!!!";
			$condicao = false;
		}
		else echo $numero . " ,";
	}
?>
<?
	$total = 100;
	$desconto = 0.9;
	do {
		$total *= $desconto;
	} while($total > 100);
	echo "<br>".$total;
?>
<?
	echo "<br>";
	print_r($frutas); //apresentar array completo
	$carros[0][0] = "GM";
	$carros[0][1] = "Cobalt";
	$carros[0][2] = "Onix";
	$carros[0][3] = "Camaro";

	$carros[1][0] = "Ford";
	$carros[1][1] = "Fiesta";
	$carros[1][2] = "Fusion";
	$carros[1][3] = "Eco Sport";

	echo "<br>".$carros[0][3]; //apresentar item matriz
	echo "<br>".end($carros[0]); //apresentar ultimo item de determinada posição

	$pessoas = array();
	array_push($pessoas, array('nome'=>'João', 'idade'=>20));
	array_push($pessoas, array('nome'=>'Glaucio', 'idade'=>25));

	echo "<br>";
	print_r($pessoas);
?>

<?
	$json = '[{"nome": "Jo\u00e3o","idade": 20},{"nome": "Glaucio","idade": 25}]';
	json_decode($json); //O comando decode traz o conteúdo do JSON para dentro do código PHP, já o encode exporta o conteúdo p/ fora
?>

<?
	//define é o comando para criar constantes
	define("SERVIDOR", "127.0.0.1"); //sempre interessante nomear constantes em maiusculo, facilitar visualização
	echo "<br>".SERVIDOR;
	//define("BANCO_DE_DADOS", ['127.0.0.1', 'root', 'password', 'test']); No PHP 7 constantes podem ser um Array
	echo "<br>".PHP_VERSION;
?>

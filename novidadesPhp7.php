<?
//Este arquivo poderá ser apenas utilizado com o PHP 7 ou superior

	$ano = 2019; $salario 5590,99;
	echo "<br>".var_dump($ano <=> $salario) //operador de comparação que retorna -1 ou 0 ou 1

	$num1 = NULL; $num2 = NULL; $num3 = 10;
	echo "<br>".$num1 ?? $num2 ?? $num3 //mostra num1 se nao for NULL, se for, mostra o num2, se ele tmbm for NULL, mostra o 3

	function soma(float ...$valores):float { //o reticencias permite a passagem de quantas referencias desejadas, o : indica o tipo de retorno da function
		return array_sum($valores);
	}
	echo "<br>".soma(30.56, 40.44, 50, 90, 10);
?>
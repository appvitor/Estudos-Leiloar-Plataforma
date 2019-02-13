<?
//Objeto == uma variável que representa uma Classe
	setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

	class Pessoa {
		public $nome; //atributos públicos

		public function falarNome(){ //Método
			return '<br>'.'O meu nome é '.$this->nome;
		}
	}

	$joao = new Pessoa();
	$joao->nome = "Joao Pedro";
	echo $joao->falarNome();
?>
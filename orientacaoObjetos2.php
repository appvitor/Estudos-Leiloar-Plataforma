<?php

	class Pessoa {
		public $nome = 'Rasmus Lerdorf';
		protected $idade = 24; //apenas classes que herdam desta podem acessar
		private $senha = '123456'; //apenas a própria classe consegue acessar, nem os herdeiros conseguem

		public function verDados(){
			echo $this->nome.'<br>';
			echo $this->idade.'<br>';
			echo $this->senha.'<br>';
		}
	}

	$objeto = new Pessoa();
	$objeto->verDados();

	class Programador extends Pessoa {

		public function verDados(){ //sobreescrevendo o método da classe pai
			echo get_class($this); //funcao p/ obter de qual classe este objeto foi instanciado
			echo $this->nome.'<br>';
			echo $this->idade.'<br>';
		}
	}

	$funcionario = new Programador();
	$funcionario->verDados();

?>
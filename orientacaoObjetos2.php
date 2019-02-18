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

	class Documento {
		private $numero;

		public function __construct($numero){
			$this->numero = $numero;
		}

		public function getNumero(){
			return $this->numero;
		}

	}

	class Cpf extends Documento {

		public function validar(){
			$numeroCpf = $this->getNumero();
			return true;
		}

	}

	$doc = new Cpf('12345678900');
	$doc->validar();
	var_dump($doc->validar());
	echo '<br>';
	echo $doc->getNumero();

	interface Veiculo { //todos os métodos de interface não possuem corpo e devem ser públicos, não pode ser instanciada
		public function acelerar($velocidade);
		public function freiar($velocidade);
		public function trocarMarcha($marcha);
	}

	//Não é possível instanciar classes abstratas também
	abstract class Automovel implements Veiculo {

	}

	class Veloster extends Automovel { //ao implementar a interface, o corpo dos métodos devem ser criados 
		public function acelerar($velocidade){
			echo '<br>'.'Veloster acelerou até '.$velocidade.'Km/h';
		}
		public function freiar($velocidade){
			echo '<br>'.'Veloster freiou até '.$velocidade.'Km/h';
		}
		public function trocarMarcha($velocidade){
			echo '<br>'.'Veloster engatou a '.$velocidade.'° marcha';
		}
	}

	$meuCarro = new Veloster();
	$meuCarro->acelerar(120);
	$meuCarro->freiar(60);
	$meuCarro->trocarMarcha(5);

	abstract class Animal {

		public function falar(){
			return 'Som';
		}

		public function mover(){
			return 'Andar';
		}
	}

	class Cachorro extends Animal {

		public function falar(){
			return '<br>'.'Au-Au!';
		}

		public function andar(){
			return '<br>'.'Patinhas de cachorro';
		}
	}

	class Gato extends Animal {
		
		public function falar(){
			return '<br>'.'Miau';
		}

		public function andar(){
			return '<br>'.'Patinhas de gato';
		}
	}

	class Passaro extends Animal {

		public function falar(){
			return '<br>'.'Piar';
		}

		public function andar(){
			return '<br>'.'Voar e '.parent::mover(); //chamada do método mover da classe pai
		}
	}

	$pluto = new Cachorro();
	echo $pluto->falar(); //utilização de polimorfismo, os métodos falar e andar funcionam de maneira diferente p/ cada tipo de instancia
	echo $pluto->andar();

	$gatinho = new Gato();
	echo $gatinho->falar();
	echo $gatinho->andar();

	$picaPau = new Passaro();
	echo $picaPau->falar();
	echo $picaPau->andar();
?>
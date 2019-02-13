<?
//Objeto == uma variável que representa uma Classe
	setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

	class Pessoa {
		public $nome, $idade; //atributos públicos

		public function falarNome(){ //Método
			return '<br>'.'O meu nome é '.$this->nome;
		}
	}

	$joao = new Pessoa();
	$joao->nome = "Joao Pedro";
	echo $joao->falarNome();

	class Carro {
		private $modelo;
		private $motor;
		private $ano;

		public function getModelo(){
			return $this->modelo;
		}

		public function setModelo($receberModelo) {
			$this->modelo = $receberModelo;
		}

		public function getMotor(){
			return $this->motor;
		}

		public function setMotor($receberMotor) {
			$this->motor = $receberMotor;
		}

		public function getAno(){
			return $this->ano;
		}

		public function setAno($receberAno) {
			$this->ano = $receberAno;
		}

		public function exibir(){
			return array(
				'modelo'=>$this->getModelo(),
				'motor'=>$this->getMotor(),
				'ano'=>$this->getAno()
			);
		}
	}

	$veloster = new Carro();
	$veloster->setModelo("Veloster");
	$veloster->setMotor("1.6 Turbo");
	$veloster->setAno(2016);
	echo '<br>';
	print_r($veloster->exibir());
?>
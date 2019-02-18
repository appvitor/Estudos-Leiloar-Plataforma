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

	$veloster = new Carro(); //instancia da classe Carro
	$veloster->setModelo("Veloster"); //setando os valores para seus atributos
	$veloster->setMotor("1.6 Turbo");
	$veloster->setAno(2016);
	echo '<br>';
	print_r($veloster->exibir()); //chamando o método que exibe seus atributos

	class Documento {
		private $numero;

		public function getNumero(){
			return $this->numero;
		}

		public function setNumero($receberNumero){
			$resultado = Documento::validarCpf($receberNumero); //Chamada do método dentro da Classe (método estático == permite ser acessado sem instancia de objeto)
			if($resultado == true){
				$this->numero = $receberNumero;
			}
			else{
				throw new Exception("CPF Ínvalido", 1);
			}
		}

		public static function validarCpf($cpf) {
			
			//Verifica se a função foi chamada sem parâmetro
			if(empty($cpf)) {
		        return false;
		    }
		 	
		 	//Elima possível máscara
		    $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;
		    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
		     
		    //Verifica se o tamanho está correto
		    if (strlen($cpf) != 11) {
		        echo "length";
		        return false;
		    }
		    //Verifica se não foi inserida uma das sequencias abaixo
		    else if ($cpf == '00000000000' || 
		        $cpf == '11111111111' || 
		        $cpf == '22222222222' || 
		        $cpf == '33333333333' || 
		        $cpf == '44444444444' || 
		        $cpf == '55555555555' || 
		        $cpf == '66666666666' || 
		        $cpf == '77777777777' || 
		        $cpf == '88888888888' || 
		        $cpf == '99999999999') {
		        return false;
		    } 
		    else {   
			//Calcular digitos verificadores para validar		         
		        for ($t = 9; $t < 11; $t++) {
		             
		            for ($d = 0, $c = 0; $c < $t; $c++) {
		                $d += $cpf{$c} * (($t + 1) - $c);
		            }
		            $d = ((10 * $d) % 11) % 10;
		            if ($cpf{$c} != $d) {
		                return false;
		            }
		        }

		        return true;
		    }
		}
	}

	$cpf = new Documento();
	$cpf->setNumero('61062279000');
	echo'<br>';
	var_dump($cpf->getNumero());

	class Endereco {
		private $logradouro;
		private $numero;
		private $cidade;

		//Método construtor no php
		public function __construct($log, $num, $cid){
			$this->logradouro = $log;
			$this->numero = $num;
			$this->cidade = $cid;
		}

		public function __destruct(){
			var_dump('DESTRUIR');
		}

		public function __toString(){
			return $this->logradouro.', '.$this->numero.', '.$this->cidade;
		}
	}

	$meuEndereco = new Endereco('Rua Camelias', '69', 'Curitiba');
	echo '<br>';
	var_dump($meuEndereco);
	echo '<br>';
	echo $meuEndereco; //chamada do método toString, que deve retornar um texto. Exemp: facilitar visualização de seu conteúdo
	unset($meuEndereco); //Chamada do método desconstrutor, removendo ele da memória. Exemp: desconectar de um banco de dados, encerrar sessão de usuario
?>
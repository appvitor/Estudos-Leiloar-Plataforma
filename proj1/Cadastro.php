<?php

	class Cadastro {
		private $nome;
		private $email;
		private $senha;
		
		public function __construct($nome, $email, $senha){
			$this->nome = $nome;
			$this->email = $email;
			$this->senha = $senha;
		}

		public function getNome(){
			return $this->nome;
		}
		public function getEmail(){
			return $this->email;
		}
		public function getSenha(){
			return $this->senha;
		}

		public function __toString(){
			return json_encode(array(
				'nome'=>$this->getNome();
				'email'=>$this->getEmail();
				'senha'=>$this->getSenha();
			));
		}

	}

?>

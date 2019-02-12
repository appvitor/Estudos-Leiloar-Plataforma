<?
	$hierarquia = array(
		array(
			'nome_cargo'=>'CEO', 
			'subordinados'=>array(
				//Inicio: Diretores
				array(
					'nome_cargo'=>'Diretor Comercial',
					'subordinados'=>array(
						//inicio Gerente de Vendas
						array(
							'nome_cargo'=>'Gerente de Vendas'
						)
						//Termino Gerente de Vendas
					)	
				),
				//Termino Diretor Comercial
				//Inicio Diretor Financeiro
				array(
					'nome_cargo'=>'Diretor Financeiro',
					'subordinados'=>array(
						//Inicio Gerente de Contas a Pagar
						array(
							'nome_cargo'=>'	Gerente de Contas a Pagar',
							'subordinados'=>array(
								//Inicio Supervisor de Pagamentos
								array(
									'nome_cargo'=>'Supervisor de Pagamentos'
								)
								//Termino Supervisor de Pagamentos
							)			
						)
						//Termino Gerente de Contas a Pagar
					)
				)
				//Termino Diretor Financeiro
			)
		)		
	);
?>

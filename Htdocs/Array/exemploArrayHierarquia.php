<?php 

	$hierarquia = array(
		array(
			'nome_cargo'=>'CEO',
			'subordinados'=>array(
				//iniciado dir comercial
				array(
					'nome_cargo' => 'Diretor comercial',
					'subordinados' => array(
						//iniciado gerente de vendas
						array(
						'nome_cargo' => 'Gerente de vendas'
						)
					//termino gerente de vendas
					)
				),
				//termino diretor comercial
				//inicio dir financeiro
				array(
					'nome_cargo' => 'Diretor financeiro',
					'subordinados' => array(
						// inicio gerente de contas
						array(
						'nome_cargo' => 'gerente de contas',
						'subordinados' => array(
							//inicioo supervisao
						 array(
							'nome_cargo' => 'supervisor'
							)
						 //termino supervisor
					)
				),
				//termino gerente de contas a pagas
			//inicio gerente de compras
						array(
							'nome_cargo' => 'supervisor de pagamentos'
							)
						//termino supervisor de pagamentos
						)
					),
				//termino gerente de contas a pagar
				//inicio gerente de compras
			array(
				'nome_cargo' => 'gerente de compras',
				'subordinados' =>array(
					//inicio supervisor de suplementos
					array(
						'nome_cargo' => 'supervisor de suplementos'
					)
					//termino supervisor de suplementos
				)
			)
			//termino gerente de compras
		)
	)
		//termino dir financeirO
					)
	)
		);


?> 
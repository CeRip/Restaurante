<?php
class Mesa extends AppModel{
	public $belongsTo =array(
		'Mesero'=>array(
			'className'=> 'Mesero',
			'foreingKey'=>'mesero_id'
			)
		);
	public $validate= array(
			'serie'=>array(
							'notBlank'=>array(
									'rule'=>'notBlank'
								),
							'numeric'=>array(
								'rule'=>'numeric',
								'message'=>'Solo numeros'
								),
							'unique'=>array(
								'rule'=> 'isUnique',
								'message'=>'La serie debe ser unica')
							),
			'puestos'=>array(
					'notBlank'=>array(
									'rule'=>'notBlank'
								),
							'numeric'=>array(
								'rule'=>'numeric',
								'message'=>'Solo numeros'
								)
				),
			'posicion'=>array(
						'rule'=>'notBlank'
				)
		);

	public $hasMany = array(
		'Orden' => array(
			'className' => 'Orden',
			'foreignKey' => 'mesa_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);		

}
?>
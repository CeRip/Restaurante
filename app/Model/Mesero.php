<?php
class Mesero extends AppModel
{
	public $validate = array(
		'dni'=>array(
						'NotBlank'=>array(
							'rule'=>'NotBlank'),
						'numeric'=>array(
							'rule'=>'numeric',
							'message'=>'Solo numeros'),
						 'unique'=>array(
                        	'rule' => 'isUnique',
                        	'message' =>'El DNI debe ser unico',
                    )
						),
		'nombre'=>array('rule'=>'NotBlank'),
		'apellido'=>array('rule'=>'NotBlank'),
		'telefono'=>array('NotBlank'=>array(
							'rule'=>'NotBlank'),
						'numeric'=>array(
							'rule'=>'numeric',
							'message'=>'Solo numeros')
						)

		);
	public $hasMany = array(
			'Mesa'=>array(
				'className'=> 'Mesa',
				'foreingKey'=>'mesero_id',
				'conditions'=>'',
				'order'=>'Mesa.serie DESC',
				'depend'=> false
				)

		);

}
?>
<?php
class Mesa extends AppModel{
	public $belongsTo =array(
		'Mesero'=>array(
			'className'=> 'Mesero',
			'foreingKey'=>'mesero_id'
			)
		);
}
?>
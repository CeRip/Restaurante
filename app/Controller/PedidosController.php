<?php
class PedidosController extends AppController{

public $helpers = array('Html','Form','Time');
	public $components=array('Flash');
	
	public function index()
	{
		$this->set('pedidos',$this->Pedido->find('all'));

	}

}

?>
<?php
class PedidosController extends AppController{

public $helpers = array('Html','Form','Time');
	public $components=array('Flash');
	
	public function index()
	{
		$this->set('pedidos',$this->Pedido->find('all'));

	}

	public function add()
	{
		if ($this->request->is('post')){
			 $this->Pedido->create();
			 if ($this->Pedido->save($this->request->data)) {
			 	$this->Flash->set('El platillo a sido añadido',['element' => 'success']);
			 	return $this->redirect(array('action'=>'index'));

			 }
			 $this->Flash->set('No se pudo agregar');
	}
		$meseros=$this->Mesa->Mesero->find('list', array('fields'=>array('id','nombre_completo')));
		$this->set('meseros', $meseros);
}

?>
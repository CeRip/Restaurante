<?php
class CocinerosController extends AppController{
	public $helpers = array('Html','Form','Time');
	public $components=array('Flash');

	public function index(){
		$this->set('cocineros',$this->Cocinero->find('all'));

	}

	
	public function ver($id=null){
		if (!$id) {
			throw new notFoudException('Datos Invalidos');
		}
		$cocinero= $this->Cocinero->findById($id);

		if(!$cocinero)
		{
			throw new notFoudException('El mesero no existe');
		}
		$this->set('cocinero', $cocinero);
	}
	
}
?>
<?php
class MesasController extends AppController{
	public $helpers = array('Html','Form','Time');
	public $components=array('Flash');

	public function index(){
		$this->set('mesas',$this->Mesa->find('all'));

	}

	public function nuevo(){
		if ($this->request->is('post')){
			 $this->Mesa->create();
			 if ($this->Mesa->save($this->request->data)) {
			 	$this->Flash->set('La mesa ha sido creada',['element' => 'success']);
			 	return $this->redirect(array('action'=>'index'));

			 }
			 $this->Flash->set('No se pudo crear la mesa');
		}
	}

	public function editar($id=null){
		if (!$id) {
			throw new NotFoundException("Datos Invalidos");
			
		}
		$mesa=$this->Mesa->findById($id);
		if (!$mesa) {
			throw new NotFoundException("No se encontro la mesa");	
		}
		if($this->request->is(array('post','put'))){
			$this->Mesa->id=$id;
			if ($this->Mesa->save($this->request->data)) {
				$this->Flash->set("La mesa a sido modificada", ['element' => 'success']);
				return $this->redirect(array('action'=>'index'));
			}
			$this->Flash->set('el registro no pudo ser modificado');
		}

		if (!$this->request->data) {
			$this->request->data=$mesa;
		}
	}
	public function eliminar($id){
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException("INCORRECTO");
			
		}
		if ($this->Mesa->delete($id)) {
			$this->Flash->set("La mesa a sido eliminada", ['element' => 'success']);
			return $this->redirect(array('action'=>'index'));
		}
	}
}

?>
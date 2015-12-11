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
	
	public function editar($id=null){
		if (!$id) {
			throw new NotFoundException("Datos Invalidos");
			
		}
		$cocinero=$this->Cocinero->findById($id);
		if (!$cocinero) {
			throw new NotFoundException("No se encontro mesero");	
		}
		if($this->request->is(array('post','put'))){
			$this->Cocinero->id=$id;
			if ($this->Cocinero->save($this->request->data)) {
				$this->Flash->set("El cocinero a sido modificado", ['element' => 'success']);
				return $this->redirect(array('action'=>'index'));
			}
			$this->Flash->set('el registro no pudo ser modificado');
		}

		if (!$this->request->data) {
			$this->request->data=$cocinero;
		}
	}
	public function eliminar($id){
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException("INCORRECTO");
			
		}
		if ($this->Cocinero->delete($id)) {
			$this->Flash->set("El cocinero a sido eliminado", ['element' => 'success']);
			return $this->redirect(array('action'=>'index'));
		}
	}
	public function nuevo(){
		if ($this->request->is('post')){
			 $this->Cocinero->create();
			 if ($this->Cocinero->save($this->request->data)) {
			 	$this->Flash->set('El cocinero ha sido creado',['element' => 'success']);
			 	return $this->redirect(array('action'=>'index'));

			 }
			 $this->Flash->set('No se pudo crear el cocinero');
		}
	}
}
?>
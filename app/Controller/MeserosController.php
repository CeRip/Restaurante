<?php
class  MeserosController extends AppController
{
	public $helpers = array('Html','Form','Time', );
	public $components=array('Flash','RequestHandler');
	
	public function index()
	{
		$this->set('meseros',$this->Mesero->find('all'));
	}
	public function ver($id=null){
		if (!$id) {
			throw new notFoudException('Datos Invalidos');
		}
		$mesero= $this->Mesero->findById($id);

		if(!$mesero)
		{
			throw new notFoudException('El mesero no existe');
		}
		$this->set('mesero', $mesero);
	}

	public function nuevo(){
		if ($this->request->is('post')){
			 $this->Mesero->create();
			 if ($this->Mesero->save($this->request->data)) {
			 	$this->Flash->set('El mesero ha sido creado',['element' => 'success']);
			 	return $this->redirect(array('action'=>'index'));

			 }
			 $this->Flash->set('No se pudo crear el mesero');
		}
	}

	public function editar($id=null){
		if (!$id) {
			throw new NotFoundException("Datos Invalidos");
			
		}
		$mesero=$this->Mesero->findById($id);
		if (!$mesero) {
			throw new NotFoundException("No se encontro mesero");	
		}
		if($this->request->is(array('post','put'))){
			$this->Mesero->id=$id;
			if ($this->Mesero->save($this->request->data)) {
				$this->Flash->set("El mesero a sido modificado", ['element' => 'success']);
				return $this->redirect(array('action'=>'index'));
			}
			$this->Flash->set('el registro no pudo ser modificado');
		}

		if (!$this->request->data) {
			$this->request->data=$mesero;
		}
	}

	public function eliminar($id){
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException("INCORRECTO");
			
		}
		if ($this->Mesero->delete($id)) {
			$this->Flash->set("El mesero a sido eliminado", ['element' => 'success']);
			return $this->redirect(array('action'=>'index'));
		}
	}
}	


?>
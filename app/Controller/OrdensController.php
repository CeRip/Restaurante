<?php
class OrdensController extends AppController{
	public $components=array('Flash','RequestHandler');
	public $helpers=array('Html','Form','Time');

	public function index(){

		$this->set('ordens',$this->Orden->find('all'));
	}

	 public function add()
    {
        $this->loadModel('Pedido', 'RequestHandler');
        
        $orden_item = $this->Pedido->find('all', array('order' => 'Pedido.id ASC'));
        
        // debug($orden_item);
        
        if(count($orden_item) > 0)
        {
            $total_pedidos = $this->Pedido->find('all', array('fields' => array('SUM(Pedido.subtotal) as subtotal')));
            $mostrar_total_pedidos = $total_pedidos[0][0]['subtotal'];
            #debug($mostrar_total_pedidos);
            // Recuperando mesas del restaurante

            $mesas = $this->Orden->Mesa->find('list');
            
            $this->set(compact('orden_item', 'mostrar_total_pedidos', 'mesas'));
        }
        else
        {
            $this->Flash->set('Ninguna orden ha sido procesada');
            return $this->redirect(array('controller' => 'platillos', 'action' => 'index'));
        }

        if($this->request->is('post'))
        {
        	$this->Orden->create();
        	if($this->Orden->save($this->request->data))
        	{
        		#guarda el id de la orden
        		$id_orden=$this->Orden->id;

        		for($i=0; $i<count($orden_item); $i++)
        		{
        			$platillo_id= $orden_item[$i]['Pedido']['platillo_id'];
        			$cantidad =$orden_item[$i]['Pedido']['cantidad'];
        			$subtotal= $orden_item[$i]['Pedido']['subtotal'];
        			
        			$orden_items=array('platillo_id'=>$platillo_id,'orden_id'=>$id_orden,'cantidad'=>$cantidad,'subtotal'=>$subtotal);
        			$this->Orden->OrdenItem->saveAll($orden_items);
        		}
        		#eliminar contenido de la tabla pedidos
        		$this->Pedido->deleteAll(1,false);
        		$this->Flash->set('La orden fue procesada con exito');
        		return $this->redirect(array('controller'=>'platillos','action'=>'index'));

        	}
        	else{
        		$this->Flash->set('La orden no pudo ser procesada');
        	}
        }
    }
       
    
    public function eliminar($id)
    {
        if ($this->request->is('get')) {
			throw new MethodNotAllowedException("INCORRECTO");
			
		}

		if ($this->Orden->delete($id)) {
			$this->Flash->set("Se elimino la orden", ['element' => 'success']);
			return $this->redirect(array('action'=>'index'));
		}
	}
}	

?>

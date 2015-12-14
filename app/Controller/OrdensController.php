<?php
class OrdensController extends AppController{
	public $components=array('Flash','RequestHandler');
	public $helpers=array('Html','Form','Time');

	 public function add()
    {
        $this->loadModel('Pedido', 'RequestHandler');
        
        $orden_item = $this->Pedido->find('all', array('order' => 'Pedido.id ASC'));
        
        // debug($orden_item);
        
        if(count($orden_item) > 0)
        {
            $total_pedidos = $this->Pedido->find('all', array('fields' => array('SUM(Pedido.subtotal) as subtotal')));
            $mostrar_total_pedidos = $total_pedidos[0][0]['subtotal'];
            debug($mostrar_total_pedidos);
            // Recuperando mesas del restaurante
            #$mesas = $this->Orden->Mesa->find('list');
            
            #$this->set(compact('orden_item', 'mostrar_total_pedidos', 'mesas'));
        }
        else
        {
            $this->Flash->set('Ninguna orden ha sido procesada');
            return $this->redirect(array('controller' => 'platillos', 'action' => 'index'));
        }
        
       
    }
    
}

?>

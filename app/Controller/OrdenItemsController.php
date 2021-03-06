<?php
class OrdenItemsController extends AppController{
	public $components =array('Flash','RequestHandler');
	public $helpers=array('Html','Form','Time');

	public $paginate = array(
            'limit' => 2,
            'order' => array(
                'Orden.id' => 'desc'
            )
        );
	public function view($id = null)
    {
        $this->OrdenItem->recursive = 2;
        
        if(!$this->OrdenItem->exists($id))
        {
            throw new NotFoundException('pedido invalido');
        }
        
        $this->paginate['OrdenItem']['limit'] = 2;
        $this->paginate['OrdenItem']['conditions'] = array('OrdenItem.orden_id' => $id);
        $this->paginate['OrdenItem']['order'] = array('OrdenItem.id' => 'asc');
        $this->set('ordenitems', $this->paginate());
    }


}

?>
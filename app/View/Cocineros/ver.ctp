<h2>Detalle del Meser@ <?php echo $cocinero ['Cocinero']['nombre']; ?></h2>
<p> <strong>DNI: </strong><?php echo $cocinero['Cocinero']['dni']; ?></p>
<p> <strong>Telefono: </strong><?php echo $cocinero['Cocinero']['telefono']; ?></p>
<p> <strong>Creado: </strong><?php echo $this->Time->format('d-m-Y ; h:i A', $cocinero['Cocinero']['created']); ?></p>
<p> <strong>Modificado: </strong><?php echo $this->Time->format('d-m-Y ; h:i A',$cocinero['Cocinero']['modified']); ?></p>

<?php
echo $this->html->link('Volver a lista de cocineros', array('controller'=>'cocineros', 'action'=>'index'));
//print_r($mesero);
?>
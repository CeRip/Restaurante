<h2>Lista de meseros</h2>

<table>
	<tr>
		<td>Id</td>
		<td>Nombre</td>
		<td>Apellido</td>
		<td>Detalle</td>
		<td>Editar</td>
		<td>Eliminar</td>

	</tr>
<?php foreach($meseros as $mesero):?>
	<tr>
		<td><?php echo $mesero['Mesero']['id'];?></td>
		<td><?php echo $mesero['Mesero']['nombre'];?></td>
		<td><?php echo $mesero['Mesero']['apellido'];?></td>
		<td><?php echo $this->Html->link('Detalle', array('controller'=>'meseros','action'=>'ver', $mesero['Mesero']['id']));?></td>
		<td> <?php echo $this->Html->link('Editar', array('controller'=>'meseros','action'=>'editar', $mesero['Mesero']['id']));?></td>
		<td><?php echo $this->Form->postLink('Eliminar',array('action'=>'eliminar',$mesero['Mesero']['id']),array('confirm'=>'Eliminar a'.$mesero['Mesero']['nombre'].'?'))?></td>
	</tr>
<?php endforeach;?>
</table>
<?php
echo"<br><br>";
echo $this->html->link('Crear Mesero',array ('controller'=> 'meseros','action'=>'nuevo'));
echo"<br><br>";
echo $this->html->link('Mostrar Mesas',array ('controller'=> 'mesas','action'=>'index'));
?>
<?php
echo "<br><br>";
echo $this->html->link('Volver a menu', array('controller'=>'menu', 'action'=>'index'));
?>
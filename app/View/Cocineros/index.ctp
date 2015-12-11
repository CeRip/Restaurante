<h1>Listado de Cocineros</h1>

<table>
	<tr>
		<td>Id</td>
		<td>Nombre</td>
		<td>Apellido</td>
		<td>Detalle</td>
		<td>Editar</td>
		<td>Eliminar</td>
		
	</tr>
<?php foreach($cocineros as $cocinero):?>
	<tr>
		<td><?php echo $cocinero['Cocinero']['id'];?></td>
		<td><?php echo $cocinero['Cocinero']['nombre'];?></td>
		<td><?php echo $cocinero['Cocinero']['apellido'];?></td>
		<td><?php echo $this->Html->link('Detalle', array('controller'=>'cocineros','action'=>'ver', $cocinero['Cocinero']['id']));?></td>
		<td> <?php echo $this->Html->link('Editar', array('controller'=>'cocineros','action'=>'editar', $cocinero['Cocinero']['id']));?></td>
		<td><?php echo $this->Form->postLink('Eliminar',array('action'=>'eliminar',$cocinero['Cocinero']['id']),array('confirm'=>'Eliminar a '.$cocinero['Cocinero']['nombre'].'?'))?></td>
		
	</tr>
<?php endforeach;

?>


</table>

<?php

echo"<br><br>";
echo $this->html->link('Crear Cocinero',array ('controller'=> 'cocineros','action'=>'nuevo'));
echo "<br><br>";
echo $this->html->link('Volver a menu', array('controller'=>'menu', 'action'=>'index'));
?>
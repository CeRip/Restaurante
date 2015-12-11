<h2>Lista de mesas</h2>

<?php
echo $this->html->link('Crear Mesa',array ('controller'=> 'mesas','action'=>'nuevo'));
echo"<br>";
echo $this->html->link('Mostrar Meseros',array ('controller'=> 'meseros','action'=>'index'));
?>

<table>
	<tr>
		<td>Id</td>
		<td>Serie</td>
		<td>Puestos</td>
		<td>Posicion</td>
		<td>Mesero_id</td>
		<td>Editar</td>
		<td>Eliminar</td>
		

	</tr>
<?php foreach($mesas as $mesa):?>
	<tr>
		<td><?php echo $mesa['Mesa']['id'];?></td>
		<td><?php echo $mesa['Mesa']['serie'];?></td>
		<td><?php echo $mesa['Mesa']['puestos'];?></td>
		<td><?php echo $mesa['Mesa']['posicion'];?></td>
		<td><?php echo $mesa['Mesa']['mesero_id'];?></td>
		<td> <?php echo $this->Html->link('Editar', array('controller'=>'mesas','action'=>'editar', $mesa['Mesa']['id']));?></td>
		<td><?php echo $this->Form->postLink('Eliminar',array('action'=>'eliminar',$mesa['Mesa']['id']),array('confirm'=>'Eliminar a'.$mesa['Mesa']['serie'].'?'))?></td>
	</tr>
<?php endforeach;?>
</table>
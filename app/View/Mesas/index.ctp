<h2>Lista de mesas</h2>



<table>
	<tr>
		<td>Id</td>
		<td>Serie</td>
		<td>Puestos</td>
		<td>Posicion</td>
		<td>Creado</td>
		<td>Modificado</td>
		<td>Responsable</td>
		<td>Editar</td>
		<td>Eliminar</td>
		

	</tr>
<?php foreach($mesas as $mesa):?>
	<tr>
		<td><?php echo $mesa['Mesa']['id'];?></td>
		<td><?php echo $mesa['Mesa']['serie'];?></td>
		<td><?php echo $mesa['Mesa']['puestos'];?></td>
		<td><?php echo $mesa['Mesa']['posicion'];?></td>
		<td><?php echo $this->Time->format('d-m-Y ; h:i A', $mesa['Mesa']['created']); ?></td>
		<td><?php echo $this->Time->format('d-m-Y ; h:i A',$mesa['Mesa']['modified']); ?></td>
		<td><?php echo $this->html->link($mesa['Mesero']['nombre'].' '.$mesa['Mesero']['apellido'],array('controller'=>'meseros', 'action'=>'ver', $mesa['Mesero']['id']));?></td>
		<td> <?php echo $this->Html->link('Editar', array('controller'=>'mesas','action'=>'editar', $mesa['Mesa']['id']));?></td>
		<td><?php echo $this->Form->postLink('Eliminar',array('action'=>'eliminar',$mesa['Mesa']['id']),array('confirm'=>'Eliminar a'.$mesa['Mesa']['serie'].'?'))?></td>
	</tr>
<?php endforeach;?>
</table>
<?php
echo "<br><br>";
echo $this->html->link('Crear Mesa',array ('controller'=> 'mesas','action'=>'nuevo'));
echo"<br>";
echo $this->html->link('Mostrar Meseros',array ('controller'=> 'meseros','action'=>'index'));
?>
<?php
echo "<br><br>";
echo $this->html->link('Volver a menu', array('controller'=>'menu', 'action'=>'index'));
?>
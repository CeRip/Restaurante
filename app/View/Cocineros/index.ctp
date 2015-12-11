<h1>Listado de Cocineros</h1>

<table>
	<tr>
		<td>Id</td>
		<td>Nombre</td>
		<td>Apellido</td>
		<td>Detalle</td>
		
	</tr>
<?php foreach($cocineros as $cocinero):?>
	<tr>
		<td><?php echo $cocinero['Cocinero']['id'];?></td>
		<td><?php echo $cocinero['Cocinero']['nombre'];?></td>
		<td><?php echo $cocinero['Cocinero']['apellido'];?></td>
		<td><?php echo $this->Html->link('Detalle', array('controller'=>'cocineros','action'=>'ver', $cocinero['Cocinero']['id']));?></td>
		
	</tr>
<?php endforeach;?>
</table>
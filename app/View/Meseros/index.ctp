<h2>Lista de meseros</h2>
<div class="col-md-12">
<table class="table table-striped">
	<thead>
	<tr>
		<td>Id</td>
		<td>Nombre</td>
		<td>Apellido</td>
		<td>Detalle</td>
		<td>Editar</td>
		<td>Eliminar</td>

	</tr>
	</thead>
	<tbody>
<?php foreach($meseros as $mesero):?>
	<tr>
		<td><?php echo $mesero['Mesero']['id'];?></td>
		<td><?php echo $mesero['Mesero']['nombre'];?></td>
		<td><?php echo $mesero['Mesero']['apellido'];?></td>
		<td><?php echo $this->Html->link('Detalle', array('controller'=>'meseros','action'=>'ver', $mesero['Mesero']['id']), array('class'=>'btn btn-sm btn-default'));?></td>
		<td> <?php echo $this->Html->link('Editar', array('controller'=>'meseros','action'=>'editar', $mesero['Mesero']['id']), array('class'=>'btn btn-sm btn-default'));?></td>
		<td><?php echo $this->Form->postLink('Eliminar',array('action'=>'eliminar',$mesero['Mesero']['id']), array('class'=>'btn btn-sm btn-default'),array('confirm'=>'Eliminar a'.$mesero['Mesero']['nombre'].'?'))?></td>
	</tr>

<?php endforeach;?>
</tbody>


</table>
 </div>

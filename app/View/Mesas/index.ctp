<h2>Lista de mesas</h2>

<div class="col-md-12">
<table class="table table-striped">
	<thead>
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
	</thead>
	<tbody>
		<?php foreach($mesas as $mesa):?>
			<tr>
				<td><?php echo $mesa['Mesa']['id'];?></td>
				<td><?php echo $mesa['Mesa']['serie'];?></td>
				<td><?php echo $mesa['Mesa']['puestos'];?></td>
				<td><?php echo $mesa['Mesa']['posicion'];?></td>
				<td><?php echo $this->Time->format('d-m-Y ; h:i A', $mesa['Mesa']['created']); ?></td>
				<td><?php echo $this->Time->format('d-m-Y ; h:i A',$mesa['Mesa']['modified']); ?></td>
				<td><?php echo $this->html->link($mesa['Mesero']['nombre'].' '.$mesa['Mesero']['apellido'],array('controller'=>'meseros', 'action'=>'ver', $mesa['Mesero']['id']), array('class'=>'btn btn-sm btn-default'));?></td>
				<td> <?php echo $this->Html->link('Editar', array('controller'=>'mesas','action'=>'editar', $mesa['Mesa']['id']), array('class'=>'btn btn-sm btn-default'));?></td>
			<td><?php echo $this->Form->postLink('Eliminar',array('action'=>'eliminar',$mesa['Mesa']['id']), array('class'=>'btn btn-sm btn-default'),array('confirm'=>'Eliminar a'.$mesa['Mesa']['serie'].'?'))?></td>
		</tr>

<?php endforeach;?>
</tbody>


</table>
 </div>



<?php if(empty($ordens)): ?>

<h2>No existen ordenes disponibles</h2>

<?php else: ?>

<h2>Lista de Ordenes</h2>

<table class="table table-striped">
	<thead>
	<tr>
		<th>Mesa</th>
		<th>Nombre Cliente</th>
		<th>DNI</th>
		<th>Total</th>
		<th>Creado</th>
		<th>Modificado</th>
		<th>Acciones</th>

	</tr>
	</thead>
	<tbody>
<?php foreach($ordens as $orden):?>
	<tr>
		<td><?php echo $orden['Mesa']['serie'];?></td>
		<td><?php echo $orden['Orden']['cliente'];?></td>
		<td><?php echo $orden['Orden']['dni'];?></td>
		<td><?php echo $orden['Orden']['total'];?></td>
		<td><?php echo $this->Time->format('d-m-Y h:i A', h($orden['Orden']['created'])); ?></td>
			<td><?php echo $this->Time->format('d-m-Y h:i A', h($orden['Orden']['modified'])); ?></td>
			<td class="actions">
				<?php 
				    echo $this->Html->link('Ver pedidos', array('controller' => 'orden_items', 'action' => 'view', $orden['Orden']['id']), array('class' => 'btn btn-sm btn-info'));
				?>
				
				    <?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'eliminar', $orden['Orden']['id']), array('class' => 'btn btn-sm btn-default'), __('Estas seguro que quieres eliminar a  # %s?',$orden['Orden']['id']));?>
				
			</td>
			</tr>
<?php endforeach;?>
</tbody>
</table>



<?php endif; ?>
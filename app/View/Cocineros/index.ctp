


<div class="cocineros index">
	<h2><?php echo __('Cocineros'); ?></h2>
	
<div class="col-md-12">

	
	<table class="table table-striped" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('dni'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($cocineros as $cocinero): ?>
	<tr>
		<td><?php echo h($cocinero['Cocinero']['id']); ?>&nbsp;</td>
		<td><?php echo h($cocinero['Cocinero']['dni']); ?>&nbsp;</td>
		<td><?php echo h($cocinero['Cocinero']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($cocinero['Cocinero']['apellido']); ?>&nbsp;</td>
		<td><?php echo h($cocinero['Cocinero']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($cocinero['Cocinero']['created']); ?>&nbsp;</td>
		<td><?php echo h($cocinero['Cocinero']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cocinero['Cocinero']['id']), array('class'=>'btn btn-sm btn-default')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cocinero['Cocinero']['id']), array('class'=>'btn btn-sm btn-default')); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $cocinero['Cocinero']['id']), array('class' => 'btn btn-sm btn-default'), __('Estas seguro que quieres eliminar a  # %s?',$cocinero['Cocinero']['nombre'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	</div>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<ul class="pagination">
			<li> <?php echo $this->Paginator->prev('< ' . __('previous'), array('tag' => false), null, array('class' => 'prev disabled')); ?> </li>
			<?php echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'a', 'currentClass' => 'active')); ?>
			<li> <?php echo $this->Paginator->next(__('next') . ' >', array('tag' => false), null, array('class' => 'next disabled')); ?> </li>
		</ul>
</div>

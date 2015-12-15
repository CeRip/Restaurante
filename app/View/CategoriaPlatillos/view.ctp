<div class="container">
	<div class="row">
		<div class="col-md-11">

		<fieldset>
					<legend><?php echo __('Crear Categoria Platillo'); ?></legend></fieldset>

			<dl>
				<div class="col-md-2">
				<dt><span class="form-control"><?php echo __('Id',array()); ?></span></dt>
				<dd>
					<?php echo h($categoriaPlatillo['CategoriaPlatillo']['id']); ?>
					&nbsp;
				</dd>
				</div>
				<div class="col-md-2">
				<dt><span class="form-control"><?php echo __('Categoria'); ?></span></dt>
				<dd>
					<?php echo h($categoriaPlatillo['CategoriaPlatillo']['categoria']); ?>
					&nbsp;
				</dd>
				</div>
			</dl>
		</div>
		
		<div class="btn-group">

		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					<?php echo __('Acciones'); ?><span class="caret"></span>
						</button>
						<ul class="dropdown-menu" role="menu">
				<li><?php echo $this->Html->link(__('Edit Categoria Platillo'), array('action' => 'edit', $categoriaPlatillo['CategoriaPlatillo']['id'])); ?> </li>
				<li><?php echo $this->Form->postLink(__('Delete Categoria Platillo'), array('action' => 'delete', $categoriaPlatillo['CategoriaPlatillo']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $categoriaPlatillo['CategoriaPlatillo']['id']))); ?> </li>
				<li><?php echo $this->Html->link(__('List Categoria Platillos'), array('action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Categoria Platillo'), array('action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Platillos'), array('controller' => 'platillos', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Platillo'), array('controller' => 'platillos', 'action' => 'add')); ?> </li>
			</ul>
		</div>
		
		<div class="col-md-12">

		<div class="related">
			<fieldset>
					<legend><?php echo __('Platillos Relacionados'); ?></legend><fieldset></fieldset>
			<?php if (!empty($categoriaPlatillo['Platillo'])): ?>
			<table class="table table-striped"  >
			<thead>
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Nombre'); ?></th>
				<th><?php echo __('Descripcion'); ?></th>
				<th><?php echo __('Precio'); ?></th>
				<th><?php echo __('Created'); ?></th>
				<th><?php echo __('Modified'); ?></th>
				<th><?php echo __('Categoria Platillo Id'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($categoriaPlatillo['Platillo'] as $platillo): ?>
				<tr>
					<td><?php echo $platillo['id']; ?></td>
					<td><?php echo $platillo['nombre']; ?></td>
					<td><?php echo $platillo['descripcion']; ?></td>
					<td><?php echo $platillo['precio']; ?></td>
					<td><?php echo $platillo['created']; ?></td>
					<td><?php echo $platillo['modified']; ?></td>
					<td><?php echo $platillo['categoria_platillo_id']; ?></td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('controller' => 'platillos', 'action' => 'view', $platillo['id']), array('class'=>'btn btn-sm btn-default')); ?>
						<?php echo $this->Html->link(__('Edit'), array('controller' => 'platillos', 'action' => 'edit', $platillo['id']), array('class'=>'btn btn-sm btn-default')); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'platillos', 'action' => 'delete', $platillo['id']), array('class'=>'btn btn-sm btn-default'), array('confirm' => __('Are you sure you want to delete # %s?', $platillo['id']))); ?>
					</td>
				</tr>
				</tbody>
			<?php endforeach; ?>
			</table>
		<?php endif; ?>

	
</div>
</div>
</div>
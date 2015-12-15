<?php echo $this->html->script(array('addtocart.js'), array('inline'=> false))?>

<div class="container">
	<div class="row">
		<div class="col-md-11">

		<fieldset>
					<legend><?php echo __('Platillo'); ?></legend></fieldset>


	<dl>
		<div class="col-md-1">
		<dt><?php echo __('Id'); ?></dt>
		
		<dd>
			<?php echo h($platillo['Platillo']['id']); ?>
			&nbsp;
		</dd>
		</div>
		<div class="col-md-2">
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($platillo['Platillo']['nombre']); ?>
			&nbsp;
		</dd></div>
		<div class="col-md-5">
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($platillo['Platillo']['descripcion']); ?>
			&nbsp;
		</dd>
		</div>
		<div class="col-md-1">
		<dt><?php echo __('Precio'); ?></dt>
		<dd>
			<?php echo '$ '.h($platillo['Platillo']['precio']); ?>
			&nbsp;
		</dd>
		</div>
		<div class="col-md-2">
		<dt><?php echo __('Categoria'); ?></dt>
		<dd>
			<?php echo $this->Html->link($platillo['CategoriaPlatillo']['categoria'], array('controller' => 'categoria_platillos', 'action' => 'view', $platillo['CategoriaPlatillo']['id'])); ?>
			&nbsp;
		</dd>
		<br></div>
		
		<div class="col-md-2">
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($platillo['Platillo']['created']); ?>
			&nbsp;
		</dd>
		
		</div>
		<div class="col-md-8">
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($platillo['Platillo']['modified']); ?>
			&nbsp;
		</dd>
		<br>
		</div>
		
		<div class="col-md-2">
		<?php echo $this->Form->button('Agregar a Pedido', array('class'=>'btn btn-primary addtocart', 'id'=>$platillo['Platillo']['id']));?>

		</div>
	</dl>
</div>
<div class="btn-group">

		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					<?php echo __('Acciones'); ?><span class="caret"></span>
						</button>
						<ul class="dropdown-menu" role="menu">
		<li><?php echo $this->Form->postLink(__('Agregar al Pedido'), array('action' => 'add', $platillo['Platillo']['id']), array('confirm' => __('Confirmar adicion de # %s?', $platillo['Platillo']['id']))); ?> </li>

		<li><?php echo $this->Html->link(__('Editar Platillo'), array('action' => 'edit', $platillo['Platillo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Platillo'), array('action' => 'delete', $platillo['Platillo']['id']), array('confirm' => __('Estas seguro que quieres eliminar # %s?', $platillo['Platillo']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Platillos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Platillo'), array('action' => 'add')); ?> </li>

		<li><?php echo $this->Html->link(__('Lista Categorias Platillos'), array('controller' => 'categoria_platillos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Categoria Platillo'), array('controller' => 'categoria_platillos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Cocineros'), array('controller' => 'cocineros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Cocinero'), array('controller' => 'cocineros', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="col-md-12">
<div class="related">
	<fieldset>
					<legend><?php echo __('Cocineros Responsables'); ?></legend><fieldset></fieldset>
	<?php if (!empty($platillo['Cocinero'])): ?>
	<table class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Dni'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellido'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($platillo['Cocinero'] as $cocinero): ?>
		<tr>
			<td><?php echo $cocinero['id']; ?></td>
			<td><?php echo $cocinero['dni']; ?></td>
			<td><?php echo $cocinero['nombre']; ?></td>
			<td><?php echo $cocinero['apellido']; ?></td>
			<td><?php echo $cocinero['telefono']; ?></td>
			<td><?php echo $cocinero['created']; ?></td>
			<td><?php echo $cocinero['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cocineros', 'action' => 'view', $cocinero['id']), array('class'=>'btn btn-sm btn-default')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cocineros', 'action' => 'edit', $cocinero['id']), array('class'=>'btn btn-sm btn-default')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cocineros', 'action' => 'delete', $cocinero['id']), array('class'=>'btn btn-sm btn-default'), array('confirm' => __('Are you sure you want to delete # %s?', $cocinero['id']))); ?>
			</td>
		</tr>
		</tbody>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
	</div>
</div>

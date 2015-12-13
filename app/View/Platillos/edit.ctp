<br><br>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php echo $this->Form->create('Platillo'); ?>
		<fieldset>
			<legend><?php echo __('Editar Platillo'); ?></legend>
				<?php
				echo $this->Form->input('id',array('class'=>'form-control','label'=>'ID'));
				echo $this->Form->input('nombre',array('class'=>'form-control','label'=>'Nombre'));
				echo $this->Form->input('descripcion',array('class'=>'form-control','label'=>'Descripcion'));
				echo $this->Form->input('precio',array('class'=>'form-control','label'=>'Precio'));
				echo $this->Form->input('categoria_platillo_id',array('class'=>'form-control','label'=>'Categoria de Platillo'));
				echo $this->Form->input('Cocinero',array('class'=>'form-control','label'=>'Cocinero'));
				?>
	</fieldset>
	<p>
		<?php echo $this->Form->end(array('label' => 'Editar Platillo', 'class' =>'btn btn-success')); ?>
		</p>
</div>
<div class="btn-group">
<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
	<?php echo __('Actions'); ?><span class="caret"></span>
	</button>
	
	<ul class="dropdown-menu" role="menu">

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Platillo.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Platillo.id')))); ?></li>
		<li><?php echo $this->Html->link(__('Lista Platillos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Categoria Platillos'), array('controller' => 'categoria_platillos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Categoria Platillo'), array('controller' => 'categoria_platillos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Cocineros'), array('controller' => 'cocineros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Cocinero'), array('controller' => 'cocineros', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>
</div>


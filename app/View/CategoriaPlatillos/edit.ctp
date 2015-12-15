<div class="container">
	<div class="row">
		<div class="col-md-6">
<?php echo $this->Form->create('CategoriaPlatillo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Categoria Platillo'); ?></legend>
	<?php
		echo $this->Form->input('id',array('class'=>'form-control','label'=>'ID'));
		echo $this->Form->input('categoria',array('class'=>'form-control','label'=>'CATEGORIA'));
	?>
	</fieldset>
	<p>
<?php echo $this->Form->end(array('label' => 'Editar CATEGORIA', 'class' =>'btn btn-success')); ?>
</p>
</div>
<div class="btn-group">

			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				<?php echo __('Actions'); ?><span class="caret"></span>
			</button>
			<ul class="dropdown-menu" role="menu">

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CategoriaPlatillo.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('CategoriaPlatillo.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Categoria Platillos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Platillos'), array('controller' => 'platillos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Platillo'), array('controller' => 'platillos', 'action' => 'add')); ?> </li>
	</ul>
</div>
	
	</div>
</div>
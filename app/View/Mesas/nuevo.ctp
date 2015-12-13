<br><br>
<div class="container">
	<div class="row">
		<div class="col-md-6">
		<fieldset>
		<legend><?php echo __('Nueva Mesa'); ?></legend>

			<?php 
			echo $this->Form->create('Mesa');
			echo $this->Form->input ('serie',array('class'=>'form-control','label'=>'Serie'));
			echo $this->Form->input ('puestos',array('class'=>'form-control','label'=>'Puestos'));
			echo $this->Form->input ('posicion', array('rows'=>3,'class'=>'form-control','label'=>'Posicion'));
			echo $this->Form->input ('mesero_id',array('class'=>'form-control','label'=>'Mesero'));
			?>
			<p>
			<?php
			echo $this->Form->end (array('label' => 'Crear Mesa', 'class' =>'btn btn-success'));
			?>
			</p>
		</fieldset>
	</div>
<div class="btn-group">

	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
	<?php echo __('Actions'); ?><span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">

		<li><?php echo $this->Html->link(__('Lista Mesas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Meseros'), array('controller' => 'meseros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Mesero'), array('controller' => 'meseros', 'action' => 'nuevo')); ?> </li>
	</ul>
</div>
</div>
</div>
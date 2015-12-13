<br><br>
<div class="container">
	<div class="row">
		<div class="col-md-6">
		<fieldset>
		<legend><?php echo __('Editar Mesero'); ?></legend>
			<?php echo $this->Form->create('Mesero');?>
			<?php echo $this->Form->input('dni',array('class'=>'form-control','label'=>'DNI'));?>
			<?php echo $this->Form->input('nombre',array('class'=>'form-control','label'=>'Nombre'));?>
			<?php echo $this->Form->input('apellido',array('class'=>'form-control','label'=>'Apellido'));?>
			<?php echo $this->Form->input('telefono',array('class'=>'form-control','label'=>'Telefono'));?>
			<p>
			<?php echo $this->Form->end (array('label' => 'Editar Mesero', 'class' =>'btn btn-success'));?>
			</p>
		</fieldset>
		</div>
		<div class="btn-group">

			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			<?php echo __('Actions'); ?><span class="caret"></span>
			</button>
			<ul class="dropdown-menu" role="menu">

				<li><?php echo $this->Html->link(__('Lista Meseros'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('Lista Mesas'), array('controller' => 'mesas', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('Nueva Mesa'), array('controller' => 'mesas', 'action' => 'nuevo')); ?> </li>
			</ul>
		</div>
	</div>
</div>



<h2>Editar Cocinero</h2>

<?php echo $this->Form->create('Cocinero');?>
<?php echo $this->Form->input('dni');?>
<?php echo $this->Form->input('nombre');?>
<?php echo $this->Form->input('apellido');?>
<?php echo $this->Form->input('telefono');?>
<?php echo $this->Form->end ('Editar Cocinero');

echo $this->html->link('Volver a lista de cocineros', array('controller'=>'cocineros', 'action'=>'index'));
?>

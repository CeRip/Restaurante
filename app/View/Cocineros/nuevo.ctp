<h2>Crear Cocinero</h2>

<?php 
echo $this->Form->create('Cocinero');
echo $this->Form->input ('dni');
echo $this->Form->input ('nombre');
echo $this->Form->input ('apellido');
echo $this->Form->input ('telefono');
echo $this->Form->end ('Crear Cocinero');
?>
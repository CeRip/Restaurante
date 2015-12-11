<h2>Crear mesero</h2>

<?php 
echo $this->Form->create('Mesa');
echo $this->Form->input ('serie');
echo $this->Form->input ('puestos');
echo $this->Form->input ('posicion');
echo $this->Form->input ('mesero_id');
echo $this->Form->end ('Crear Mesa');
?>
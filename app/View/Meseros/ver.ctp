<h2>Detalle del Meser@ <?php echo $mesero ['Mesero']['nombre']; ?></h2>
<p> <strong>DNI: </strong><?php echo $mesero['Mesero']['dni']; ?></p>
<p> <strong>Telefono: </strong><?php echo $mesero['Mesero']['telefono']; ?></p>
<p> <strong>Creado: </strong><?php echo $this->Time->format('d-m-Y ; h:i A', $mesero['Mesero']['created']); ?></p>
<p> <strong>Modificado: </strong><?php echo $this->Time->format('d-m-Y ; h:i A',$mesero['Mesero']['modified']); ?></p>


<h3>Encargado De las Mesas:</h3>

<?php if (empty($mesero['Mesa'])):?>
	
<p>No tiene mesas asociadas</p>

<?php endif?>

<?php foreach($mesero['Mesa'] as $m):?>
<p>
	Serie:<?php echo $m['serie'];?>
	<br/>
	Puestos:<?php echo $m['puestos'];?>
	<br/>
	Posicion:<?php echo $m['posicion'];?>
	<br/>
	Creado:<?php echo $m['created'];?>
	<br/>
	Modificado:<?php echo $m['modified'];?>
	<br/>
</p>
<?php endforeach;?>

<?php
echo $this->html->link('Volver a lista de meseros', array('controller'=>'meseros', 'action'=>'index'));
//print_r($mesero);
?>
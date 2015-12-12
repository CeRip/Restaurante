<h2>Lista de pedidos</h2>

<table>
	<tr>
		<td>Id</td>
		<td>Platillo</td>
		<td>Cantidad</td>
		<td>Subtotal</td>
		<?php $totalPedido= 0?>

	</tr>
<?php foreach($pedidos as $pedido):?>
	<tr>
		<td><?php echo $pedido['Pedido']['id'];?></td>
		<td><?php echo $pedido['Pedido']['platillo_id'];?></td>
		<td><?php echo $pedido['Pedido']['cantidad'];?></td>
		<td><?php echo $pedido['Pedido']['subtotal'];?></td>
		<?php $totalPedido=$totalPedido + $pedido['Pedido']['subtotal']?>
	</tr>
<?php endforeach;?>
</table>
<td><?php echo 'Total a pagar $'.$totalPedido;?></td>
<?php


echo "<br><br>";
echo $this->html->link('Volver a menu', array('controller'=>'menu', 'action'=>'index'));
?>
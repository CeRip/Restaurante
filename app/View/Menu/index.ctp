<h2>Menu</h2>
<?php
echo $this->html->link('Meseros',array ('controller'=> 'meseros','action'=>'index'));
echo"<br><br>";
echo $this->html->link('Mesas',array ('controller'=> 'mesas','action'=>'index'));
echo"<br><br>";
echo $this->html->link('Cocineros',array ('controller'=> 'cocineros','action'=>'index'));

?>
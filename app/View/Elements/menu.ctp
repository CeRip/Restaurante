  <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php echo $this->Html->link('Restaurante', array('controller' => 'pages', 'action' => 'display'), array('class' => 'navbar-brand' )); ?>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
           


            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Meseros<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->html->link('Lista Meseros', array('controller'=>'meseros', 'action'=> 'index'))?></li>
                <li><?php echo $this->html->link('Nuevo Mesero', array('controller'=>'meseros', 'action'=> 'nuevo'))?></li>
                </li>
               
              </ul>
            </li>

              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cocineros<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->html->link('Lista Cocineros', array('controller'=>'cocineros', 'action'=> 'index'))?></li>
                <li><?php echo $this->html->link('Nuevo Cocinero', array('controller'=>'cocineros', 'action'=> 'add'))?></li>
                </li>
               
              </ul>
            </li>

             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mesas<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->html->link('Lista de Mesas', array('controller'=>'mesas', 'action'=> 'index'))?></li>
                <li><?php echo $this->html->link('Nueva Mesa', array('controller'=>'mesas', 'action'=> 'nuevo'))?></li>
                </li>
               
              </ul>
            </li>


             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Platillos<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->html->link('Lista Platillos', array('controller'=>'platillos', 'action'=> 'index'))?></li>
                <li><?php echo $this->html->link('Nuevo Platillo', array('controller'=>'platillos', 'action'=> 'add'))?></li>
                <li class="dropdown-header">Categorias</li>
                <li><?php echo $this->html->link('Lista Categoria', array('controller'=>'categoria_platillos', 'action'=> 'index'))?></li>
                <li><?php echo $this->html->link('Nueva Categoria', array('controller'=>'categoria_platillos', 'action'=> 'add'))?></li>
                </li>
               
             </ul>
              <li><?php echo $this->html->link('Pedidos',array('controller'=>'pedidos','action'=>'view'),array('class'=>'btn btn-sm btn-default'));?>
            


           
              
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
 
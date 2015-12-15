<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Restaurante');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('style.css','bootstrap.min','bootstrap-theme.min','fileinput.min.css','jquery-ui.min.css'));
		echo $this->html->script(array('jquery.min','docs.min','bootstrap.min','fileinput.min.js','jquery-ui.min.js'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<script type="text/javascript">
	var basePath="<?php echo Router :: url('/')?>";
	</script>
</head>
<body>
<body >
<div id="header">
<?php echo $this->element('menu');?>
 </div>>
  

      <div class="container theme-showcase" role="main">

      		<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
			<br><br>
			<div id="msg"></div>



				
      </div>


</body>
</html>

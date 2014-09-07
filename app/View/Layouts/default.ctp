<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		tbthorpe.
	</title>
	<meta property="og:description" content="Let's face it - I'm awesome."><meta property="og:title" content="Tim Thorpe (@tbthorpe)"><meta property="og:image" content="http://tbthorpe.com/img/thisisme.gif">
	<script type="text/javascript" charset="utf-8" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->Html->script('startup');
		

		echo $scripts_for_layout;
	?>
	
	<link href='http://fonts.googleapis.com/css?family=Wire+One|Amatic+SC:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="wrapper">
		<div id="container">
			<!-- <div id="header">
							<h1>Timothy B Thorpe</h1>
						</div> -->
			<div id="content">
				
				<?php echo $this->Session->flash(); ?>
				
				<?php echo $content_for_layout; ?>

			</div>
			<div id="footer">
				&copy;<?php echo date('Y',strtotime('now')); ?>&nbsp;Timothy Thorpe
			</div>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html
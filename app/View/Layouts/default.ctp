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

?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		//echo $this->Html->css('cake.generic');
		echo $this->Html->css('global');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<link href='http://fonts.googleapis.com/css?family=Merriweather:700' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="Container">
		<div id="Header"><img src="/img/common/header/title.png" border="0" width="700" height="120"/></div>
		<div id="Content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="Footer">
			<a href="/">Welcome</a> | 
			<a href="/">More About Dr. Zipkin</a> | 
			<a href="/">Why Consider Acupuncture</a> | 
			<a href="/">What to Expect</a> | 
			<a href="/">Contact Us</a>
		</div>
		<div id="Crane"></div>
		<div id="Flower"></div>
	</div>
</body>
</html>

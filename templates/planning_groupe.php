<?php
	style('assomanager', array('style'));
	script('assomanager', array('client.app', '506.app', '814.app', '856.app'));
?>

<div id="app">
	<div id="app-navigation">
		<?php print_unescaped($this->inc('menu/index')); ?>
	</div>
	<div id="app-content">
		<?php print_unescaped($this->inc('contenu/planning_groupe')); ?>
	</div>
</div>
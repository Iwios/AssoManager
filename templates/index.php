<?php
	style('gestion', array('style'));
	script('gestion', array('client.app', '506.app', '814.app', '856.app'));
?>

<div id="app">
	<div id="app-navigation">
		<?php print_unescaped($this->inc('menu/index')); ?>
	</div>
	<div id="app-content" style="width:100%;">
		<div id="app-content-wrapper" style="width:100%;">
			<?php print_unescaped($this->inc('contenu/index')); ?>
		</div>
	</div>
</div>
<?php
    style('gestion', array('style'));
    script('gestion', array('client.app', '506.app', '814.app', '856.app'));
?>

<div id="app">
    <div id="app-navigation">
        <?php include_once(__DIR__ . '/../../menu/index.php'); ?>
    </div>
    <div id="app-content">
        <?php include_once(__DIR__ . '/contenu/liste_groupe.php'); ?>
    </div>
</div>

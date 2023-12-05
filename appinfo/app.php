<?php

namespace OCA\AssoManager\AppInfo;

use OCP\AppFramework\App;

$app = new App('AssoManager');

// Ajoute une entrée de menu dans la barre latérale
$menu = $app->getContainer()->getServer()->getNavigationManager()->get();
$menu->add(
    [
        'id' => 'AssoManager',
        'order' => 1,
        'href' => $app->getContainer()->getServer()->getURLGenerator()->linkToRoute('AssoManager.page.index'),
        'icon' => $app->getContainer()->getServer()->getURLGenerator()->imagePath('AssoManager', 'app.svg'),
        'name' => $app->getContainer()->getServer()->getL10N('AssoManager')->t('Gestion des licenciés'),
    ]
);

<?php

namespace OCA\assomanager\AppInfo;

use OCP\AppFramework\App;

// Créez une instance de votre application
$app = new App('assomanager');

// Enregistrez le script de navigation.js
$app->registerScript('assomanager', 'js/navigation');

// Ajoute une entrée de menu dans la barre latérale
$menu = $app->getContainer()->getServer()->getNavigationManager()->get();
$menu->add(
    [
        'id' => 'assomanager',
        'order' => 1,
        'href' => $app->getContainer()->getServer()->getURLGenerator()->linkToRoute('assomanager.page.index'),
        'icon' => $app->getContainer()->getServer()->getURLGenerator()->imagePath('assomanager', 'app.svg'),
        'name' => $app->getContainer()->getServer()->getL10N('assomanager')->t('Gestion des licenciés'),
    ]
);

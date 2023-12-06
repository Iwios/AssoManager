<?php

namespace OCA\assomanager\AppInfo;

use OCP\AppFramework\App;

class Application extends App {

    public function __construct(array $urlParams = []) {
        parent::__construct('assomanager', $urlParams);
        
        // Enregistrez le script de navigation.js
        $this->registerScript('assomanager', 'js/navigation');
        
        // Ajoute une entrée de menu dans la barre latérale
        $menu = $this->getContainer()->getServer()->getNavigationManager()->get();
        $menu->add(
            [
                'id' => 'assomanager',
                'order' => 1,
                'href' => $this->getContainer()->getServer()->getURLGenerator()->linkToRoute('assomanager.page.index'),
                'icon' => $this->getContainer()->getServer()->getURLGenerator()->imagePath('assomanager', 'app.svg'),
                'name' => $this->getContainer()->getServer()->getL10N('assomanager')->t('Gestion des licenciés'),
            ]
        );
    }
}

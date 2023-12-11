<?php

\OC::$server->getNavigationManager()->add(function () {
    $urlGenerator = \OC::$server->getURLGenerator();
    return [
        'id' => 'assomanager_index',
        'order' => 10,
        'href' => $urlGenerator->linkToRoute('assomanager.page.index'),
        'name' => 'AssoManager',

        'id' => 'assomanager_liste_groupe',
        'order' => 10,
        'href' => $urlGenerator->linkToRoute('assomanager.page.liste_groupe'),
        'name' => 'AssoManager',

        'id' => 'assomanager_planning_groupe',
        'order' => 10,
        'href' => $urlGenerator->linkToRoute('assomanager.page.planning_groupe'),
        'name' => 'AssoManager',
    ];
});
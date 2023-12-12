<?php

\OC::$server->getNavigationManager()->add(function () {
    $urlGenerator = \OC::$server->getURLGenerator();
    return [
        'id' => 'assomanager_index',
        'order' => 10,
        'href' => $urlGenerator->linkToRoute('assomanager.page.index'),
        'name' => 'AssoManager',
    ];
});

\OC::$server->getNavigationManager()->add(function () {
    $urlGenerator = \OC::$server->getURLGenerator();
    return [
        'id' => 'assomanager_liste_groupe',
        'order' => 11,
        'href' => $urlGenerator->linkToRoute('assomanager.page.liste_groupe'),
        'name' => 'Liste des groupes',
    ];
});

\OC::$server->getNavigationManager()->add(function () {
    $urlGenerator = \OC::$server->getURLGenerator();
    return [
        'id' => 'assomanager_planning_groupe',
        'order' => 12,
        'href' => $urlGenerator->linkToRoute('assomanager.page.planning_groupe'),
        'name' => 'Planning des groupes',
    ];
});
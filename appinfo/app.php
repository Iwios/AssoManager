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


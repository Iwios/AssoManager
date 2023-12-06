<?php

use OCA\assomanager\AppInfo\Application;
use OCA\assomanager\Controller\PageController;

/** @var Application $app */
$app = $this->app;

/** @var Symfony\Component\Routing\RouteCollection $collection */
$collection = $this->createRouteCollection();

$collection->add('assomanager.page.index', new Symfony\Component\Routing\Route('/page', [
    '_controller' => [PageController::class, 'index'],
]));

return $collection;

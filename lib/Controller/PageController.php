<?php

namespace OCA\AssoManager\Controller;

use OCP\AppFramework\Controller;

class PageController extends Controller
{
    /**
     * @NoAdminRequired
     * @NoCSRFRequired
     */
    public function index()
    {
        return $this->render('index', []);
    }
}

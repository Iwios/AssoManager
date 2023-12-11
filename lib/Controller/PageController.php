<?php

namespace OCA\AssoManager\Controller;

use OCP\IRequest;
use OCP\AppFramework\Http\TemplateResponse;
use OCP\AppFramework\Controller;

class PageController extends Controller {
	public function __construct($appName, IRequest $request) {
	parent::__construct($appName, $request);
    }

/**
     * @NoAdminRequired
     * @NoCSRFRequired
     */
    public function index() {
		$oTemplate = new TemplateResponse('assomanager', 'index');
		return $oTemplate;
    }

    public function liste_groupe() {
    $oTemplate = new TemplateResponse('assomanager', 'index');
    return $oTemplate;
    }

    public function planning_groupe() {
    $oTemplate = new TemplateResponse('assomanager', 'planning_groupe');
    return $oTemplate;
    }
}
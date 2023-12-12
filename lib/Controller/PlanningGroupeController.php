<?php
namespace OCA\AssoManager\Controller;

use OCP\AppFramework\Controller;

class PlanningGroupeController extends Controller {
    public function planning_groupe() {
        $oTemplate = new TemplateResponse('assomanager', 'planning_groupe');
        return $oTemplate;
    }
}

<?php
namespace OCA\MyCustomApp\Controller;

use OCP\AppFramework\Controller;

class ListeGroupeController extends Controller {
    public function liste_groupe() {
        $oTemplate = new TemplateResponse('assomanager', 'liste_groupe');
        return $oTemplate;
        }
}

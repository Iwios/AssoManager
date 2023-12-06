<?php

namespace OCA\AssoManager\Controller;

use OCP\AppFramework\Controller;
use OCP\AppFramework\Http\TemplateResponse;

class PageController extends Controller
{
    /**
     * @NoAdminRequired
     * @NoCSRFRequired
     */
    public function index()
    {
        $params = ['message' => 'Gestion des licenciés'];

        // Charge la vue depuis le répertoire 'templates' de ton application
        $template = new TemplateResponse('assomanager', 'index', $params, 'blank');

        // Renvoie la réponse
        return $template;
    }
}

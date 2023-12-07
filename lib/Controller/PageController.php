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

        // Récupère le contenu de la vue
        $content = $template->render();

        // Défini le contenu de la réponse
        $this->response->setContent($content);

        // Renvoie la réponse
        return $this->response;
    }
}

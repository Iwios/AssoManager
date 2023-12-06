<?php


namespace OCA\Workspace\Controller;

use OCP\AppFramework\Controller;
use OCP\AppFramework\Http\TemplateResponse;

class PageController extends Controller {
	public function __construct(
		private UserService $userService
	) {
	}

	public function index(): TemplateResponse {
		Util::addScript(Application::APP_ID, 'assomanager');
	
		return new TemplateResponse('assomanager', 'index', ['isUserGeneralAdmin' => $this->userService->isUserGeneralAdmin(), 'canAccessApp' => $this->userService->canAccessApp() ]); 
	}
}
<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: Kevin DIDIER <contact@iwios.fr>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\AssoManager\Tests\Unit\Controller;

use OCA\AssoManager\Controller\NoteApiController;

class NoteApiControllerTest extends NoteControllerTest {
	public function setUp(): void {
		parent::setUp();
		$this->controller = new NoteApiController($this->request, $this->service, $this->userId);
	}
}

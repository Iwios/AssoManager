<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: Kevin DIDIER <contact@iwios.fr>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\AssoManager\AppInfo;

use OCP\AppFramework\App;

class Application extends App {
	public const APP_ID = 'assomanager';

	public function __construct() {
		parent::__construct(self::APP_ID);
	}
}

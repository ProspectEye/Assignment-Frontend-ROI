<?php

	namespace ROI\Api\Routes;

	use ROI\Api\Controllers as Controllers;

	class Badge {

		static function register($app) {

			$controller = new Controllers\Badge();

			$app->get('/badge', array($controller, 'getAll'));
			$app->get('/badge/:id', array($controller, 'getById'));
			$app->post('/badge', array($controller, 'create'));
			$app->put('/badge/:id', array($controller, 'update'));

		}
	}

?>
<?php

	namespace ROI\Api;

	require_once("vendor/autoload.php");

	session_start(); // for persistant stores

	$app = new \Slim\Slim();

	Routes\Badge::register($app);
	Routes\BadgeRelation::register($app);

	/* to be implemented */

	$app->run();

?>
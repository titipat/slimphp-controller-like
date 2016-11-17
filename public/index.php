<?php

require __DIR__ . '/../vendor/autoload.php';

$config	= [
	'settings' => [
		'displayErrorDetails' => true
	]
];

$app = new \Slim\App($config);

$container = $app->getContainer();

$container['myModule'] = function($container) {
	$myModule = 'foobar';
	return $myModule;
};

$app->get('/', function($request, $response) {
	return 'hello, slim';
});

$app->get('/myRoute', 'app\controllers\SiteController:myRoute');

$app->run();
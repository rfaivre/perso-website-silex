<?php

$app = require __DIR__ . '/../app/bootstrap.php';

$app->get('/', function () use ($app) {
	return $app['twig']->render('index.twig', array());
});

if ($app['debug']) {
	// $app->register(new Whoops\Provider\Silex\WhoopsServiceProvider);
}


if ($app instanceof Silex\Application) {
    $app->run();
} else {
    echo 'Failed to initialize application.';
}

?>
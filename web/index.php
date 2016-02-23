<?php


$app = require __DIR__ . '/../app/bootstrap.php';

$detect = new Mobile_Detect();

if ($app['debug']) {
	//$app->register(new Whoops\Provider\Silex\WhoopsServiceProvider);
}

$app->get('/', function (Silex\Application $app) use ($detect) {
//return $detect->isMobile();
	error_log('test' );
	return $app['twig']->render('index.twig', array());
});



if ($app instanceof Silex\Application) {
    $app->run();
} else {
    echo 'Failed to initialize application.';
}

?>
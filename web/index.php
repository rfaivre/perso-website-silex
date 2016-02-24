<?php


$app = require __DIR__ . '/../app/bootstrap.php';

if ($app['debug']) {
	//$app->register(new Whoops\Provider\Silex\WhoopsServiceProvider);
}

$app->get('/', function (Silex\Application $app) {
	echo "resrse";
 if ($app["mobile_detect"]->isMobile()) {
 	echo 'mobile';
 }
 else {
 	echo "non";
 }
	return $app['twig']->render('index.twig', array());
});



if ($app instanceof Silex\Application) {
    $app->run();
} else {
    echo 'Failed to initialize application.';
}

?>
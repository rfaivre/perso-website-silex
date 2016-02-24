<?php


$app = require __DIR__ . '/../app/bootstrap.php';

if ($app['debug']) {
	//$app->register(new Whoops\Provider\Silex\WhoopsServiceProvider);
}

$app->get('/', function (Silex\Application $app) {

	$isMobile = $app["mobile_detect"]->isMobile()?'1':'0';

	return $app['twig']->render('index.twig', array('isMobile' => $isMobile, 'test' => 'test'));
});



if ($app instanceof Silex\Application) {
    $app->run();
} else {
    echo 'Failed to initialize application.';
}

?>
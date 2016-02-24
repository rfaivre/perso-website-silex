<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Silex\Provider\TwigServiceProvider;
use Binfo\Silex\MobileDetectServiceProvider;

// config file
include __DIR__ . '/../config/config.php';


$app = new Silex\Application($config);

$app->register(new TwigServiceProvider(), $options);
$app->register(new MobileDetectServiceProvider());

return $app;

?>
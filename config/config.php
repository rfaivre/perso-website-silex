<?php 

$config["debug"] = true;

$options = array(
	'twig.class_path'       => __DIR__ . '/../vendor/Twig/lib',
	'twig.path'             => __DIR__ . '/../src/views',
	'twig.options'          => array(
	    'charset'           => 'utf-8',
	    'strict_variables'  => true,
	    'cache'             => __DIR__ . '/../cache'
	)
); 

 ?>
<?php

	require_once __DIR__.'/../vendor/autoload.php';
	require_once __DIR__.'/../src/DayOfWeek.php';

	$app = new Silex\Application();

	$app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

	$app->get('/', function() use ($app)
	{
		return $app['twig']->render('dayofweek.html.twig');
	});
	$app->get('/results', function() use ($app)
	{
		$dotw = new DayOfWeek($_GET['month'],$_GET['day'],$_GET['year']);
		$results = $dotw->makeWeekDay();
		return $app['twig']->render('dayofweek.html.twig', array('results' => $results));
	});

	return $app;

?>

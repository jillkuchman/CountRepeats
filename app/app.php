<?php

	require_once __DIR__."/../vendor/autoload.php";
	require_once __DIR__."/../src/CountRepeats.php";

	$app = new Silex\Application();

	$app->register(new Silex\Provider\TwigServiceProvider(), array(
		'twig.path' => __DIR__."/../views"
	));

	$app->get("/", function() use($app) {
		return $app['twig']->render('form.twig');
	});

	$app->get("/wordcount", function() use($app) {
		$count_repeats = new RepeatCounter;
		$word_count = $count_repeats->countRepeats($_GET['user_sentence_input'], $_GET['user_word_input']);
		return $app['twig']->render('results.twig', array('total_word_count' => $word_count, 'user_sentence' => $_GET['user_sentence_input'], 'user_word' => $_GET['user_word_input']));
	});

	return $app;

?>
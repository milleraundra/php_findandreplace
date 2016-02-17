<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/FindAndReplace.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

// End busy code -----------^

    // Render Home Page
    $app->get("/", function() use ($app) {
        return $app['twig']->render('findandreplace.html.twig'); //
    });

    // User Input from form
    $app->get("/userInput", function() use ($app) {
        $new_phrase = new FindAndReplace;
        $result = $new_phrase->swapWords($_GET['sentence'], $_GET['find'], $_GET['change']);

        return $app['twig']->render('findandreplace.html.twig', array('result' => $result)); //
    });

    return $app;

?>

<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/ValueFinder.php";

    session_start();

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(),
        array("twig.path" => __DIR__."/../views"));

    $app->get("/", function() use ($app) {
        return $app["twig"]->render("root.twig");
    });

    $app->get("/results", function() use ($app) {
        $this_ValueFinder = new ValueFinder;
        $this_word = $this_ValueFinder->findWordTotal($_GET["word_input"]);
        return $app["twig"]->render("results.twig", array("value" => $this_word));
    });

    return $app;

?>
